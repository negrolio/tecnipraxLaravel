<section class="contact">
  <h3 @if ($contactPage == 'true') style="display:none" @endif>CONTACTO</h3>
  <div class="contact-article-flex">
    <form name="sentMessage" id="contactForm">
      <input type="text" id="name" placeholder="Nombre y Apellido">
      <input type="text" id="tel" placeholder="Teléfono">
      <input type="text" id="email" placeholder="E-mail">
      <textarea name="message" rows="8" cols="40" placeholder="Mensaje:" form="contactForm"></textarea>
      <input type="submit" name="submit" value="ENVIAR" id="submit-button">
    </form>

    <article class="location">
      <div><img src="/img/home/contacto-icono1.jpg" alt="ubicacion">Azcuénaga 721, CABA</div>
      <div><img src="/img/home/contacto-icono2.jpg" alt="email">info@tecniprax.com.ar</div>
      <div><img src="/img/home/contacto-icono3.jpg" alt="tel">+54 11 4637383</div>
    </article>
  </div>
</section>
