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
Route::get('/admin',function (){
    return view('admin.layouts.app');
});
Route::get('/admin',function (){
    return view('admin.layouts.app');
});
//Route::get('/admin/pr-category','admin\ProCategoriesController@index');

Route::namespace('admin')->prefix('admin')->as('admin.')->group(function (){
//    Route::get('product-category','ProCategoriesController@index')->name('pro-category');
//    Route::get('create-product-category','ProCategoriesController@create')->name('pro-category-create');
//    Route::post('store-product-category','ProCategoriesController@store')->name('pro-category-store');
    Route::resource('product-category', 'ProCategoriesController', ['only' => ['index','create', 'edit', 'update', 'destroy','store']]);
});