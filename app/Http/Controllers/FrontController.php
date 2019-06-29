<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Advertisement;
use App\Models\Category;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =[];
        $data['rows'] =Products::select('*')->get();


        $data['slider'] =Slider::select('*')->get();

        $data['advert']= Advertisement::select('*')->get();

        $data['category']= Category::select('*')->get();


        return view('welcome',compact('data'));
    }

    public function shopview()
    {
        return view('Products.shop');
    }

    public function cartview()
    {
        return view('Products.cart');
    }

    public function contactview()
    {
        return view('Products.contactus');
    }

    public function userloginview()
    {
        return view('Products.userlogin');
    }

    public function productdetail(Request $request,$id)
    {
        $data= [];
        $data['row'] = Products::where('id',$id)->first();
        // dd($data['row']);
        if(!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request.');
            return redirect()->route('front');
        }
        // $data['row']->status = $data['row']->
        // status == 1?'active':'in-active';


        return view('Products.productdetail',compact('data'));

    }

}
