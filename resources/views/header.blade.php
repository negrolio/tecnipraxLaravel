<header class="main-header">
  <a href="{{route('home')}}"><img src="/img/home/logo.png" alt="tecniprax" class="main-logo"></a>

  <a href="#" class="toggle-nav">
    <span class="glyphicon glyphicon-menu-hamburger"></span>
    {{-- <img src="/img/menuWhite.png" alt="" /> --}}
  </a>

  <div style='clear:both'></div>

  <nav class="main-nav">
    <ul>
      <li><a href="{{route('nosotros')}}">Nosotros</a></li>
      {{-- <li><a href="#">Catalago</a></li> --}}

      <li class="catalogo-dropdown">
          <a href="#">
              Catalogo <b class="caret"></b>
          </a>
          <ul>
              <li><a href="{{route('productMoviRehab')}}">Movilidad y Rehabilitación</a></li>
              <li><a href="{{route('productOrtoPro')}}">Ortopedia y Prótesis</a></li>
              <li><a href="{{route('productCiruImpla')}}">Cirugía e Implantes</a></li>
          </ul>
      </li>
      <li><a href="#" class="last-li-nav">Contacto</a></li>
    </ul>
  </nav>

</header>
