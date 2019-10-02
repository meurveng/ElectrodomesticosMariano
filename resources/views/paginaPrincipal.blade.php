@extends("layouts.plantilla")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicio Técnico {{$marca}}</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto'
          rel='stylesheet' type='text/css'>
        <link href="{{asset('css/paginaPrincipal.css')}}" rel="stylesheet"/>


  </head>
  <body>
@section("nav")
  <span class="navbar-brand" href="#">
    <img src="{{asset('images/icon.png')}}" width="30" height="30" alt="">
    Servicio Técnico {{$marca}}
  </span>
  <span class="navbar-text">
    <a href="tel:+34{{$telefono}}">
      Llama al {{$telefonoSeparado}}</a>
  </span>
@endsection
<main>
  <div class="container">
    <img src="{{asset('images/logo'.$marca.'.jpg')}}"
    class="img-fluid rounded mx-auto d-block" alt="Logo {{$marca}}"/>
  </div>
  <section class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 text-center">
          <p class="display-3 col-xs-12 border-top border-bottom border-primary">
            <a href="tel:+34{{$telefono}}">{{$telefonoSeparado}}</a></p>
          <h1 class="display-3 border-top border-bottom border-primary text-primary">Teléfono</h1>
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-5 text-center text-lg-left text-xl-left">
          <p class="mb-0 pb-0 encabezado ">Desplazamiento gratis</p>
          <p class="mt-0 pt-0"><small>Si se realiza la reparación</small></p>

          <p class="mb-0 pb-0 encabezado">Atendemos en todo {{$provincia}}</p>
          <p class="mt-0 pt-0"><small>Le enviamos el técnico mas
            cercano a su zona</small></p>
          <p class="encabezado">Cita al instante en el momento de la llamada</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-dark text-light">
    <div class="container">
      <h1 class="text-center">Servicio técnico {{$marca}}</h1>
      <p class="encabezado">Reparamos su electrodoméstico {{$marca}} con la mayor rapidez y
        garantizamos nuestras reparaciones.</p>
    </div>
  </section>
  <section class="container py-5">
    <p class="text-justify">Desde hace muchos años nos hemos convertido en una
      de las empresas más recomendadas por los clientes en lo que se refiere a
      los servicios de <span class="font-weight-bold">reparación de
      electrodomésticos {{$marca}}</span>.</p>

    <p class="text-justify">La profesionalidad y eficacia de nuestros técnicos
      especializados, son sinónimo de una reparación lo más rápida posible y
      minuciosa, para que usted no tenga que preocuparse de nada. Nuestra
      empresa cuenta con más de 25 años de experiencia, ofreciendo siempre las
      máximas garantías en la reparación de sus electrodomésticos {{$marca}}.</p>

    <p class="text-justify">La confianza que nuestros clientes han depositado en
      nosotros es una gran razón para que estemos orgullosos y al mismo tiempo
      un estímulo para el desarrollo continuo.</p>
  </section>
  <hr/>
  <section class="container py-3">
    <h2 class="text-center pb-5">Electrodomésticos</h2>
    <div class="row">
      <div class="col col-3">
        <img src="{{asset('images/lavavajillas.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Lavavajillas"/>
        <h3 class="text-center pt-2">Lavavajillas</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/frigorifico.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="frigorifico"/>
        <h3 class="text-center pt-2">Frigoríficos</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/lavadora.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Lavadora"/>
        <h3 class="text-center pt-2">Lavadoras</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/secadora.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Secadora"/>
        <h3 class="text-center pt-2">Secadoras</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/congelador.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Congelador"/>
        <h3 class="text-center pt-2">Congeladores</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/aireacondicionado.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Aire Acondicionado Split"/>
        <h3 class="text-center pt-2">Aire Acondicionado (Split y portátiles)</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/termo.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Termo"/>
        <h3 class="text-center pt-2">Termos, Calentadores, Acumuladores</h3>
      </div>
      <div class="col col-3">
        <img src="{{asset('images/horno.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Horno"/>
        <h3 class="text-center pt-2">Hornos</h3>
      </div>
    </div>
  </section>
  <hr/>
  <section class="container py-4">
    <div>
      <div class="row">
        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/precio.png')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Buen precio"/>

          <h2 class="text-center">Precio inmejorable</h2>
          <p class="text-justify">Tenemos un exceltente precio en comparación
            a otros servicios técnicos de la zona a la ver que conservamos una
            excelente calidad.</p>
        </div>
        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/conocimiento.jpg')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Altos conocimientos"/>
          <h2 class="text-center">Gran conocimiento</h2>
          <p class="text-justify">Contamos con uno de los equipos humanos más
            experimentados del sector con mas de 25 años de experiencia. Siempre
            en constante formación.</p>
        </div>
        <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/confianza.png')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Excelente calidad"/>
          <h2 class="text-center">Excelente calidad</h2>
          <p class="text-justify">Somos muy exigentes en ofrecerle una gran
            calidad hasta en el mas mínimo detalle. Nuestro trabajo es nuestra
            satisfacción.</p>
        </div>
      </div>
    </div>
  </section>
  <hr/>
  <section class="container">
    <div class="row py-4">
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 bootstrap-gutter">
        <img src="{{asset('images/experiencia.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomesticoFinal" alt="Experiencia inmejorable"/>
      </div>
      <div class="col">
        <h2 class="text-center text-sm-left text-md-left text-lg-left text-xl-left">Experiencia</h2>
        <p class="text-justify">Con muchos años de experiencia en su campo, la
          empresa está familiarizada con todo tipo de electrodomésticos y, por
          lo tanto, es capaz de satisfacer todas sus necesidades en cuanto a la
          instalación y reparación de este tipo de dispositivos para hacer su
          vida más fácil.</p>
      </div>
    </div>
    <div class="row py-4">
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 bootstrap-gutter">
        <img src="{{asset('images/repuestosoriginales.png')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomesticoFinal" alt="Repuestos originales"/>
      </div>
      <div class="col">
        <h2 class="text-center text-sm-left text-md-left text-lg-left text-xl-left">Repuestos originales</h2>
        <p class="text-justify">Todas las reparaciones son con repuestos
          originales de la marca.</p>
      </div>
    </div>
  </section>
</main>
@section("telefonoContacto")
  <li>Teléfono: <a class="text-light" href="tel:+34{{$telefono}}">
    {{$telefonoSeparado}}</a></li>
@endsection

</body>
</html>
