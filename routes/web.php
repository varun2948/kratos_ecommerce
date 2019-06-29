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

    Route::get('', 				            ['as' =>'dashboard', 	    			'uses'=>'HomeController@index']);
    Route::get('admin', 				            ['as' =>'dashboard', 	    			'uses'=>'HomeController@index']);

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

    Route::get('products', 				            ['as' =>'products', 	    			 'uses'=>'ProductsController@index']);
    Route::get('addproducts', 				        ['as' =>'addproducts', 	    			 'uses'=>'ProductsController@addindex']);
    Route::post('products/store',				        ['as'=>'products.store',			     'uses'=>'ProductsController@store']);
    Route::get('products/edit/{id}',                    ['as'=>'products.edit',			         'uses'=>'ProductsController@edit']);
    Route::get('products/delete/{id}',				['as'=>'products.delete',				 'uses'=>'ProductsController@delete']);
    Route::post('products/update/{id}',		        ['as'=>'products.update',				 'uses' =>'ProductsController@update']);



    Route::get('clients', 				            ['as' =>'clients', 	    			     'uses'=>'ClientsController@index']);
    Route::get('addclients', 				        ['as' =>'addclients', 	    			 'uses'=>'ClientsController@addindex']);
	Route::post('clients/store',				    ['as'=>'clients.store',					 'uses'=>'ClientsController@store']);
    Route::get('clients/edit/{id}',                 ['as'=>'clients.edit',			         'uses'=>'ClientsController@edit']);
    Route::get('clients/delete/{id}',				['as'=>'clients.delete',				 'uses'=>'ClientsController@delete']);
    Route::post('clients/update/{id}',		        ['as'=>'clients.update',				 'uses' =>'ClientsController@update']);

});

Route::get('/', 				                ['as' =>'front', 	    			'uses'=>'FrontController@index']);
// Route::get('testcont/pdetails/{id}', 		['as' =>'testcont.pdetails', 	    'uses'=>'FrontController@testcont']);
Route::get('productdetail/{id}', 		['as' =>'productdetail', 	    'uses'=>'FrontController@productdetail']);
Route::get('/shop', 		['as' =>'shop', 	    'uses'=>'FrontController@shopview']);
// Route::get('/cart', 		['as' =>'cart', 	    'uses'=>'FrontController@cartview']);
Route::get('/contact', 		['as' =>'contact', 	    'uses'=>'FrontController@contactview']);

Route::get('/cart', 		['as' =>'cart.index', 	    'uses'=>'CartController@index']);
Route::post('/cart', 		['as' =>'cart.store', 	    'uses'=>'CartController@store']);

Route::get('empty', 		['as' =>'cart.empty', 	    'uses'=>'CartController@empty']);






// Route::get('/add-to-cart/{id}', ['as' =>'product.addToCart', 'uses'=>'ProductsController@getAddToCart']);

// Route::get('/login', 		['as' =>'login', 	    'uses'=>'FrontController@userloginview']);
