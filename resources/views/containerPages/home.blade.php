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
                  <input type="button" class="button-banner" value="conócelas     >">
                </div>
              </article>
            </section>
          </li>

          <li>
            <section class="main-banner" id="main-banner2">
              <article class="inter-banner">
                <div class="div-title1">
                  <h2>sillas <br> a medida</h2>
                  <h5>más personalizadas, más movilidad, más libertad!</h5>
                  <input type="button" class="button-banner" value="conócelas     >">
                </div>
              </article>
            </section>
          </li>

          <li>
            <section class="main-banner" id="main-banner3">
              <article class="inter-banner">
                <div class="div-title1">
                  <h2>sillas <br> a medida</h2>
                  <h5>más personalizadas, más movilidad, más libertad!</h5>
                  <input type="button" class="button-banner" value="conócelas     >">
                </div>
              </article>
            </section>
          </li>

        </ul>
      </section>

      {{-- Section 2 --}}
      <section class="skills-section">
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
                <img src="img/home/category2" alt="ortopedia y protesis" class="img-category">
                <div class="category-title">
                  <h4>ortopedia<br> y prótesis</h4>
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
        <h3>TESTIMONIOS</h3>
        <!-- <div class="img-testimony"></div> -->
        <img src="img/home/testimonio1.jpg" alt="testimonio" class="img-testimony"/>
        <article class="testimony-p-1">
          <p>La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar. Antes de comenzar hacemos una reunion para decidir el estilo. La silla que elijas depende del uso que le quieras dar.</p>
          <p>Victor Lopez. Argentina</p>
        </article>
      </section>

      {{-- Section 5 --}}
      <section class="foot-banner"></section>

      <hr>

      {{-- Section 6 --}}
      <section class="contact">
        <h3>CONTACTO</h3>
        <form name="sentMessage" id="contactForm">
          <input type="text" id="name" placeholder="Nombre y Apellido">
          <input type="text" id="tel" placeholder="Teléfono">
          <input type="text" id="email" placeholder="E-mail">
          <textarea name="message" rows="8" cols="40" placeholder="Mensaje:" form="contactForm"></textarea>
          <input type="submit" name="submit" value="ENVIAR" id="submit-button">
        </form>

        <article class="location">
          <div><img src="img/home/contacto-icono1.jpg" alt="ubicacion">Azcuenaga 334</div>
          <div><img src="img/home/contacto-icono2.jpg" alt="email">info@tecniprax.com.ar</div>
          <div><img src="img/home/contacto-icono3.jpg" alt="tel">+54 11 4637383</div>
        </article>
      </section>
    </div>

@endsection
