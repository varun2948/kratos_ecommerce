<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\Products\AddFromValidation;

use Session;

class ProductsController extends Controller
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
    	return redirect()->route('admin.products');
    }

    public function delete(Request $request,$id)
    {
        $data=[];
        $data['row']= Products::where('id', $id)->first();

        if(!$data['row']){
            $request->session()->flash('error_message', 'Invalid Request');
            return redirect()->route('admin.products');
        }
        if($data['row']->image && file_exists(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR.$data['row']->image)) {
            unlink(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR.$data['row']->image);
        }
        $data['row']->delete();
        $request->session()->flash('success_message', 'Products Deleted Sucessfully');
        return redirect()->route('admin.products');
    }

    public function edit(Request $request,$id)
    {
        $data= [];
        // dd($id);
        $data['row'] = Products::where('id',$id)->first();
        // dd($data['row']);
        if(!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request.');
            return redirect()->route('admin.product.addproduct');

        }
        $data['row']->status = $data['row']->
        status == 1?'active':'in-active';
        return view('dashboard.product.editproduct', compact('data'));


    }

    public function update(Request $request,$id)
    {
        $data=[];
        $data['row']= Products::where('id', $id)->first();
        if($request->hasFile('feature_image')){
            $image= $request->file('feature_image');
            $image_data= $data['row']->feature_image;

            $image_name= rand(4953,9857).'_'.$image->getClientOriginalName();
            $imagefinalname='http://127.0.0.1:8000'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR.$image_name;
            $image->move(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'product',$image_name);
            if($data['row']->image && file_exists($image_data)){
                unlink($image_data);
            }
        }
        $user= auth()->user();
        $request->request->add([
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            // 'createdby' => $user->id,
            'feature_image'=> isset($image_name)?$imagefinalname:$data['row']->feature_image,
            'status' => $request->get('status') == 'active'?1:0,
            'sortorder'=>$request->get('sortorder'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'discounted_price' => $request->get('discounted_price'),
            'review' => $request->get('review'),
            'specific_description' => $request->get('specific_description'),
            'long_description' => $request->get('long_description'),
            'each_feature_product' => $request->get('each_feature_product'),
            'discounted_percentage' => $request->get('discounted_percentage'),

        ]);
        $data['row']->update($request->request->all());
        $request->session()->flash('success_message','Product updated Sucessfully');
        return redirect()->route('admin.products');
    }


    // public function getAddToCart(Request $request,$id){
    //         $product = Products::find($id);
    //         $oldCart = Session::has('cart') ? Session::get('cart'): null;
    //         $cart = new Cart($oldCart);
    //         dd($product->id);
    //         $cart->add($product, $product->id);

    //         $request->session()->put('cart', $cart);
    //         dd($request->session()->get('cart'));
    //         return redirect()->route('shop');
    // }
}
