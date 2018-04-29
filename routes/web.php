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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact');

Route::get('/products', 'ProductController@index')->name('home');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/all-products', 'ProductController@all');
Route::post('/product/{product}/aaa', 'ProductController@store')->name('home');
Route::delete('/product/{product}', 'ProductController@delete')->name('home');
Route::get('/discounts', 'ProductController@discounts');
Route::get('/cart', 'ProductController@cart');

Route::post('/product/{product}/add-comment', 'CommentController@store')->name('home');

Route::get('/admin/products/', 'AdminController@index')->middleware('admin');
Route::delete('/admin/product/{product}', 'AdminController@destroy')->middleware('admin');
Route::post('/admin/product/create-product', 'AdminController@create')->middleware('admin');
Route::patch('/admin/product/{product}', 'AdminController@update')->middleware('admin');
Route::get('/admin/product/{product}', 'AdminController@show')->middleware('admin');







