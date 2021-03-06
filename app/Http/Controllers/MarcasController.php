<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
  public function inicio($marca, $provincia, $tipo = null){
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
      "candy" => "Candy",
      "fagor" => "Fagor",
      "edesa" => "Edesa",
      "carrier" => "Carrier",
      "daikin" => "Daikin",
      "panasonic" => "Panasonic",
      "mitsubishi" => "Mitsubishi",
      "fujitsu" => "Fujitsu",
      "daitsu" => "Daitsu",
      "hiyasu" => "Hiyasu",
      "toshiba" => "Toshiba",
      "amana" => "Amana",
      "ariston" => "Ariston",
      "aspes" => "Aspes",
      "bauknecht" => "Bauknecht",
      "bru" => "Bru",
      "corbero" => "Corbero",
      "crolls" => "Crolls",
      "dedietrich" => "De Dietrich",
      "ecron" => "Ecron",
      "electrolux" => "Electrolux",
      "firstline" => "Firstline",
      "gaggenau" => "Gaggenau",
      "goldstar" => "Goldstar",
      "iberna" => "Iberna",
      "ignis" => "Ignis",
      "indesit" => "Indesit",
      "lynx" => "Lynx",
      "neff" => "Neff",
      "newpol" => "Newpol",
      "otseinhoover" => "Otsein Hoover",
      "roca" => "Roca",
      "rommer" => "Rommer",
      "smeg" => "Smeg",
      "superser" => "Superser",
      "taurus" => "Taurus",
      "teka" => "Teka",
      "thomson" => "Thomson",
      "zanussi" => "Zanussi",
      "saivod" => "Saivod",
      "westinghouse" => "Westinghouse",
      "sharp" => "Sharp"
    ];
    $provinciasTelefonosEspaciados = [
        "toledo" => "925 080 549",
        "mallorca" => "971 752 429",
        "madrid" => "910 916 449",
        "sevilla" => "955 300 649",
        "alicante" => "966 410 849",
        "malaga" => "951 650 689",
        "gran_canaria" => "928 402 549",
        "barcelona" => "931 005 449",
        "navarra" => "848 400 149",
        "valencia" => "960 001 949",
        "valladolid" => "983 120 149",
        "bilbao" => "944 080 249"
    ];
    $provinciasTelefonos = [
        "toledo" => "925080549",
        "mallorca" => "971752429",
        "madrid" => "910916449",
        "sevilla" => "955300649",
        "alicante" => "966410849",
        "malaga" => "951650689",
        "gran_canaria" => "928402549",
        "barcelona" => "931005449",
        "navarra" => "848400149",
        "valencia" => "960001949",
        "valladolid" => "983120149",
        "bilbao" => "944080249"
    ];
    $provinciasNombres = [
        "toledo" => "Toledo",
        "mallorca" => "Mallorca",
        "madrid" => "Madrid",
        "sevilla" => "Sevilla",
        "alicante" => "Alicante",
        "malaga" => "Málaga",
        "gran_canaria" => "Gran Canaria",
        "barcelona" => "Barcelona",
        "navarra" => "Navarra",
        "valencia" => "Valencia",
        "valladolid" => "Valladolid",
        "bilbao" => "Bilbao"
    ];
    $marca = strtolower($marca);
    $provincia = strtolower($provincia);

    if(array_key_exists($marca, $marcas) and
      array_key_exists($provincia, $provinciasTelefonos)){

      $telefonoSeparado = $provinciasTelefonosEspaciados[$provincia];
      $telefono = $provinciasTelefonos[$provincia];
      $provincia = $provinciasNombres[$provincia];
      $marca = $marcas[$marca];

      if($tipo == "aireacondicionado"){
        return view("paginaPrincipalAA", compact("marca", "provincia", "telefono", "telefonoSeparado"));
      }
      else{
        return view("paginaPrincipal", compact("marca", "provincia", "telefono", "telefonoSeparado"));
      }


    }else{
      return view("404");
    }


  }
}
