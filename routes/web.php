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



Route::middleware(['guest'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/store/welcome', function(){

        $stores = \App\Store::with('categories')->get();

        $categories = \App\Category::all();

        return view('store.welcome', compact(['stores', 'categories']));
    });

    Route::get('user/become_shopper', 'ShopperController@showTerms')->name('become_shopper');

    Route::get('/stores/{store}', 'StoreController@show')->name('show_store');

});



Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');
    Route::get('/admin/users', 'AdminController@showUsers')->name('admin_users');
    Route::get('/admin/customers', 'AdminController@customers')->name('admin_customers');
    Route::get('/admin/shoppers', 'AdminController@shoppers')->name('admin_shoppers');
    Route::get('/admin/stores', 'StoreController@index')->name('admin_stores');
    Route::get('/admin/stores/create', 'StoreController@create')->name('admin_create_store');
    Route::post('/admin/stores', 'StoreController@store')->name('admin_store_store');
    Route::get('/admin/stores/{store}', 'AdminController@showStore')->name('admin_show_store');
    Route::get('/admin/stores/{store}/departments', 'AdminController@showStoreDepartments')->name('admin_store_departments');    
    Route::post('/admin/stores/{store}/departments', 'DepartmentController@store')->name('admin_add_store_department');    
    Route::get('/admin/stores/{store}/departments/{department}', 'AdminController@showStoreDepartment')->name('admin_store_department');    
    Route::post('/admin/stores/{store}/departments/{department}', 'ShelfController@store')->name('admin_add_store_shelf');    
    
    Route::post('/products', 'ProductController@store')->name('add_product');

    
    Route::get('/storeAdmin', 'StoreAdminController@dashboard')->name('storeAdmin_dashboard');
    Route::get('/storeAdmin/departments', 'StoreAdminController@departments')->name('storeAdmin_departments');
    Route::get('/storeAdmin/products', 'StoreAdminController@products')->name('storeAdmin_products');
    Route::get('/storeAdmin/products/product', 'StoreAdminController@product')->name('storeAdmin_product');
    Route::get('/storeAdmin/products/product_edit', 'StoreAdminController@product_edit')->name('storeAdmin_product_edit');
    Route::get('/storeAdmin/old_orders', 'StoreAdminController@old_orders')->name('storeAdmin_old_orders');
    Route::get('/storeAdmin/new_orders', 'StoreAdminController@new_orders')->name('storeAdmin_new_orders');
    Route::get('/storeAdmin/statisitcs', 'StoreAdminController@statisitcs')->name('storeAdmin_statistics');
    Route::get('/storeAdmin/settings', 'StoreAdminController@settings')->name('storeAdmin_settings');


    Route::get('/shopper', 'ShopperController@dashboard')->name('shopper_dashboard');
    Route::get('/shopper/delivered', 'ShopperController@delivered')->name('shopper_delivered');
    Route::get('/shopper/available', 'ShopperController@available')->name('shopper_available');
    Route::get('/shopper/statisitcs', 'ShopperController@statistics')->name('shopper_statistics');
    Route::get('/shopper/settings', 'ShopperController@settings')->name('shopper_settings');

    
    
    
    
    Route::get('/admin/departments', 'AdminController@departments')->name('admin_departments');
    Route::get('/admin/products', 'AdminController@products')->name('admin_products');
    Route::get('/admin/cities', 'AdminController@cities')->name('admin_cities');
    Route::get('/admin/old_orders', 'AdminController@old_orders')->name('admin_old_orders');
    Route::get('/admin/new_orders', 'AdminController@new_orders')->name('admin_new_orders');
    Route::get('/admin/statistics', 'AdminController@statistics')->name('admin_statistics');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin_settings');

    Route::get('/admin/customers', 'AdminController@customers')->name('admin_customers');
    Route::get('/admin/shoppers', 'AdminController@shoppers')->name('admin_shoppers');
    
    Route::get('/admin/departments', 'AdminController@departments')->name('admin_departments');
    Route::get('/admin/products', 'AdminController@products')->name('admin_products');
    Route::get('/admin/cities', 'AdminController@cities')->name('admin_cities');
    Route::get('/admin/old_orders', 'AdminController@old_orders')->name('admin_old_orders');
    Route::get('/admin/new_orders', 'AdminController@new_orders')->name('admin_new_orders');
    Route::get('/admin/statistics', 'AdminController@statistics')->name('admin_statistics');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin_settings');
    Route::get('/admin/shopper/add_shopper', 'AdminController@add_shopper')->name('admin_add_shopper');
    Route::get('/admin/shopper/edit_shopper', 'AdminController@edit_shopper')->name('admin_edit_shopper');
    Route::get('/admin/shopper', 'AdminController@shopper')->name('admin_shopper');
    Route::get('/admin/shoppers', 'AdminController@shoppers')->name('admin_shoppers');
    
    Route::get('/admin/stores/edit_store', 'AdminController@edit_store')->name('admin_edit_store');

    Route::get('/admin/departments', 'AdminController@departments')->name('admin_departments');

    Route::get('/admin/stores/store/add_shelve', 'AdminController@add_shelve')->name('admin_add_shelve');
    Route::get('/admin/stores/store/add_product', 'AdminController@add_product')->name('admin_add_product');
    Route::get('/admin/products', 'AdminController@products')->name('admin_products');
    Route::get('/admin/cities/add_city', 'AdminController@add_city')->name('admin_add_city');
    Route::get('/admin/cities/edit_city', 'AdminController@edit_city')->name('admin_edit_city');
    Route::get('/admin/cities', 'AdminController@cities')->name('admin_cities');
    Route::get('/admin/old_orders', 'AdminController@old_orders')->name('admin_old_orders');
    Route::get('/admin/new_orders', 'AdminController@new_orders')->name('admin_new_orders');
    Route::get('/admin/statistics', 'AdminController@statistics')->name('admin_statistics');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin_settings');

    
    
    
    Route::get('/admin/shopper/add_shopper', 'AdminController@add_shopper')->name('admin_add_shopper');
    Route::get('/admin/shopper/edit_shopper', 'AdminController@edit_shopper')->name('admin_edit_shopper');
    Route::get('/admin/shopper' , 'AdminController@shopper')->name('admin_shopper');
    Route::get('/admin/shoppers' , 'AdminController@shoppers')->name('admin_shoppers');
    
    
    Route::get('/admin/stores/edit_store', 'AdminController@edit_store')->name('admin_edit_store');
    Route::get('/admin/departments' , 'AdminController@departments')->name('admin_departments');
    Route::get('/admin/products' , 'AdminController@products')->name('admin_products');
    Route::get('/admin/cities' , 'AdminController@cities')->name('admin_cities');
    Route::get('/admin/old_orders' , 'AdminController@old_orders')->name('admin_old_orders');
    Route::get('/admin/new_orders' , 'AdminController@new_orders')->name('admin_new_orders');
    Route::get('/admin/statistics' , 'AdminController@statistics')->name('admin_statistics');
    Route::get('/admin/settings' , 'AdminController@settings')->name('admin_settings');
    
});


Route::get('/info/faq' , 'InfoController@faq')->name('info_faq');
Route::get('/info/About us' , 'InfoController@about')->name('info_about');




