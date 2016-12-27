<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//clientes
Route::post('/clientes/crear', ['as'=>'cliente.crear','uses'=>'ClientesController@store'])->middleware('auth');
Route::get('/clientes/crear', 'ClientesController@create')->middleware('auth');
Route::get('/clientes', 'ClientesController@index')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index');
