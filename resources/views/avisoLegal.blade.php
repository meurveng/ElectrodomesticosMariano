@extends("layouts.plantilla")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicio Técnico</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto'
          rel='stylesheet' type='text/css'>

  </head>
    <body>
    @section("nav")
      <span class="navbar-brand" href="#">
        <img src="{{asset('images/icon.png')}}" width="30" height="30" alt="">
        Servicio Técnico
      </span>
    @endsection
    <main>
      <section class="container py-5">
        <h1 class="text-center py-5">PROPIEDAD INTELECTUAL E INDUSTRIAL</h1>
        <p class="text-justify">Todos los textos de la presente página web, su diseño y los derechos
          de propiedad intelectual que pudieran corresponder a dichos
          contenidos, son propiedad de Meurweb S.A., quedando reservados
          todos los derechos sobre los mismos.</p>
        <p class="text-justify">En ejercicio de dicho derecho, queda permitido cualquier acto de
          reproducción de los textos, en todo o en parte, en cualquier forma o
          medio, sea mecánico, electrónico, reprográfico u otro, así como
          cualquier acto de difusión, comunicación pública o distribución,
          sin necesidad de autorización de los titulares, bajo los términos
          de la licencia Creative Commons Reconocimiento 3.0 España.</p>
        <p class="text-justify">Todas las imágenes (fotos e ilustraciones) son propiedad de sus
          respectivos autores y se reproducen con su consentimiento mediante
          las licencias correspondientes que autorizan a ello. Aunque carecen
          de royalties, NO está permitido reproducir las imágenes sin obtener
          la licencia correspondiente de sus titulares.</p>
        <p class="text-justify">Respecto a las marcas, nombres comerciales o cualquier otro signo
          distintivo de terceros que se cite en este sitio web, son propiedad
          de sus respectivos titulares.</p>
      </section>
    </main>
  </body>
</html>
