<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $data = [];

        // $data['allproduct'] = Products::select('*')->get();
        $data['allcategory'] = Cat::select('*')->get();
        return view('Products.checkout', compact('data'));
    }
    public function thankyou()
    {
        $data = [];

        // $data['allproduct'] = Products::select('*')->get();
        $data['allcategory'] = Cat::select('*')->get();
        return view('Products.thankyou', compact('data'));
    }


    public function store(Request $request)
    {

        $contents = Cart::content()->map(function ($item) {
            return $item->name . ',' . $item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::subtotal() / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                ],
            ]);
            // $this->addToOrdersTable($request, null);
            // Mail::send(new OrderPlaced);
            // Mail::to($request->email)->send(new OrderPlaced);

            Cart::instance('default')->destroy();
            return redirect()->route('checkout.thankyou')->with('success_message', 'Thank you! Your Payment has been Successfully Accepted');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error!' . $e->getMessage());
        }
    }
}
