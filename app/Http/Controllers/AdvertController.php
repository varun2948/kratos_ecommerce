<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Requests\Advertisement\AddFromValidation;

class AdvertController extends Controller
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
        return view('dashboard.advertisement.advert');
    }

    public function addindex()
    {
        return view('dashboard.advertisement.addadvert');
    }


    public function store(AddFromValidation $request)
    {
    	//dd($request->all());
    	if($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = rand(4952, 9857).'_'.$image->getClientOriginalName();
			$image->move(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'advertisement',$image_name);
    	}
        $user = auth()->user();
    	$request->request->add([
    			'status' => $request->get('status') == 'active'?1:0,
                'image' => $image_name,
                'sort_order' => $request->get('sortorder'),
    		]);
    	// dd($request->request->all());
    	Advertisement::create($request->request->all());
    	$request->session()->flash('success_message', 'Advertisement added Successfully.');
    	return redirect()->route('admin.advert');
    }
}
