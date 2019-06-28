<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Requests\Products\AddFromValidation;

class ProductController extends Controller
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
        $data =[];
		$data['rows'] =Products::select('*')->get();
        return view('dashboard.product.product',compact('data'));
    }

    public function addindex()
    {
        return view('dashboard.product.addproduct');
    }


    public function store(AddFromValidation $request)
    {
    	//dd($request->all());
    	if($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = rand(4952, 9857).'_'.$image->getClientOriginalName();
			$image->move(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product',$image_name);
            $imagefinalname = 'http://127.0.0.1:8000'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR.$image_name;

    	}
        $user = auth()->user();
    	$request->request->add([
    			'title' => $request->get('title'),
    			'short_description' => $request->get('short_description'),
                'feature_image' => $imagefinalname,
    			'price' => $request->get('price'),
    			'discounted_price' => $request->get('discounted_price'),
    			'review' => $request->get('review'),
    			'specific_description' => $request->get('specific_description'),
    			'long_description' => $request->get('long_description'),
    			'each_feature_product' => $request->get('each_feature_product'),
    			'discounted_percentage' => $request->get('discounted_percentage'),
    		]);
    	// dd($request->request->all());
    	Products::create($request->request->all());
    	$request->session()->flash('success_message', 'Product added Successfully.');
    	return redirect()->route('admin.product');
    }
}
