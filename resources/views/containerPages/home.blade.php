@extends('htmlBase')

@section('containerPage')


    <div class="containerPages">

      {{-- Section 1 --}}
      <section class="all-banners" id="slider">

        <img src="img/home/flechaIzq.png" alt="flecha" class="flecha flecha-izq">
        <img src="img/home/flechaDer.png" alt="flecha" class="flecha flecha-der">

        <ul>

          <li>
            <section class="main-banner" id="main-banner1">
              <article class="inter-banner">
                <div class="div-title1">
                  <h2>sillas <br> a medida</h2>
                  <h5>más personalizadas, más movilidad, más libertad!</h5>
                  <a href="{{route('productMoviRehab')}}"><input type="button" class="button-banner" value="conocelas     >"></a>
                </div>
              </article>
            </section>
          </li>

          <li>
            <section class="main-banner" id="main-banner2">
              <article class="inter-banner">
                <div class="div-title1">
                  <h2>ÓRTESIS<br>Y PRÓTESIS</h2>
                  <h5>para que puedas seguir haciendo lo que te gusta!</h5>
                  <a href="{{route('productOrtoPro')}}"><input type="button" class="button-banner" value="conocelas     >"></a>
                </div>
              </article>
            </section>
          </li>

          <li>
            <section class="main-banner" id="main-banner3">
              <article class="inter-banner">
                <div class="div-title1">
                  <h2>CIRUGÍA<br> E IMPLANTES</h2>
                  <h5>una buena rehabilitación comienza usando productos de calidad!</h5>
                  <a href="{{route('productCiruImpla')}}"><input type="button" class="button-banner" value="conocelos     >"></a>
                </div>
              </article>
            </section>
          </li>

        </ul>
      </section>

      {{-- Section 2 --}}
      <section class="skills-section">
        <div class="skills-flex">
          <article class="skills-articles">
            <img src="img/home/icono-val1.jpg" alt="fabricacion propia"/>
            <h4>FABRICACIÓN PROPIA</h4>
            <p>Tenemos nuestra propia fábrica para lograr productos de calidad y a medida. Todas nuestras unidades cuentan con certificado de ANMAT</p>
          </article>
          <article class="skills-articles">
            <img src="img/home/icono-val1.jpg" alt="experiencia"/>
            <h4>EXPERIENCIA</h4>
            <p>10 años de fabricación nos avalan. Trabajamos con prestigiosos hospitales y obras sociales.</p>
          </article>
          <article class="skills-articles">
            <img src="img/home/icono-val3.jpg" alt="en todo el pais"/>
            <h4>EN TODO EL PAÍS</h4>
            <p>Trabajamos con pacientes de toda la Argentina. Nuestro objetivo es seguir expandiendose</p>
          </article>
        </div>

        <a href="{{route('nosotros')}}"><input type="button" class="button-banner" value="conoce mas     >"></a>
        
      </section>

      {{-- Section 3 --}}
      <section class="home-products">
        <h3>PRODUCTOS</h3>
        <div class="category">
            <article class="category-products">
              <a href="{{route('productMoviRehab')}}">
                <img src="img/home/category1" alt="movilidad y rehabilitacion" class="img-category">
                <div class="category-title">
                  <h4>movilidad y rehabilitación</h4>
                </div>
              </a>
            </article>
            <article class="category-products">
              <a href="{{route('productOrtoPro')}}">
                <img src="img/home/category2" alt="órtesis y protesis" class="img-category">
                <div class="category-title">
                  <h4>órtesis<br> y prótesis</h4>
                </div>
              </a>
            </article>
            <article class="category-products">
                <a href="{{route('productCiruImpla')}}">
                <img src="img/home/category3" alt="cirugia e implantes" class="img-category">
                <div class="category-title">
                  <h4>cirugía<br> e implantes</h4>
                </div>
            </a>
            </article>
        </div>
      </section>

      {{-- Section 4 --}}
      <section class="testimony">
        <div id='carousel-testimony' class="carousel slide nosotros-carousel" data-ride="carousel" data-interval=2000>

          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <h3>TESTIMONIOS</h3>
              <img src="img/home/testimonio1.jpg" alt="testimonio" class="img-testimony"/>
              <article class="testimony-p-1">
                <p>La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar.</p>
                <p>Victor Lopez. Argentina</p>
              </article>
            </div>

            <div class="item">
              <h3>TESTIMONIOS</h3>
              <img src="img/home/testimonio1.jpg" alt="testimonio" class="img-testimony"/>
              <article class="testimony-p-1">
                <p>La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar.</p>
                <p>Victor Lopez. Argentina</p>
              </article>
            </div>

            <div class="item">
              <h3>TESTIMONIOS</h3>
              <img src="img/home/testimonio1.jpg" alt="testimonio" class="img-testimony"/>
              <article class="testimony-p-1">
                <p>La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar.</p>
                <p>Victor Lopez. Argentina</p>
              </article>
            </div>
          </div>

          <ol class="carousel-indicators">
            <li data-target="#carousel-testimony" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-testimony" data-slide-to="1"></li>
            <li data-target="#carousel-testimony" data-slide-to="2"></li>
          </ol>
        </div>
      </section>

      {{-- Section 5 --}}
      <section class="foot-banner"></section>

      <hr>

      {{-- Section 6 --}}
      @include('containerPages.contactForm')
    </div>

@endsection
