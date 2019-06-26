<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/shop', function () {
//     return view('Products.shop');
// });

// Route::get('/cart', function () {
//     return view('Products.cart');
// });
// Route::get('/contact', function () {
//     return view('Products.contactus');
// });
// Route::get('/detail', function () {
//     return view('Products.productdetail');
// });
// Route::get('/admin', function () {
//     return view('adminlayouts.index');
// });

// Route::get('/login', function () {
//     return view('Products.userlogin');
// });

Route::resource('products','ProductController');
// Route::get('products/create, '')

Auth::routes();



Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'auth'], function (){

	Route::get('home', 				        ['as' =>'home', 	    			    'uses'=>'HomeController@index']);

	Route::get('slider', 				    ['as' =>'slider', 	    			    'uses'=>'SliderController@index']);
    Route::get('addslider', 				['as' =>'addslider', 	    			'uses'=>'SliderController@addindex']);
	Route::post('slider/store',				['as'=>'slider.store',					'uses'=>'SliderController@store']);

    Route::get('advert', 				['as' =>'advert', 	    			'uses'=>'SliderController@index']);
    Route::get('addadvert', 				['as' =>'addadvert', 	    			'uses'=>'SliderController@addindex']);
	Route::post('addadvert/store',				['as'=>'slider.store',					'uses'=>'SliderController@store']);

});
