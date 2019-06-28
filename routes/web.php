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



Auth::routes();



Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'auth'], function (){

	// Route::get('home', 				        ['as' =>'home', 	    			    'uses'=>'HomeController@index']);
    Route::get('/', 				                ['as' =>'dashboard', 	    			'uses'=>'HomeController@index']);

    Route::get('slider', 				            ['as' =>'slider', 	    			    'uses'=>'SliderController@index']);
    Route::get('addslider', 				        ['as' =>'addslider', 	    			'uses'=>'SliderController@addindex']);
    Route::post('slider/store',				        ['as'=>'slider.store',					'uses'=>'SliderController@store']);
    Route::get('slider/edit/{id}',                  ['as'=>'slider.edit',			        'uses'=>'SliderController@edit']);
    Route::get('slider/delete/{id}',				['as'=>'slider.delete',				    'uses'=>'SliderController@delete']);
    Route::post('slider/update/{id}',		        ['as'=>'slider.update',				    'uses' =>'SliderController@update']);


    Route::get('advert', 				            ['as' =>'advert', 	    			    'uses'=>'AdvertController@index']);
    Route::get('addadvert', 				        ['as' =>'addadvert', 	    			'uses'=>'AdvertController@addindex']);
	Route::post('advert/store',				        ['as'=>'advert.store',					'uses'=>'AdvertController@store']);
    Route::get('advert/edit/{id}',                  ['as'=>'advert.edit',			        'uses'=>'AdvertController@edit']);
    Route::get('advert/delete/{id}',				['as'=>'advert.delete',				    'uses'=>'AdvertController@delete']);
    Route::post('advert/update/{id}',		        ['as'=>'advert.update',				    'uses' =>'AdvertController@update']);


    Route::get('category', 				            ['as' =>'category', 	    			'uses'=>'CategoryController@index']);
    Route::get('addcategory', 				        ['as' =>'addcategory', 	    			'uses'=>'CategoryController@addindex']);
    Route::post('category/store',				    ['as'=>'category.store',				'uses'=>'CategoryController@store']);
    Route::get('category/editcategory/{id}',        ['as'=>'category.editcategory',			'uses'=>'CategoryController@edit']);
    Route::get('category/delete/{id}',				['as'=>'category.delete',				'uses'=>'CategoryController@delete']);
    Route::post('category/update/{id}',		        ['as'=>'category.update',				'uses' =>'CategoryController@update']);

    Route::get('product', 				            ['as' =>'product', 	    			     'uses'=>'ProductController@index']);
    Route::get('addproduct', 				        ['as' =>'addproduct', 	    			 'uses'=>'ProductController@addindex']);
	Route::post('product/store',				    ['as'=>'product.store',					 'uses'=>'ProductController@store']);


    Route::get('clients', 				            ['as' =>'clients', 	    			     'uses'=>'ClientsController@index']);
    Route::get('addclients', 				        ['as' =>'addclients', 	    			 'uses'=>'ClientsController@addindex']);
	Route::post('clients/store',				    ['as'=>'clients.store',					 'uses'=>'ClientsController@store']);

});
