<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index() {
        return view('Products.checkout');
    }
    public function thankyou() {
        return view('Products.thankyou');
    }


    public function store(Request $request)
    {
        $contents = Cart::content()->map(function($item){
            return $item->name.','.$item->qty;
        })->values()->toJson();
        try{
            $charge = Stripe::charges()->create([
                'amount'=> Cart::subtotal() / 100,
                'currency' => 'CAD',
                'source' =>$request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                ],
            ]);

            Cart::instance('default')->destroy();
                    return redirect()->route('checkout.thankyou')->with('success_message', 'Thank you! Your Payment has been Successfully Accepted');
        }
        catch(CardErrorException $e){
            return back()->withErrors('Error!' . $e->getMessage());
        }
    }
}
