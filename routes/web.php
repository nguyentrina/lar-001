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
    Route::resource('product-category', 'ProCategoriesController', ['only' => ['index','create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('product', 'ProductsController', ['only' => ['index','store','create', 'edit', 'update', 'destroy']]);
});
/*Route::get('/admin/product','admin\ProductsController@index');
Route::post('/admin/product','admin\ProductsController@store');*/
Route::post('image','Images@store');