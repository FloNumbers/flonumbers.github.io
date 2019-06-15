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

Route::get('/', 'PageController@home');

Route::get('/assignements', 'PageController@assignements');

Route::get('/dashboard', 'PageController@dashboard');

Route::get('/profile', 'PageController@profile');

Route::get('/motivation', 'PageController@motivation');

Route::get('/beroepsbeeld', 'PageController@beroepsbeeld');

//crud routes
Route::resource('/crud', 'crudController');
Route::get('/crud', 'crudController@index');
Route::get('/crud/create', 'crudController@create');
Route::post('/crud/store', 'crudController@store');
Route::patch('/crud/{id}', 'crudController@update');
Route::get('/crud/{id}/edit', 'crudController@edit');
Route::delete('/crud/{id}', 'crudController@destroy');
