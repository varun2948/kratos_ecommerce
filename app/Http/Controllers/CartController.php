<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Http\Requests\Products\AddFromValidation;

use Session;
use DB;
use App\Models\Products;

class CartController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['allcategory'] = Cat::select('*')->get();
        $data['rows'] = Products::select('*')->get();
        return view('Products.cart', compact('data'));
    }




    public function store(Request $request)
    {

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is Already in Your Cart!');
        }
        Cart::add($request->id, $request->title, 1, $request->discounted_price, ['url' => $request->image_url]);

        $request->session()->flash('success_message', 'Item was added To Cart');
        return redirect()->route('cart.index');
    }

    public function empty()
    {
        Cart::destroy();
        return back()->with('success_message', 'Cleared Cart List!');
    }

    public function destroy($id)
    {

        Cart::remove($id);

        return back()->with('success_message', 'Item has Been Removed!');
    }

    public function edit(Request $request, $id)
    { }

    public function update(Request $request, $id)
    { }
}
