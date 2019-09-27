<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Http\Requests\Clients\AddFromValidation;

class ClientsController extends Controller
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
		$data['rows'] =Clients::select('*')->get();
        //dd($data['rows']);
        return view('dashboard.clients.clients',compact('data'));
    }

    public function addindex()
    {
        return view('dashboard.clients.addclients');
    }


    public function store(AddFromValidation $request)
    {
    	// dd('Something');
    	if($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = rand(4952, 9857).'_'.$image->getClientOriginalName();
            $image->move(public_path().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Clients',$image_name);
            $imagefinalname = 'http://127.0.0.1:8000'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'Clients'.DIRECTORY_SEPARATOR.$image_name;

            // dd($imagefinalname);
    	}
        $user = auth()->user();
    	$request->request->add([
    			'title' => $request->get('title'),
    			'status' => $request->get('status') == 'active'?1:0,
                'url' => $request->get('url'),
                // 'sort_order' => $request->get('sort_order'),
                'image' => $imagefinalname,
    		]);
    	// dd($request->request->all());
    	Clients::create($request->request->all());
    	$request->session()->flash('success_message', 'Clients added Successfully.');
    	return redirect()->route('admin.clients');
    }
}
