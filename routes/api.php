<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}','ProductController@show');
Route::post('/products', 'ProductController@Store');
Route::put('/products/{id}','ProductController@update');
Route::delete('/products/{id}','ProductController@destroy');