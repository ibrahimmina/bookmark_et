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

if(Auth::check()){
    Route::get('/', 'VerifyHomeController@index');
}else{
    Route::get('/', 'HomeController@index');
}

Auth::routes(['verify' => true]);

Route::get('/home', 'VerifyHomeController@index')->name('home');

Route::get('VerificationCheck', 'VerifyHomeController@index');

Route::get('book/{id}', 'BookController@show');

Route::post('productCreateStep1', 'ProductController@PostproductCreateStep1');

/* Route::post('productCreateStep2', 'ProductController@PostproductCreateStep2');
Route::post('productCreateStep3', 'ProductController@PostproductCreateStep3');
Route::post('productCreateStep4', 'ProductController@PostproductCreateStep4'); */

Route::get('/addressselect', 'AddressController@addressSelect');

Route::post('productinsert/{id}', 'ProductController@store');
Route::get('product/getbyuserid', 'ProductController@getbyuserid');

Route::get('order/getbyuserid', 'OrderController@getbyuserid');
Route::get('order/{id}', 'OrderController@create');
Route::post('orderinsert/{id}', 'OrderController@store');

Route::get('wish/getByBookID', 'WishController@getByBookID');
Route::get('wish/getbyuserid', 'WishController@getbyuserid');
Route::post('wish/toggleByBookID', 'WishController@toggleByBookID');
//Route::post('wish/{id}', 'WishController@store');

//Route::get('/address', 'AddressController@index');
Route::resource('books', 'BookController');
Route::resource('addresses', 'AddressController');
Route::resource('wishes', 'WishController');
Route::resource('orders', 'OrderController');
Route::resource('products', 'ProductController');

Route::get('search', 'BookController@search');

Route::get('searchGood', 'ProductController@searchGood');


