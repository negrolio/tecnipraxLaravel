@extends('htmlBase')

@section('containerPage')

<section class="product-banner">

  <h4>CÓMO TRABAJAMOS</h4>
  <div class="skills-section-products">
    <div class="skills-articles-products">
      <img src="img/productos/iconoGente.png" alt="conversacion"/>
      <p>Nos contas tus necesidades y te asesoramos sobre el modelo a utilizar</p>
    </div>
    <div class="skills-articles-products">
      <img src="img/productos/iconoCasa.png" alt="sweet home"/>
      <p>Nos contas tus necesidades y te asesoramos sobre el modelo a utilizar</p>
    </div>
    <div class="skills-articles-products">
      <img src="img/productos/iconoTarjetas.png" alt="personal"/>
      <p>Nos contas tus necesidades y te asesoramos sobre el modelo a utilizar</p>
    </div>
  </div>

</section>

<section class="catalogo-container">
  @yield('sectionShowProducts')
</section>

@endsection
