@extends('containerPages/products/catalogProductBase')


@section('title')
  {{$products[0]->category}}
@endsection

@section('sectionShowProducts')
  @foreach ($products->chunk(6) as $someProducts)
      <div class="posts posts-page">
          @include('containerPages.products.listado', ['products' => $someProducts])
      </div>
      <hr style="width:100px;color:black">
  @endforeach

  @for ($i=0; $i < $products->count()/6 ; $i++)
    <button class="button-catalogo-page">
      {{$i + 1}}
    </button>
  @endfor

  {{--
    <div class="buttons-catalogo-product">
      {{-- <button class="button-catalogo-page">
        2
        Siguiente
      </button>
    </div>
    --}}


 @endsection
