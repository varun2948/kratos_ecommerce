<?php

namespace App\Http\Controllers;

// use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\Products\AddFromValidation;

use Session;

class CartController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {

       return view('Products.cart',compact('data'));
   }




   public function store(Request $request)
   {
        Cart::add($request->id, $request->title,1, $request->discounted_price);

        $request->session()->flash('success_message','Item was added To Cart');
        return redirect()->route('cart.index');
   }

   public function empty()
   {
    Cart::destroy();
   }

   public function delete(Request $request,$id)
   {

   }

   public function edit(Request $request,$id)
   {


   }

   public function update(Request $request,$id)
   {

   }



}
