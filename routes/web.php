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

Route::view('/', '404');
Route::view('/aviso-legal', 'avisoLegal');
Route::view('/{marca}', '404');
Route::get('/{marca}/{provincia}/{tipo}', "MarcasController@inicio");
Route::get('/{marca}/{provincia}', "MarcasController@inicio");
