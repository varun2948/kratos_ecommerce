<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;

class ApiController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = RegisterUser::all();
        $feature = [];
        // dd($users, "Varun");

        for ($i = 0; $i < count($users); $i++) {
            $feature[] = [
                'type' => "Feature",
                'properties' => [
                    "question" => $users[$i]->email,
                    "message" => $users[$i]->name,
                    "name" => $users[$i]->blood_type,
                    "office" => $users[$i]->birth_year,
                    "gender" => $users[$i]->gender,
                    "token" => $users[$i]->token,
                ],
                'geometry' => [
                    "type" => "Point",
                    "coordinates" => [
                        (float) $users[$i]->longitude, (float) $users[$i]->latitude
                    ]
                ]
            ];

            // $feature_list . features . append($feature);
        }
        $feature_list = [
            // 'id'            => 78,
            'type'          => 'FeatureCollection',
            'features'    => $feature

        ];
        return $feature_list;
    }
    public function toArray()
    {
        return [
            'id'            => $this->id,
            'type'          => 'FeatureCollection',
            'crs'          => [
                "type" => "name",
                "properties" => [
                    "name" => "EPSG:4326"
                ]
            ],

            'features'    => [
                'type' => "Feature",
                'properties' => [
                    "email" => $this->email,
                    "name" => $this->name,
                    "blood_type" => $this->blood_type,
                    "latitude" => $this->latitude,
                    "longitude" => $this->longitude,
                    "birth_year" => $this->birth_year,
                    "gender" => $this->gender,
                    "token" => $this->token,
                ]
            ],

        ];
    }

    public function show($id)
    {
        return RegisterUser::find($id);
    }

    public function store(Request $request)
    {
        return RegisterUser::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = RegisterUser::findOrFail($id);
        $article->update($request->all());

        return response()->json($article);

        //     $product  = DB::table('products')->where('pid',$request->input('pid'))->get();
        //    $product->name = $request->input('name');
        //    $product->price = $request->input('price');
        //    $product->description = $request->input('description');
        //    $product->save();
        //    $response["products"] = $product;
        //    $response["success"] = 1;
        // return response()->json($response);
    }

    public function delete(Request $request, $id)
    {
        $article = RegisterUser::findOrFail($id);
        $article->delete();

        return 204;
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required ',
            'email' => 'required|unique:register_users,email'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        RegisterUser::create($input);
        return response()->json(['success' => "Use Regiser Successfully"], '200');
    }
}
