<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Users
Route::post('/users/store','UserController@store');
Route::post('/users/update/{id}','UserController@update');
Route::get('/users/destroy/{id}','UserController@destroy');

Route::controller('users','UserController');

//Products
Route::post('/products/store','ProductController@store');
Route::post('/products/update/{id}','ProductController@update');
Route::get('/products/destroy/{id}','ProductController@destroy');

Route::controller('products','ProductController');