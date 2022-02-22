<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('shops', 'ShopController');
Route::resource('users', 'UserController');
Route::resource('factors', 'FactorController');
Route::resource('itemsfactor', 'ItemFactorController');
Route::resource('products', 'ProductController');
Route::resource('imagesproduct', 'ImageProductController');
Route::resource('optionsproduct', 'ProductOptionController');
