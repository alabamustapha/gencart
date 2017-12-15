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
Route::get('/location', function(){
    return view('location');
});
Route::get('/admin/users', 'AdminController@showUsers')->name('admin_users');
