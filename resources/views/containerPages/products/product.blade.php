@extends('htmlBase')

@section('title')
  {{$product->nombre}}
@endsection

@section('containerPage')
  <h2>{{$product->nombre}}</h2>

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
        <img src="{{$product->imagen_url}}" alt="">
      </div>

      <div class="item">
        <img src="{{$product->imagen_url}}" alt="">
      </div>

      <div class="item">
        <img src="{{$product->imagen_url}}" alt="">
      </div>

      <div class="item">
        <img src="{{$product->imagen_url}}" alt="">
      </div>
    </div>
  </section>
  {{-- <section id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/productos/producto.jpg" alt="">
      </div>

      <div class="item">
        <img src="img/productos/producto.jpg" alt="">
      </div>

      <div class="item">
        <img src="img/productos/producto.jpg" alt="">
      </div>

      <div class="item">
        <img src="img/productos/producto.jpg" alt="">
      </div>

      <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
    </div>
  </section> --}}

@endsection
