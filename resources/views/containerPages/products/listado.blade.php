

    @forelse ($products as $product)
      <article class="catalog-product">
        <a href="{{route('product',$product->id)}}">
          <div class="img-container-catalog">
            <img src="{{$product->img_url }}" alt="producto" />
          </div>
          <div class="catalog-product-title">
            <h4>{{$product->name }}</h4>

            {{-- this is for make all the box width the same height, 49 is the lengt of the largest name at the moment --}}
            {{-- <span style="visibility:hidden;font-size:1.3em">
              @if (strlen($product->name) < 49)
                {{str_random(48 - strlen($product->name))}}
              @endif
            </span> --}}

          </div>
          <input type="button" name="name" value="VER MAS">
        </a>
      </article>

    @empty
      <div class="not-products">
        <h3>Ups! parece que no podemos mostrar los productos en este momento</h3>
      </div>
    @endforelse

    {{-- @if ($products->count() < 4)
      <article class="catalog-product" style="visibility:hidden"></article>
      <article class="catalog-product" style="visibility:hidden"></article>
      <article class="catalog-product" style="visibility:hidden"></article>
    @endif --}}
