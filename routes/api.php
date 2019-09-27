<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('articles', 'ApiController@index');
Route::get('articles/{id}', 'ApiController@show');
Route::post('articles', 'ApiController@store');
Route::put('updatearticles/{id}', 'ApiController@update');
Route::delete('deletearticles/{id}', 'ApiControllerr@delete');
