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

Route::get('/store/welcome', function(){
    return view('store.welcome');
});

Route::get('/admin/customers', 'AdminController@customers')->name('admin_customers');
Route::get('/admin/shoppers' , 'AdminController@shoppers')->name('admin_shoppers');
Route::get('/admin/stores' , 'AdminController@stores')->name('admin_stores');
Route::get('/admin/stores/store' , 'AdminController@stores_store')->name('admin_stores_store');
Route::get('/admin/departments' , 'AdminController@departments')->name('admin_departments');
Route::get('/admin/products' , 'AdminController@products')->name('admin_products');
Route::get('/admin/cities' , 'AdminController@cities')->name('admin_cities');
Route::get('/admin/old_orders' , 'AdminController@old_orders')->name('admin_old_orders');
Route::get('/admin/new_orders' , 'AdminController@new_orders')->name('admin_new_orders');
Route::get('/admin/statistics' , 'AdminController@statistics')->name('admin_statistics');
Route::get('/admin/settings' , 'AdminController@settings')->name('admin_settings');









Route::get('/store/{storname}', function($storename){
    return view('store', compact('storename'));
});

