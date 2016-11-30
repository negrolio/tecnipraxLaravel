@extends('htmlBase')

@section('title')
  Nosotros
@endsection

@section('containerPage')

  <div class="containerPages">

      {{-- Section 1 --}}
      <section class="main-banner nosotros-banner">
        <h2>20 años</h2>
        <h5>brindando soluciones ortopédicas</h5>
      </section>

      {{-- Section 2 --}}
      <section class="about">
        <h3>SOBRE NOSOTROS</h3>
        <p>
          Ortopedia Tecniprax, ofrece desde hace más de 10 años una amplia gama de soluciones en la provisión de productos ortopédicos. Con la finalidad de brindar los elementos necesarios para promover la salud y servicios poco frecuentes en la atención al cliente.
          Sabemos que nos haremos acreedores de vuestra confianza, permitamos el privilegio de contar con su elección.
        </p>
      </section>

      <section class="nosotros-middle-banner"></section>

      <section class="areas">
        <h3>ÁREAS</h3>
        <article class="area-flex">
          <article class="area-left">

            <div class="area1">
              <h4>1. DISEÑO Y FABRICACIÓN</h4>
              <p>
                Cada equipo se fabrica en forma individual. Nuestra planta de fabricación en Concordia (Entre Ríos), está preparada para responder con la última tecnología a los desafíos y necesidades de sus pacientes en su proceso de rehabilitación.
              </p>
            </div>

            <div class="area2">
              <h4>2. ATENCIÓN PERSONALIZADA DEL PACIENTE</h4>
              <p>
                Desde Tecniprax coordinamos la visita al domicilio del paciente para conversar sobre sus necesidades (siempre respetando la prescripción del profesional) y tomar las medidas antropométricas para proceder al desarrollo y fabricación del equipo. Una vez terminado el producto y antes de la entrega definitiva lo visitamos nuevamente testear  su correcta adaptabilidad al paciente.
              </p>
            </div>
          </article>

          <img src="img/quienes-somos/line.jpg" alt="" />

          <article class="area3">
            <h4>3. EXPANSIÓN Y CRECIMIENTO</h4>
            <p>
              Una vez terminado el producto y antes de la entrega definitiva lo visitamos nuevamente para testear su correcta adaptabilidad al paciente.
            </p>
          </article>

        </article>

      </section>

      <section id="myCarousel" class="carousel slide nosotros-carousel" data-ride="carousel" data-interval=2000>
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
            <div class="img-carousel-nosotros">
              <img src="img/quienes-somos/carrusel1.jpg" alt="">
            </div>
          </div>

          <div class="item">
            <div class="img-carousel-nosotros">
              <img src="img/quienes-somos/carrusel1.jpg" alt="">
            </div>
          </div>

          <div class="item">
            <div class="img-carousel-nosotros">
              <img src="img/quienes-somos/carrusel1.jpg" alt="">
            </div>
          </div>

          <div class="item">
            <div class="img-carousel-nosotros">
              <img src="img/quienes-somos/carrusel1.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection
