@extends('htmlBase')

@section('title')
  Contacto
@endsection

@section('containerPage')
  <section class="contact-banner">
    <h2>CONTACTO</h2>
    <h5>ESPERAMOS SU CONSULTA!</h5>
  </section>

  @include('containerPages.contactForm')

  <div id="map" style="width:100%;height:300px"></div>
@endsection
