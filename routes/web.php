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

Route::get('/cart', 'CartController@index');
Route::get('/cart/{id}', 'CartController@show');
Route::post('/cart', 'CartController@create');
Route::post('/cart/{id}', 'CartController@destroy');
Route::post('/cart-update/{id}', 'CartController@update');