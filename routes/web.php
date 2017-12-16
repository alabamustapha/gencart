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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');
Route::get('/admin/users', 'AdminController@showUsers')->name('admin_users');

Route::get('/store/{store}', 'StoreController@index');
Route::get('/store/welcome', function(){
});

Route::get('/store/{storname}', function($storename){
    return view('store', compact('storename'));
});
