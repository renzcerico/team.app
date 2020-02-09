<?php

use Illuminate\Http\Request;

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

Route::prefix('products')->group(function () {
    Route::get('getAll', 'ProductsController@getAll');
    Route::get('getById/{id}', 'ProductsController@getById');
    Route::get('destroy/{id}', 'ProductsController@destroy');
    Route::post('create', 'ProductsController@create');
    Route::post('update/{id}', 'ProductsController@update');
});