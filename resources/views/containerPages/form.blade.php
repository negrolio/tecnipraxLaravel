
<form action="{{route('sendMail')}}" method="post" name="sentMessage" id="contactForm">
  {{ csrf_field() }}

  <input type="text" name="name" id="name" placeholder="Nombre y Apellido">
  <input type="text" name="tel" id="tel" placeholder="Teléfono">
  <input type="text" name="email" id="email" placeholder="E-mail">
  <textarea name="message" rows="8" cols="40" placeholder="Mensaje:" form="contactForm"></textarea>
  <input type="submit" name="submit" value="ENVIAR" id="submit-button">
</form>
