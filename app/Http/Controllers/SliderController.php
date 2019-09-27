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
        $data = [];
        $data['rows'] = Slider::select('*')->get();
        return view('dashboard.slider.slider', compact('data'));
    }

    public function addindex()
    {
        return view('dashboard.slider.addslider');
    }


    public function store(AddFromValidation $request)
    {
        //dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = rand(4952, 9857) . '_' . $image->getClientOriginalName();
            $image->move(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider', $image_name);
            $imagefinalname = url('/') . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider' . DIRECTORY_SEPARATOR . $image_name;
        }
        $user = auth()->user();
        $request->request->add([
            'title' => $request->get('title'),
            'short_description' => $request->get('shortdesc'),
            'status' => $request->get('status') == 'active' ? 1 : 0,
            'image' => $imagefinalname,
            'sort_order' => $request->get('sortorder'),
        ]);
        // dd($request->request->all());
        Slider::create($request->request->all());
        $request->session()->flash('success_message', 'Slider added Successfully.');
        return redirect()->route('admin.slider');
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        // dd($id);
        $data['row'] = Slider::where('id', $id)->first();
        // dd($data['row']);
        if (!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request.');
            return redirect()->route('admin.slider.addslider');
        }
        $data['row']->status = $data['row']->status == 1 ? 'active' : 'in-active';
        return view('dashboard.slider.editslider', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['row'] = Slider::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_data = $data['row']->image;

            $image_name = rand(4953, 9857) . '_' . $image->getClientOriginalName();
            $imagefinalname =url('/') . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider' . DIRECTORY_SEPARATOR . $image_name;
            $image->move(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider', $image_name);
            if ($data['row']->image && file_exists($image_data)) {
                unlink($image_data);
            }
        }
        $user = auth()->user();
        $request->request->add([
            'title' => $request->get('title'),
            'short_description' => $request->get('shortdesc'),
            // 'createdby' => $user->id,
            'image' => isset($image_name) ? $imagefinalname : $data['row']->image,
            'status' => $request->get('status') == 'active' ? 1 : 0,
            'sortorder' => $request->get('sortorder'),

        ]);
        $data['row']->update($request->request->all());
        $request->session()->flash('success_message', 'Slider updated Sucessfully');
        return redirect()->route('admin.slider');
    }

    public function delete(Request $request, $id)
    {
        $data = [];
        $data['row'] = Slider::where('id', $id)->first();

        if (!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request');
            return redirect()->route('admin.slider');
        }
        if ($data['row']->image && file_exists(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider' . DIRECTORY_SEPARATOR . $data['row']->image)) {
            unlink(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'slider' . DIRECTORY_SEPARATOR . $data['row']->image);
        }
        $data['row']->delete();
        $request->session()->flash('success_message', 'Slider Deleted Sucessfully');
        return redirect()->route('admin.slider');
    }
}
