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
        $data =[];
		$data['rows'] =Advertisement::select('*')->get();
        return view('dashboard.advertisement.advert',compact('data'));
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
			$image->move(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement',$image_name);
            $imagefinalname = url('/').DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$image_name;

    	}
        $user = auth()->user();
    	$request->request->add([
    			'status' => $request->get('status') == 'active'?1:0,
                'image' => $imagefinalname,
                'sort_order' => $request->get('sortorder'),
    		]);
    	// dd($request->request->all());
    	Advertisement::create($request->request->all());
    	$request->session()->flash('success_message', 'Advertisement added Successfully.');
    	return redirect()->route('admin.advert');
    }

    public function edit(Request $request,$id)
    {
        $data=[];
        $data['row']= Advertisement::where('id',$id)->first();

        if(!$data['row']){
            $request->session()->flash('error_message','Invalid Request.');
            return redirect()->route('admin.advert.add');
        }
        $data['row']->status=$data['row']->status ==1?'active':'in-active';
        return view('dashboard.advertisement.editadvert',compact('data'));
    }


    public function update(Request $request,$id)
    {
        $data=[];
        $data['row']= Advertisement::where('id', $id)->first();
        if($request->hasFile('image')){
            $image= $request->file('image');
            $image_data= $data['row']->image;

            $image_name= rand(4953,9857).'_'.$image->getClientOriginalName();
            $imagefinalname=url('/').DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$image_name;
            $image->move(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement',$image_name);
            if($data['row']->image && file_exists($image_data)){
                unlink($image_data);
            }
        }
        $user= auth()->user();
        $request->request->add([
            'image'=> isset($image_name)?$imagefinalname:$data['row']->image,
            'status' => $request->get('status') == 'active'?1:0,
            'sortorder'=>$request->get('sortorder'),

        ]);
        $data['row']->update($request->request->all());
        $request->session()->flash('success_message','Advertisement updated Sucessfully');
        return redirect()->route('admin.advert');
    }

    public function delete(Request $request,$id)
    {
        $data=[];
        $data['row']= Advertisement::where('id', $id)->first();

        if(!$data['row']){
            $request->session()->flash('error_message', 'Invalid Request');
            return redirect()->route('admin.advert');
        }
        if($data['row']->image && file_exists(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data['row']->image)) {
            unlink(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data['row']->image);
        }
        $data['row']->delete();
        $request->session()->flash('success_message', 'Slider Deleted Sucessfully');
        return redirect()->route('admin.advert');
    }
}
