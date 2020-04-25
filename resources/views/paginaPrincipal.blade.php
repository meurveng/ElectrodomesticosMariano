@extends("layouts.plantilla")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=0">
        <title>SAT {{$marca}}</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto'
          rel='stylesheet' type='text/css'>
        <link href="{{asset('css/paginaPrincipal.css')}}" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}" />


  </head>
  <body>
@section("nav")
  <span class="navbar-brand navbar-center col col-12 col-md-6 col-lg-6 text-center text-md-left text-lg-left text-xl-left" href="#">
    <img src="{{asset('images/logo'.$marca.'.png')}}" width="150" alt="">
    </span>
  </span>
  <span class="text-danger navbar-text col col-12 col-md-5 col-lg-5 text-center text-md-right text-lg-right text-xl-right">
    Servicio técnico {{$marca}} en <span class="text-primary">{{strtoupper($provincia)}} <br/>
    <a id="telefonoNav" href="tel:+34{{$telefono}}"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> {{$telefonoSeparado}}</a>
  </span>
@endsection
<main>
  <section class="bg-info py-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-9 text-center py-5">
          <img class="img-fluid rounded" src="{{asset('images/cocina2.jpg')}}" alt=""/>
        </div>
        <div class="col col-12 col-lg-3 text-center text-lg-left text-xl-left">
          <p class="encabezado text-justify py-0"><span class="resaltado">Llame al teléfono de Averias</span> y le daremos cita
            con el técnico más cercano a su ubicación</p>
          <hr/>
          <p class="encabezado text-justify">Servicio de urgencia sin pagar más. <span class="resaltado">Reparación el mismo día</span> sin ningún coste adicional.</p>
          <hr/>
          <p class="encabezado text-justify"><span class="resaltado">Garantía</span> de todas nuestras reparaciones.</p>
          <hr/>
          <p class="encabezado text-justify"><span class="resaltado">Cita al instante</span> en el momento de la llamada</p>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col col-12 col-sm-12 py-3 alert alert-warning " role="alert">
            <h3 class="text-center"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>Nuestros técnicos atienden a domicilio de forma segura con guantes y mascarillas, como lo establece el <a href="https://www.boe.es/buscar/act.php?id=BOE-A-2020-3692" class="alert-link">Real Decreto 463/2020</a>.</h3>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-6 py-3">
          <div class="card bg-danger text-white">
            <img class="card-img-top" src="{{asset('images/tecnico1.jpg')}}" alt="Card image">
            <div class="card-body">
              <h3 class="card-title text-center">Reparación en el mismo día sin cargo.</h3>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-6 py-3">
          <div class="card bg-danger text-white">
            <img class="card-img-top" src="{{asset('images/tecnico2.jpg')}}" alt="Card image">
            <div class="card-body">
              <h3 class="card-title text-center">Técnicos cualificados para cada electrodoméstico.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-3">
    <h2 class="text-center pb-5">Electrodomésticos</h2>
    <div class="row">
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/lavavajillas.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico"
            alt="Lavavajillas"/>
        <h3 class="text-center pt-2">Lavavajillas</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/frigorifico.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico"
            alt="frigorifico"/>
        <h3 class="text-center pt-2">Frigoríficos</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/lavadora.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico"
            alt="Lavadora"/>
        <h3 class="text-center pt-2">Lavadoras</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/secadora.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Secadora"/>
        <h3 class="text-center pt-2">Secadoras</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/congelador.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Congelador"/>
        <h3 class="text-center pt-2">Congeladores</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/aireacondicionado.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Aire Acondicionado Split"/>
        <h3 class="text-center pt-2">Aire Acondicionado (Split y portátiles)</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/termo.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Termo"/>
        <h3 class="text-center pt-2">Termos, Calentadores, Acumuladores</h3>
      </div>
      <div class="col col-6 col-sm-4 col-md-3 col-lg-3">
        <img src="{{asset('images/horno.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomestico" alt="Horno"/>
        <h3 class="text-center pt-2">Hornos</h3>
      </div>
    </div>
  </section>
  <section class="py-5 bg-dark text-light">
    <div class="container">
      <h1 id="servicioTecnico" class="text-center">Servicio técnico {{$marca}}</h1>
      <p id="textoPrincipal" class="text-jusfity">Reparamos su electrodoméstico
        {{$marca}} con la mayor rapidez y garantizamos nuestras reparaciones.</p>
    </div>
  </section>
  <section id="descripcion" class="container py-5">
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
  <hr/>
  <section class="container py-4">
    <div>
      <div class="row">
        <div class="col col-12 col-sm-6 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/precio.png')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Buen precio"/>

          <h2 class="tituloSeccion text-center py-2">Precio inmejorable</h2>
          <p class="text-justify">Tenemos un exceltente precio en comparación
            a otros servicios técnicos de la zona a la ver que conservamos una
            excelente calidad.</p>
        </div>
        <div class="col col-12 col-sm-6 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/conocimiento.jpg')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Altos conocimientos"/>
          <h2 class="tituloSeccion text-center py-2">Gran conocimiento</h2>
          <p class="text-justify">Contamos con uno de los equipos humanos más
            experimentados del sector con mas de 25 años de experiencia. Siempre
            en constante formación.</p>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 bootstrap-gutter">
          <img src="{{asset('images/confianza.png')}}"
            class="mx-auto d-block rounded img-fluid imagenCalidad" alt="Excelente calidad"/>
          <h2 class="tituloSeccion text-center py-2">Excelente calidad</h2>
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
      <div class="col-12 col-sm-5 col-md-5 col-lg-5 bootstrap-gutter">
        <img src="{{asset('images/experiencia.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomesticoFinal" alt="Experiencia inmejorable"/>
      </div>
      <div class="col">
        <h2 class="tituloSeccion text-center text-sm-left text-md-left text-lg-left text-xl-left">Experiencia</h2>
        <p class="text-justify">Con muchos años de experiencia en su campo, la
          empresa está familiarizada con todo tipo de electrodomésticos y, por
          lo tanto, es capaz de satisfacer todas sus necesidades en cuanto a la
          instalación y reparación de este tipo de dispositivos para hacer su
          vida más fácil.</p>
      </div>
    </div>
    <div class="row py-4">
      <div class="col-12 col-sm-5 col-md-5 col-lg-5 bootstrap-gutter">
        <img src="{{asset('images/furgoneta.jpg')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomesticoFinal" alt="Desplazamiento gratis"/>
      </div>
      <div class="col">
        <h2 class="tituloSeccion text-center text-sm-left text-md-left text-lg-left text-xl-left">Desplazamiento gratuito</h2>
        <p class="text-justify">Si se realiza la reparación.</p>
      </div>
    </div>
    <div class="row py-4">
      <div class="col-12 col-sm-5 col-md-5 col-lg-5 bootstrap-gutter">
        <img src="{{asset('images/repuestosoriginales.png')}}"
          class="mx-auto d-block rounded img-fluid imagenElectrodomesticoFinal" alt="Repuestos originales"/>
      </div>
      <div class="col">
        <h2 class="tituloSeccion text-center text-sm-left text-md-left text-lg-left text-xl-left">Repuestos originales</h2>
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
