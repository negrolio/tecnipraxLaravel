@extends('htmlBase')

@section('containerPage')

  <div class="containerPages">

      {{-- Section 1 --}}
      <section class="main-banner nosotros-banner">
        <h2>19 años</h2>
        <h5>brindando soluciones ortopédicas</h5>
      </section>

      {{-- Section 2 --}}
      <section class="about">
        <h3>SOBRE NOSOTROS</h3>
        <p>
          Nuestra ortopedia cuentacon profesionales ortesistas protesistas egresados de la universidad de San Martín, que poseen una verdadera vocación de servicio, asegurando de esta forma, la calidad total de los productos ofrecidos. <br>
          Pensamos en un proyecto para poder satisfacer las necesidades de las personas con discapacidad reducida que tiene como fin incorporar al servicio de la salud la fabricación a medida y artesanal de producto tales como sillas de ruedas, sillas higiénicas, tablas bipedestadoras, andadores y un sin fin de productos desarrollados específicamente para cada uno de ellos, dándole asi tanto a las personas como a las entidades una solución personalizada en cada elemento que fabricamos. <br>
          Para completar este proyecto hemos incorporado en el año 2005 a Tecniprax SRL división implantes traumatológicos al servicio de la Salud, quien representa una extensa línea de productos(Narang Medical LTD).
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </section>

      <section class="nosotros-middle-banner"></section>

      <section class="areas">
        <h3>ÁREAS</h3>
        <article class="area-flex">
          <article class="area-left">

            <div class="area1">
              <h4>1. TÉCNICA Y DESARROLLO</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>

            <div class="area2">
              <h4>2. COMERCIALIZACIÓN Y ATENCION AL CLIENTE</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </article>

          <img src="img/quienes-somos/line.jpg" alt="" />

          <article class="area3">
            <h4>3. IMPLANTES</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </article>

        </article>

      </section>

      <section id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/quienes-somos/carrusel1.jpg" alt="">
          </div>

          <div class="item">
            <img src="img/quienes-somos/carrusel1.jpg" alt="">
          </div>

          <div class="item">
            <img src="img/quienes-somos/carrusel1.jpg" alt="">
          </div>

          <div class="item">
            <img src="img/quienes-somos/carrusel1.jpg" alt="">
          </div>
        </div>
      </section>
    </div>

@endsection
