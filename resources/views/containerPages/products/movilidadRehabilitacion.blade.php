@extends('containerPages/products/productBase')

@section('title')
  Movilidad y Rehabilitación
@endsection

@section('sectionShowProducts')
  <h2 id="hhhh">Movilidad y Rehabilitación</h2>

  @php
    $catalogoAmountContainer = 6;
    /**
     *
     */
    class Producto
    {
      public $name;
      public $img;
      public $texto;
      function __construct($name,$img,$texto)
      {
        $this->name = $name;
        $this->img = $img;
        $this->texto = $texto;
      }

    }

    $producto = new Producto('Product','img/productos/producto.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

  @endphp

  <section>
    <div class="containerProducts">
      @for ($i=0; $i < $catalogoAmountContainer ; $i++)
        <article class="catalogo-product">
          <a href="#">
            <img src="<?= $producto->img ?>" alt="producto" />
            <div class="catalogo-product-title">
              <h4><?= $producto->name ?></h4>
              <p>
                <?=
                  $producto->texto;
                ?>
              </p>
            </div>
          </a>
        </article>
      @endfor
      {{-- <article class="catalogo-product">
        <a href="#">
          <img src="img/productos/producto.jpg" alt="producto" />
          <div class="catalogo-product-title">
            <h4>Product</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </a>
      </article>
      <article class="catalogo-product">
        <a href="#">
          <img src="img/productos/producto.jpg" alt="producto" />
          <div class="catalogo-product-title">
            <h4>Product</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </a>
      </article>
      <article class="catalogo-product">
        <a href="#">
          <img src="img/productos/producto.jpg" alt="producto" />
          <div class="catalogo-product-title">
            <h4>Product</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </a>
      </article>
      <article class="catalogo-product">
        <a href="#">
          <img src="img/productos/producto.jpg" alt="producto" />
          <div class="catalogo-product-title">
            <h4>Product</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </a>
      </article>
      <article class="catalogo-product">
        <a href="#">
          <img src="img/productos/producto.jpg" alt="producto" />
          <div class="catalogo-product-title">
            <h4>Product</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </a>
      </article> --}}
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
