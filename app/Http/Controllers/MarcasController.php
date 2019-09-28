<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
  public function inicio($marca, $provincia){
    $provinciasTelefonosEspaciados = [
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
        "sevilla" => "955300649",
        "alicante" => "966410849",
        "malaga" => "951650689",
        "gran_canaria" => "928402549",
        "barcelona" => "931005449",
        "navarra" => "848400149",
        "valladolid" => "983120149"
    ];
    $provinciasNombres = [
        "madrid" => "Madrid",
        "sevilla" => "Sevilla",
        "alicante" => "Alicante",
        "malaga" => "Málaga",
        "gran_canaria" => "Gran Canaria",
        "barcelona" => "Barcelona",
        "navarra" => "Navarra",
        "valladolid" => "Valladolid"
    ];
    $provincia = strtolower($provincia);
    return view("paginaPrincipal", compact("marca", "provincia", "provinciasTelefonos", "provinciasNombres", "provinciasTelefonosEspaciados"));
  }
}
