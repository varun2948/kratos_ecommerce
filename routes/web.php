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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('Products.shop');
});

Route::get('/cart', function () {
    return view('Products.cart');
});
Route::get('/contact', function () {
    return view('Products.contactus');
});
Route::get('/detail', function () {
    return view('Products.productdetail');
});
Route::get('/login', function () {
    return view('Products.userlogin');
});

Route::resource('products','ProductController');
// Route::get('products/create, '')
