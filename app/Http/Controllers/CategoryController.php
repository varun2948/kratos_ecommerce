<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\Category\AddFromValidation;

class CategoryController extends Controller
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
        $data['rows'] = Cat::select('*')->get();
        //dd($data['rows']);
        return view('dashboard.category.category', compact('data'));
    }

    public function addindex()
    {
        return view('dashboard.category.addcategory');
    }


    public function store(AddFromValidation $request)
    {
        //dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = rand(4952, 9857) . '_' . $image->getClientOriginalName();
            $image->move(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category', $image_name);
            $imagefinalname = url('/') . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . $image_name;

            // dd($imagefinalname);
        }
        $user = auth()->user();
        $request->request->add([
            'title' => $request->get('title'),
            'image' => $imagefinalname,
            'slug' => $request->get('slug'),
        ]);
        // dd($request->request->all());
        Cat::create($request->request->all());
        $request->session()->flash('success_message', 'Category added Successfully.');
        return redirect()->route('admin.category');
    }

    public function delete(Request $request, $id)
    {
        $data = [];
        $data['row'] = Cat::where('id', $id)->first();

        //dd($data['row']);
        if (!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request');
            return redirect()->route('admin.category');
        }
        if ($data['row']->image && file_exists(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . $data['row']->image)) {
            unlink(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . $data['row']->image);
        }

        $data['row']->delete();
        $request->session()->flash('success_message', 'Category Deleted Succcessfully');
        return redirect()->route('admin.category');
    }
    public function edit(Request $request, $id)
    {
        $data = [];
        // dd($id);
        $data['row'] = Cat::where('id', $id)->first();
        // dd($data['row']);
        if (!$data['row']) {
            $request->session()->flash('error_message', 'Invalid Request.');
            return redirect()->route('admin.category.addcategory');
        }
        $data['row']->status = $data['row']->status == 1 ? 'active' : 'in-active';
        return view('dashboard.category.editcategory', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = [];
        $data['row'] = Cat::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_data = $data['row']->image;
            // dd($image_data);
            $image_name = rand(4953, 9857) . '_' . $image->getClientOriginalName();
            $imagefinalname = url('/') . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . $image_name;
            $image->move(public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'category', $image_name);
            // dd(public_path().DIRECTORY_SEPERATOR.'uploads'.DIRECTORY_SEPERATOR.'category'.DIRECTORY_SEPERATOR.$image_data);
            if ($data['row']->image && file_exists($image_data)) {
                unlink($image_data);
            }
        }
        $user = auth()->user();
        $request->request->add([
            'title' => str_slug($request->get('title')),
            'createdby' => $user->id,
            'slug' => $request->get('slug'),
            'image' => isset($image_name) ? $imagefinalname : $data['row']->image
        ]);
        $data['row']->update($request->request->all());
        $request->session()->flash('success_message', 'Initiative Update Succcessfully');
        return redirect()->route('admin.category');
    }
}
