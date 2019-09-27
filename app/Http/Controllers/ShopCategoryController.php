<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Cat;
use App\Models\Products;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopCategoryController extends Controller
{
    public function index(Request $request)
    {

        $data = [];

        // dd($request);
        if (request()->sortby == 'ascending') {
            $data['filterProduct'] = Products::select('*')->orderBy('title')->paginate(4);
            // dd($data['filterProduct']);
            $data['allcategory'] = Cat::select('*')->get();
        } elseif (request()->sortby == 'descending') {

            $data['filterProduct'] = Products::select('*')->orderBy('title', 'DESC')->paginate(4);
            // dd($data['filterProduct']);
            $data['allcategory'] = Cat::select('*')->get();
        } elseif (request()->sortby == 'low_to_high') {
            $data['filterProduct'] = Products::select('*')->orderBy('discounted_price')->paginate(4);
            // dd($data['filterProduct']);
            $data['allcategory'] = Cat::select('*')->get();
        } elseif (request()->sortby == 'high_to_low') {

            $data['filterProduct'] = Products::select('*')->orderBy('discounted_price', 'DESC')->paginate(4);
            // dd($data['filterProduct']);
            $data['allcategory'] = Cat::select('*')->get();
        } else {


            $data['allcategory'] = Cat::select('*')->get();
            // dd($data);
            $data['filterProduct'] = Products::select('*')->paginate(4);
        }

        return view('Products.shop', compact('data'));
    }

    public function getproductbycat($category)
    {
        if ($category) {
            $data = [];

            // $data['allproduct'] = Products::select('*')->get();
            $data['allcategory'] = Cat::select('*')->get();

            $data['filterProductNotJson'] = DB::table('products')
                ->join('category', 'category.id', '=', 'products.category')
                //->join('subcategory', 'category.id', '=', 'products.category')
                ->select('category.title as category_title', 'products.*')
                ->where(function ($query) use ($category) {
                    $query->where('category', '=', $category);
                })->paginate(4);
            $data['filterProduct'] = $data['filterProductNotJson'];
            // dd($data['filterCategory']);
            return view('Products.shop', compact('data'));
        } else {
            dd('sdsd');
        }
    }

    public function search(Request $request)
    {
        $data = [];
        $data['allcategory'] = Cat::select('*')->get();

        $query = $request->input('query');
        $data['searchquery'] = Products::where('title', 'like', "%$query%")
            ->orWhere('short_description', 'like', "%$query%")
            ->orWhere('specific_description', 'like', "%$query%")
            ->orWhere('long_description', 'like', "%$query%")->paginate(10);

        return (view('searchresult', compact('data')));
    }
}
