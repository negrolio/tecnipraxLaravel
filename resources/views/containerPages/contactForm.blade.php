<section class="contact">
  <h3 @if ($contactPage == 'true') style="display:none" @endif>CONTACTO</h3>

    @if(session('mensaje_exitoso'))
      <div class="alert alert-success">
          {{ session('mensaje_exitoso') }}
      </div>
    @endif

    @if(session('mensaje_error'))
      <div class="alert alert-danger">
          {{ session('mensaje_error') }}
      </div>
    @endif

  <div class="contact-article-flex">

    @include('containerPages.form')

    <article class="location">
      <div>
        <img src="/img/contacto/contacto-icono1.jpg" alt="ubicacion">
        <span>
          <b>Administración y venta:</b><br>
          Azcuenaga 721 / 717 / 719.<br>
          CABA.
        </span>
      </div>
      <div><img src="/img/contacto/contacto-icono2.jpg" alt="email"><span>info@tecniprax.com.ar</span></div>
      <div><img src="/img/contacto/contacto-icono3.jpg" alt="tel"><span>+54 11 4637383</span></div>
      <div>
        <img src="/img/contacto/contacto-icono4.jpg" alt="Fabricacion">
        <span>
          <b>Fabricación y venta:</b><br>
          Av. Pte Illia 205<br>
          Concordia, Entre Ríos.
        </span>
      </div>
    </article>
  </div>
</section>
