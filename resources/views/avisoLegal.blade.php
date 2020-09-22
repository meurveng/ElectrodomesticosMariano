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
        <h1 class="text-center py-5">Aviso legal</h1>
        <p class="text-justify">El Propietario de este sitio web es Mariano
          Amoroso con NIF  X-6590025-L en adelante  Servicioasistenciatecnica-sat.
          Con domicilio a afectos de acceso, rectificación cancelación y
          oposición en C/ Rey Ferran ll, 45 CP: 07180 en Santa Ponsa,
          Islas Baleares y que podrá ejercitar estos derechos enviando una
          carta certificada a la dirección indicada o a través del correo
          electrónico sat@servicioasistenciatecnica-sat.com
          acompañando al escrito fotocopia del DNI.</p>

        <p class="text-justify">Se informa a los usuarios de esta página web,
          que no pertenece a ningún servicio técnico oficial de ninguna marca.</p>

        <p class="text-justify">Servicioasistenciatecnica-sat es una empresa de
          intermediación especializada en el servicio de reparación e instalación
           de electrodomésticos.</p>

        <p class="text-justify">Los servicios que se contraten a través de
          formulario o a través de llamada telefónica no serán prestados
          directamente por Servicioasistenciatecnica-sat , ya que serán prestados
          por una empresa colaboradora de  servicioasistenciatecnica-sat
          especializada en reparación de electrodomésticos. Los usuarios
          autorizan la cesión de sus datos personales a la empresa colaboradora
          única y exclusivamente para dicha finalidad.</p>

        <p class="text-justify">La empresa colaboradora dará el servicio de
          reparación de electrodomésticos, y tendrá la obligación de emitir la
          factura del servicio, dando garantía por escrito y siendo la única
          responsable de dichos servicios.</p>

        <p class="text-justify">Servicioasistenciatecnica-sat podrá modificar,
          sin previo aviso, la información contenida en su sitio web, así como
          su configuración y presentación.</p>

        <p class="text-justify">Mariano Amoroso ofrece el acceso al sitio web
          www.servicioasistenciatecnica-sat en las condiciones de uso que se
          describen a continuación:</p>

        <h2 class="text-center py-5">Propiedad intelectual e industrial</h2>

        <p class="text-justify">Los derechos de propiedad intelectual e industrial
          contenidos en las páginas web de www.servicioasistenciatecnica-sat,
          su diseño gráfico y códigos informáticos, así como los nombres comerciales,
          marcas y signos distintivos son titularidad de Mariano Amoroso., salvo que
          en las mismas se indique que pertenecen a otro titular.</p>

        <p class="text-justify">Cualquier reproducción, distribución,
          comercialización o transformación de los contenidos que no haya
          sido expresamente autorizada por sus titulares, constituye una
          infracción de los derechos de propiedad intelectual e industrial
          protegidos por la Ley.</p>

        <h2 class="text-center py-5">Contenido y uso adecuado</h2>

        <p class="text-justify">Servicioasistenciatecnica-sat garantiza que todos
          los contenidos y servicios que se ofrecen en www.servicioasistenciatecnica-sat
          respetan el principio de dignidad de la persona, el principio de
          no-discriminación por motivos de raza, sexo, religión, opinión,
          nacionalidad, discapacidad o cualquier otra circunstancia personal y
          social, así como el principio de protección de la juventud y de la
          infancia.</p>

        <p class="text-justify">Asimismo, el USUARIO se compromete a realizar un
          buen uso de los contenidos y servicios de www.servicioasistenciatecnica-sat ,
          que nunca podrán ser utilizados para actividades ilícitas, o que puedan
          ser contrarias al orden público, la defensa nacional o la salud pública.
          Cualquier utilización por parte del USUARIO de los contenidos y
          servicios habrá de respetar los principios indicados en el párrafo
          anterior.</p>

        <h2 class="text-center py-5">Exclusión de garantías y responsabilidades</h2>

        <p class="text-justify">El acceso y la utilización de las páginas de
          www.servicioasistenciatecnica-sat se realizarán bajo la única y
          exclusiva responsabilidad del USUARIO.</p>

        <p class="text-justify">servicioasistenciatecnica-sat se reserva el derecho
          a cambiar cualquier parte del contenido de esta página web, en
          cualquier momento y sin aviso previo.</p>

        <p class="text-justify">servicioasistenciatecnica-sat no garantiza ni se
          responsabiliza de los daños y perjuicios de toda naturaleza que se
          deban a las siguientes circunstancias:
          <ul>
            <li>La falta de continuidad del funcionamiento de
              www.servicioasistenciatecnica-sat así como al funcionamiento
              incorrecto de las páginas web.</li>
            <li>La falta de utilidad, adecuación o validez de los servicios y
              contenidos que se ofrecen en www.servicioasistenciatecnica-sat
              respecto a los resultados y expectativas del USUARIO.</li>
            <li>La existencia de virus o programas en el ordenador del USUARIO o
              por la presencia de virus en los servicios prestados por terceros a
              través de www.servicioasistenciatecnica-sat</li>
          </ul>
        </p>

          <h2 class="text-center py-5">Jurisdicción y legislación aplicable</h2>

        <p class="text-justify">Estas condiciones generales se rigen por la ley
          española. Las dos partes se someten a su elección para la resolución
          de los conflictos y con renuncia a cualquier otro fuero, a los
          Juzgados y Tribunales del Usuario. En el supuesto de que el USUARIO
          tenga su domicilio fuera de España, Servicioasistenciatecnica-sat y
          el USUARIO, con renuncia expresa a cualquier otro fuero que pudiera
          corresponderles, se someten a la jurisdicción de los Juzgados de
          Palma De Mallorca.</p>

        <h2 class="text-center py-5">Protección de datos</h2>

        <p class="text-justify">servicioasistenciatecnica-sat garantiza a los
           usuarios que los datos que nos faciliten serán mantenidos con
           absoluta confidencialidad.</p>

        <p class="text-justify">Asimismo, para acceder a algunos de los
          servicios que www.servicioasistenciatecnica-sat ofrece a través
          del website deberá proporcionar algunos datos de carácter personal.
          En cumplimiento de lo establecido en la Ley Orgánica 15/1999, de
          13 de diciembre, de Protección de Datos de Carácter Personal le
          informamos que, mediante la cumplimentación de los presentes
          formularios, sus datos personales quedarán incorporados y serán
          tratados en los ficheros de Mariano Amoroso con el fin de poderle
          prestar y ofrecer nuestros servicios así como para informarle de las
          mejoras del sitio Web. Asimismo, le informamos de la posibilidad de
          que ejerza los derechos de acceso, rectificación, cancelación y
          oposición de sus datos de carácter personal, manera gratuita mediante
          email a  sat@servicioasistenciatecnica-sat.com o en la dirección C/
          Rey Ferran ll, 45 CP: 07180 en Santa Ponsa, Islas Baleares. Teléfono.
          971 752 429</p>
      </section>
    </main>
  </body>
</html>
