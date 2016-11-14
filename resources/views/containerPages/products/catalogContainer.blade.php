@extends('containerPages/products/catalogProductBase')


@section('title')
  {{$products[0]->category}}
@endsection

@section('sectionShowProducts')
  <h2>{{$products[0]->category}}</h2>

  <section>
    <div class="containerProducts">

      @forelse ($products as $product)
        <article class="catalogo-product">
          <a href="{{route('product',$product->id)}}">
            <img src="{{$product->img_url }}" alt="producto" />
            <div class="catalogo-product-title">
              <h4>{{$product->name }}</h4>
              <p>{{$product->description}}</p>
            </div>
          </a>
        </article>

      @empty
        <div class="not-products">
          <h3>Ups! parece que no podemos mostrar los productos en este momento</h3>
        </div>
      @endforelse
      <?php echo $products->render(); ?>

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
