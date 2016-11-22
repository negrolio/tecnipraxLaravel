@extends('htmlBase')

@section('containerPage')

<section class="product-banner">
  @yield('contentBanner')
</section>

<section class="catalogo-container">
  @yield('sectionShowCatalog')
</section>

@endsection
