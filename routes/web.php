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
Route::get('/admin/users', 'AdminController@showUsers')->name('admin_users');

Route::get('/store/welcome', function(){
    return view('store.welcome');
});


/*
 |-------------------------------------------------------------------------
 |admin dashboard routes
 |------------------------------------------------------------------------- 
*/
Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');
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


/*
 |-------------------------------------------------------------------------
 |store dashboard routes
 |------------------------------------------------------------------------- 
*/
Route::get('storeAdmin' , 'StoreAdminController@dashboard')->name('storeAdmin_dashboard');
Route::get('storeAdmin/departments' , 'StoreAdminController@departments')->name('storeAdmin_departments');
Route::get('storeAdmin/products' , 'StoreAdminController@products')->name('storeAdmin_products');
Route::get('storeAdmin/product_edit' , 'StoreAdminController@product_edit')->name('storeAdmin_product_edit');
Route::get('storeAdmin/old_orders' , 'StoreAdminController@old_orders')->name('storeAdmin_old_orders');
Route::get('storeAdmin/new_orders' , 'StoreAdminController@new_orders')->name('storeAdmin_new_orders');
Route::get('storeAdmin/statisitcs' , 'StoreAdminController@statisitcs')->name('storeAdmin_statistics');
Route::get('storeAdmin/settings' , 'StoreAdminController@settings')->name('storeAdmin_settings');



/*
 |-------------------------------------------------------------------------
 |shopper dashboard routes
 |------------------------------------------------------------------------- 
*/
Route::get('shopper' , 'ShopperController@dashboard')->name('shopper_dashboard');
Route::get('shopper/delivered' , 'ShopperController@delivered')->name('shopper_delivered');
Route::get('shopper/available' , 'ShopperController@available')->name('shopper_available');
Route::get('shopper/statisitcs' , 'ShopperController@statistics')->name('shopper_statistics');
Route::get('shopper/settings' , 'ShopperController@settings')->name('shopper_settings');











Route::get('/store/{storname}', function($storename){
    return view('store', compact('storename'));
});

