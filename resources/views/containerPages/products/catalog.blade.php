@extends('containerPages/products/catalogBase')


@section('title')
  {{$products[0]->category}}
@endsection

{{-- if the category is movilidad y rehabilitacion the background-image is other --}}
@section('contentBanner')
  <section class="product-banner" @if ($products[0]->category=='Movilidad y Rehabilitación')
    style="background-image:url(../img/productos/cabecera1.jpg)"@endif>
  {{-- send the category because the icons in the banner only had to appear in one page --}}
      @include('containerPages.products.iconos', ['content' => $products[0]->category])
  </section>
@endsection

@section('sectionShowCatalog')
  <div class="products-title-and-logo">
    <h2>{{$products[0]->category}}</h2>
    <p>Distribución de Productos:</p>
    <img src="/img/productos/logos.jpg" alt="" />
  </div>
  <section>
    <div id="catalogCarousel" class="containerProducts carousel slide" data-ride="carousel" data-interval="false">

      <div class="carousel-inner" role="listbox">

        {{-- {{dd($products->chunk(6))}} --}}
        @foreach ($products->chunk(9) as $someProducts)
            <div class="item @if ($loop->first) active @endif" >
              @include('containerPages.products.listado', ['products' => $someProducts])
            </div>
        @endforeach
      </div>

      <ol>
        @for ($i=0; $i < $products->count()/9 ; $i++)
          <button class="button-catalogo-page" data-target="#catalogCarousel" data-slide-to="{{$i}}">
            {{$i + 1}}
          </button>
        @endfor
      </ol>

    </div>
  </section>

 @endsection
