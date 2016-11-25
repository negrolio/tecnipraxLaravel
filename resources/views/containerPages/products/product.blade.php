@extends('htmlBase')

@section('title')
  {{$product->name}}
@endsection

@section('containerPage')
  <section class="containerProduct">
    <h2>{{$product->category}}</h2>

    <section id="productCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="img-carousel-product">
            <img src="/{{$product->img_url}}" alt="">
          </div>
        </div>
        @foreach ($images as $img)
          <div class="item">
            <div class="img-carousel-product">
              <img src="/{{$img->img_url}}" alt="">
            </div>
          </div>
          {{-- este lo dejo comentado a modo de ejemplo para recordar el uso del firts-loop --}}
          {{-- <div class="item @if ($loop->first) active @endif">
            <div class="img-carousel-product">
              <img src="/{{$img->img_url}}" alt="">
            </div>
          </div> --}}
        @endforeach
      </div>

      <div class="indicator-next-prev-product">
        <a class="left carousel-control" href="#productCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-menu-left"></span>
        </a>
        <a class="right carousel-control" href="#productCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-menu-right"></span>
        </a>
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
        @for ($i=0; $i < $images->count() ; $i++)
          <li data-target="#productCarousel" data-slide-to="{{$i + 1}}"></li>
          {{-- <li data-target="#productCarousel" data-slide-to="{{$i}}" @if ($i == 0) class="active" @endif></li> --}}
        @endfor
      </ol>
    </section>


    <section class="product-description">
      <h2>{{$product->name}}</h2>

      <ul>
        @foreach ($features as $feature)
          <li>-{{$feature->content}}</li>
        @endforeach
      </ul>

      <p>{{$product->description}}</p>
    </section>

    @include('containerPages.contactForm',['contactPage'=>'false'])

  </section>
@endsection
