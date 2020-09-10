@extends("layouts.plantilla")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
<!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WN35QKC');</script>
<!-- End Google Tag Manager -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=0">
      <title>SAT {{$marca}}</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link href="{{asset('css/paginaPrincipal.css')}}" rel="stylesheet"/>
      <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}" />
<!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166717641-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166717641-1');
      </script>
      <script src="https://www.stopclics.com/stopclics.js?atv9xxv2iytcj7fuxb1z"></script>
      <noscript>
         <iframe src="https://www.stopclics.com/admin/EstadisticasST/NoJavascript/atv9xxv2iytcj7fuxb1z" width="0" height="0"></iframe>
      </noscript>
  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN35QKC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@section("nav")
  <p class="navbar-brand navbar-center col col-12 col-md-6 col-lg-6 text-center text-md-left text-lg-left text-xl-left" href="#">
    <img src="{{asset('images/logo'.$marca.'.png')}}" width="150" alt="">
  </p>
  <p class="text-danger navbar-text col col-12 col-md-5 col-lg-5 text-center text-md-right text-lg-right text-xl-right">
    <a id="telefonoNav" href="tel:+34{{$telefono}}"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> {{$telefonoSeparado}}</a></br>
    <small>Horario de atención L-V de 8:00 a 19:30 y S de 8:00 a 15:00</small>
  </p>
@endsection
<main>
  <section class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col col-12 col-sm-12 py-3 alert alert-danger " role="alert">
            <h3 class="text-center">
              Llámenos y le daremos cita ya mismo con el técnico más cercano a su ubicación.
            </h3>
        </div>
        <div class="col col-12 text-center py-5">
          <div class="card bg-white text-white">
            <img class="img-fluid rounded" src="{{asset('images/cocina2.jpg')}}" alt=""/>
            <div class="card-img-overlay p-0">
              <h1 id="cardPrincipal" class="card-title mt-0 py-5">Servicio técnico {{$marca}} en <span class="resaltado">{{strtoupper($provincia)}}</span></h1>
            </div>
          </div>
        </div>
      <div class="row justify-content-around py-5">
        <div class="col col-12 col-sm-6 col-md-3 col-lg-3 card text-white bg-danger mb-3">
          <div class="card-body">
            <p class="card-text"><span class="resaltado">Llamenos</span> y le pondremos en contacto con el técnico mas cercano a usted.</p>
          </div>
        </div>
        <div class="col col-12 col-sm-6 col-md-3 col-lg-3 card text-white bg-danger mb-3">
          <div class="card-body">
            <p class="card-text">Servicio de urgencia gratuito. <span class="resaltado">Reparamos su electrodoméstico en el día</span> sin ningún coste adicional.</p>
          </div>
        </div>
        <div class="col col-12 col-sm-6 col-md-3 col-lg-3 card text-white bg-danger mb-3">
          <div class="card-body">
            <p class="card-text">Cita <span class="resaltado">en el momento de la llamada</span> sin costo extra.</p>
          </div>
        </div>
        <div class="col col-12 col-sm-6 col-md-3 col-lg-3 card text-white bg-danger mb-3">
          <div class="card-body">
            <p class="card-text">Damos <span class="resaltado">garantía</span> de todas las reparaciones realizadas</p>
          </div>
        </div>
      </div>
      </div>
      <div class="row justify-content-around">
        <div class="col col-12 col-sm-12 col-md-4 col-lg-4 py-3">
          <div class="card bg-danger text-white">
            <img class="card-img-top" src="{{asset('images/tecnico1.jpg')}}" alt="Card image">
            <div class="card-body">
              <h3 class="card-title text-center">Se realiza la reparación en el mismo día sin cargo extra.</h3>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4 col-lg-4 py-3">
          <div class="card bg-danger text-white">
            <img class="card-img-top" src="{{asset('images/furgoneta.jpg')}}" alt="Card image">
            <div class="card-body">
              <h3 class="card-title text-center">Desplazamiento gratuito si se realiza la reparación.</h3>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-4 col-lg-4 py-3">
          <div class="card bg-danger text-white">
            <img class="card-img-top" src="{{asset('images/tecnico2.jpg')}}" alt="Card image">
            <div class="card-body">
              <h3 class="card-title text-center">Tenemos técnicos especializados en cada tipo de electrodoméstico.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="row row-cols-2 row-cols-md-4 py-3">
      <div class="col">
        <div class="card bg-danger text-white">
          <img src="{{asset('images/lavavajillas.jpg')}}" class="card-img-top" alt="Lavavajillas">
          <div class="card-body">
            <h3 class="card-title text-center">Lavavajillas</h3>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-danger text-white">
          <img src="{{asset('images/frigorifico.jpg')}}" class="card-img-top" alt="Frigoríficos">
          <div class="card-body">
            <h3 class="card-title text-center">Frigoríficos</h3>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-danger text-white">
          <img src="{{asset('images/lavadora.jpg')}}" class="card-img-top" alt="Lavadoras">
          <div class="card-body">
            <h3 class="card-title text-center">Lavadoras</h3>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-danger text-white">
          <img src="{{asset('images/secadora.jpg')}}" class="card-img-top" alt="Secadoras">
          <div class="card-body">
            <h3 class="card-title text-center">Secadoras</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-2 row-cols-md-3">
    <div class="col">
      <div class="card bg-danger text-white">
        <img src="{{asset('images/congelador.jpg')}}" class="card-img-top" alt="Congeladores">
        <div class="card-body">
          <h3 class="card-title text-center ">Congeladores</h3>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-danger text-white">
        <img src="{{asset('images/aireacondicionado.jpg')}}" class="card-img-top" alt="Aire Acondicionado">
        <div class="card-body">
          <h3 class="card-title text-center">Aire Acondicionado</h3>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-danger text-white">
        <img src="{{asset('images/horno.jpg')}}" class="card-img-top" alt="Hornos">
        <div class="card-body">
          <h3 class="card-title text-center">Hornos</h3>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-danger text-white">
        <img src="{{asset('images/termo.jpg')}}" class="card-img-top" alt="Termos, Calentadores, Acumuladores">
        <div class="card-body">
          <h3 class="card-title text-center">Termos, Calentadores, Acumuladores</h3>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="py-5 bg-dark text-light">
    <div class="container">
      <h1 id="servicioTecnico" class="text-center servicioTecnico">Servicio técnico {{$marca}}</h1>
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
