@extends('htmlBase')

@section('title')
  {{$product->nombre}}
@endsection

@section('containerPage')
  <section class="containerProduct">
    <h2>{{$product->categoria}}</h2>

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
          <img src="/{{$product->imagen_url}}" alt="">
        </div>

        <div class="item">
          <img src="/{{$product->imagen_url}}" alt="">
        </div>

        <div class="item">
          <img src="/{{$product->imagen_url}}" alt="">
        </div>

        <div class="item">
          <img src="/{{$product->imagen_url}}" alt="">
        </div>
      </div>

      <img src="/img/home/flechaIzq.png" alt="flecha" class="flecha flecha-izq">
      <img src="/img/home/flechaDer.png" alt="flecha" class="flecha flecha-der">
    </section>

    <section class="product-description">
      <h2>{{$product->nombre}}</h2>
      <p>{{$product->descripcion}}</p>
    </section>

    @include('containerPages.contactForm')

  </section>
@endsection
