<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
  public function inicio($marca, $provincia){
    $marcas = [
      "lg" => "LG",
      "bosch" => "Bosch",
      "balay" => "Balay",
      "samsung" => "Samsung",
      "haier" => "Haier",
      "daewoo" => "Daewoo",
      "liebherr" => "Liebherr",
      "junkers" => "Junkers",
      "miele" => "Miele",
      "siemens" => "Siemens",
      "beko" => "Beko",
      "fagor" => "Fagor",
      "edesa" => "Edesa"
    ];
    $provinciasTelefonosEspaciados = [
        "mallorca" => "971 752 429",
        "madrid" => "910 916 449",
        "sevilla" => "955 300 649",
        "alicante" => "966 410 849",
        "malaga" => "951 650 689",
        "gran_canaria" => "928 402 549",
        "barcelona" => "931 005 449",
        "navarra" => "848 400 149",
        "valladolid" => "983 120 149"
    ];
    $provinciasTelefonos = [
        "madrid" => "910916449",
        "mallorca" => "971752429",
        "sevilla" => "955300649",
        "alicante" => "966410849",
        "malaga" => "951650689",
        "gran_canaria" => "928402549",
        "barcelona" => "931005449",
        "navarra" => "848400149",
        "valladolid" => "983120149"
    ];
    $provinciasNombres = [
        "mallorca" => "Mallorca",
        "madrid" => "Madrid",
        "sevilla" => "Sevilla",
        "alicante" => "Alicante",
        "malaga" => "Málaga",
        "gran_canaria" => "Gran Canaria",
        "barcelona" => "Barcelona",
        "navarra" => "Navarra",
        "valladolid" => "Valladolid"
    ];
    $marca = strtolower($marca);
    $provincia = strtolower($provincia);
    if(array_key_exists($marca, $marcas) and
    array_key_exists($provincia, $provinciasTelefonos)){

      $telefonoSeparado = $provinciasTelefonosEspaciados[$provincia];
      $telefono = $provinciasTelefonos[$provincia];
      $provincia = $provinciasNombres[$provincia];
      $marca = $marcas[$marca];

      return view("paginaPrincipal", compact("marca", "provincia", "telefono", "telefonoSeparado"));
    }else{
      return view("404");
    }


  }
}
