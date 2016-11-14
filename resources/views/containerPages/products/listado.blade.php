<h2>{{--$products[0]->category--}}</h2>

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

  </div>
</section>
