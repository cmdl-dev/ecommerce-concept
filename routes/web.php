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

Route::get('/', 'PageController@index');

Route::get('/about','PageController@about');

// Products
Route::get('/products','ProductController@index');
Route::get('/products/new-arrivals','ProductController@newArrivals');
// subCat === Sub Category
Route::get('/{brand}/{subCat}/{slug}','ProductController@show');
// Cart
Route::get('/cart/checkout','CartController@checkout');
//User Account
Route::get('/account','UserController@index');
Route::get('/account/change-password','UserController@changePassword');
Route::get('/account/orders','UserController@orders');
// Route::get('/register','');
// Route::get('/login','');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
