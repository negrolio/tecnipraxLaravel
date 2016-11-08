@extends('containerPages/products/catalogProductBase')


@section('title')
  {{$title}}
@endsection

@section('sectionShowProducts')
  <h2>{{$title}}</h2>

  <section>
    <div class="containerProducts">

      @forelse ($products as $product)
        <article class="catalogo-product">
          <a href="{{route('product',$product->id)}}">
            <img src="{{$product->imagen_url }}" alt="producto" />
            <div class="catalogo-product-title">
              <h4>{{$product->nombre }}</h4>
              <p>{{$product->descripcion}}</p>
            </div>
          </a>
        </article>

      @empty

      @endforelse


    </div>
  </section>

  <div class="buttons-catalogo-product">
    <button class="button-catalogo-page">
      1
    </button>
    <button class="button-catalogo-page">
      2
    </button>
    <button class="button-catalogo-next">
      Siguiente
    </button>

  </div>
@endsection
