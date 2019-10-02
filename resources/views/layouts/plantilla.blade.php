
<header>
  <nav class="navbar fixed-top navbar-dark bg-primary">
    @yield("nav")
  </nav>
</header>
<footer class="bg-dark">
  <div class="container text-light">
    <div class="row py-5">
      <div class="col col-12 col-sm-12 col-md-6 col-lg-6 bootstrap-gutter">
        <h2 class="text-center">Contacto</h2>
        <ul>
          @yield("telefonoContacto")
          <li>Email: <a class="text-light"
            href="mailto:sat@servicioasistenciatecnica-sat.com">
            Contactenos</a></li>
        </ul>
      </div>
      <div class="col col-12 col-sm-12 col-md-6 col-lg-6 bootstrap-gutter">
        <h2 class="text-center">Horario de atención</h2>
        <ul>
          <li>Lunes a Viernes: 8:00 a 19:30</li>
          <li>Sábados: 8:00 a 15:00</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="py-4 bg-light text-dark">
    <div class="container">
        <p class="text-left">© 2019 Meurweb | <a href="/aviso-legal"
          class="text-dark">Aviso Legal</a></p>
    </div>
  </section>
  @yield("footer")
</footer>
