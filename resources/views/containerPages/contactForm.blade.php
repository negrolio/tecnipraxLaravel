<section class="contact">
  <h3 @if ($contactPage == 'true') style="display:none" @endif>CONTACTO</h3>
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
      <div><img src="/img/contacto/contacto-icono2.jpg" alt="email">info@tecniprax.com.ar</div>
      <div><img src="/img/contacto/contacto-icono3.jpg" alt="tel">+54 11 4637383</div>
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
