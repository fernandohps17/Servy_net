<section class="modal">
  <div class="modal_container">
    <h2>¡Contratar!</h2>

    <div class="form_form">
      <form class="section_form_inputs" action="./contact/" method="POST">
        <div class="section_from_uno">
          <label class="section_form_inputs_encabezado">
            Nombre y Apellido
            <input type="text" name="name" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Teléfono
            <input type="text" name="phone" required>
          </label>
        </div>
        <div class="section_from_uno">
          <label class="section_form_inputs_encabezado">
            E-mail
            <input type="text" name="email" required>
          </label>

          <label class="section_form_inputs_encabezado">
            URL web a analizar
            <input type="text" name="name" required>
          </label>
        </div>

        <label class="section_form_inputs_encabezado">
          Notas
          <input type="text" name="notas" required>
        </label>

        <div class="section_form_inputs_botones">
          <label class="section_form_terminos">
            <input class="checkbox" type="checkbox" required>
            <span>He leído y aceptado la <a href="/politicas-de-privacidad/"><u>política de privacidad</u></a></span>
          </label>

          <div class="section_form_boton">
            <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
            <button type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>


    <a href="" class="modal_close">Cerrar</a>
  </div>
</section>