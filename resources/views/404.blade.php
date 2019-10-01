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
        <link href="{{asset('css/paginaPrincipal.css')}}" rel="stylesheet"/>


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
        <h1 class="text-center display-1">404</h1>
        <p>La página que has especificado no existe.
          Comprueba que has escrito la dirección URL correctamente.</p>
      </section>
    </main>

  </body>
</html>
