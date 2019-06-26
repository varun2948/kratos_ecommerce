<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\Slider\AddFromValidation;


class SliderController extends Controller
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
        return view('dashboard.slider.slider');
    }

    public function addindex()
    {
        return view('dashboard.slider.addslider');
    }


    public function store(AddFromValidation $request)
    {
    	//dd($request->all());
    	if($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = rand(4952, 9857).'_'.$image->getClientOriginalName();
			$image->move(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'slider',$image_name);
    	}
        $user = auth()->user();
    	$request->request->add([
    			'title' => $request->get('title'),
    			'short_description' => $request->get('shortdesc'),
    			'status' => $request->get('status') == 'active'?1:0,
                'image' => $image_name,
                'sort_order' => $request->get('sortorder'),
    		]);
    	// dd($request->request->all());
    	Slider::create($request->request->all());
    	$request->session()->flash('success_message', 'Slider added Successfully.');
    	return redirect()->route('admin.slider');
    }
}
