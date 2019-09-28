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
$marcas = [
  "LG",
  "Bosch",
  "Balay",
  "Samsung",
  "Haier",
  "Daewoo",
  "Candy",
  "Liebherr",
  "Junkers",
  "Miele",
  "Siemens",
  "Beko",
  "Fagor",
  "Edesa"
];
$provinciasTelefonos = [
    "Madrid" => "910 916 449",
    "Sevilla" => "955 300 649",
    "Alicante" => "966 410 849",
    "Málaga" => "951 650 689",
    "Las Palmas" => "928 402 549",
    "Barcelona" => "931 005 449",
    "Navarra" => "848 400 149",
    "Valladolid" => "983 120 149"
];

Route::get('/{marca}/{provincia}', "MarcasController@inicio");

Route::get('/AvisoLegal', "MarcasController@inicio");
