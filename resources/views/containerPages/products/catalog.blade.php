@extends('containerPages/products/catalogBase')


@section('title')
  {{$products[0]->category}}
@endsection

{{-- send the category because the icons in the banner only had to appear in one page --}}
@section('contentBanner')
  @include('containerPages.products.iconos', ['content' => $products[0]->category])
@endsection

@section('sectionShowCatalog')
  <h2>{{$products[0]->category}}</h2>
  <section>
    <div id="catalogCarousel" class="containerProducts carousel slide" data-ride="carousel" data-interval="false">

      <div class="carousel-inner" role="listbox">

        {{-- {{dd($products->chunk(6))}} --}}
        @foreach ($products->chunk(6) as $someProducts)
            <div class="item @if ($loop->first) active @endif" >
              @include('containerPages.products.listado', ['products' => $someProducts])
            </div>
        @endforeach
      </div>

      <ol>
        @for ($i=0; $i < $products->count()/6 ; $i++)
          <button class="button-catalogo-page" data-target="#catalogCarousel" data-slide-to="{{$i}}">
            {{$i + 1}}
          </button>
        @endfor
      </ol>

    </div>
  </section>

 @endsection
