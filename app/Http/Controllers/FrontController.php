<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Advertisement;
use App\Models\Cat;
use DB;

class FrontController extends Controller
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
        $data['rows'] = Products::inRandomOrder()->select('*')->get();

        $data['rowdesc'] = Products::where('each_feature_product', '1')->inRandomOrder()->get();

        $data['allcategory'] = Cat::select('*')->get(); //Category::select('*')->get();
        // dd('Varun');
        $data['slider'] = Slider::select('*')->get();

        $data['adverttop'] = Advertisement::select('*')->offset(0)->limit(2)->get();
        $data['advertbottom'] = Advertisement::select('*')->offset(2)->limit(2)->get();
        $data['category'] = Cat::select('*')->get();


        return view('welcome', compact('data'));
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
        $data = [];
        $data['allcategory'] = Cat::select('*')->get();
        return view('Products.contactus', compact('data'));
    }

    public function userloginview()
    {
        return view('Products.userlogin');
    }

    public function productdetail(Request $request, $id)
    {
        $data = [];
        $data['allcategory'] = Cat::select('*')->get();
        $data['row'] = Products::where('id', $id)->first();
        // dd($data['row']);
        if (!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request.');
            return redirect()->route('front');
        }
        // $data['row']->status = $data['row']->
        // status == 1?'active':'in-active';


        return view('Products.productdetail', compact('data'));
    }
}
