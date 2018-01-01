<?php

use Illuminate\Http\Request;

// use App\Http\Controllers\Api as Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/register', 'Api\RegisterController@register');

Route::middleware('auth:api')->get('/stores', 'Api\StoreController@all');
Route::middleware('auth:api')->get('/stores/{id}', 'Api\StoreController@getStore');

Route::middleware('auth:api')->get('/categories', 'Api\CategoryController@all');
Route::middleware('auth:api')->get('/categories/{category}/stores', 'Api\CategoryController@getStores');
// Route::middleware('auth:api')->get('/stores/{id}', 'Api\StoreController@getStore');
