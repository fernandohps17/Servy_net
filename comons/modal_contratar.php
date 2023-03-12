<section class="modal closeVentana">
  <div class="modal_container">
    <h2>Formulario de Registro</h2>
    <div class="form_form">
      <form class="section_form_inputs" action="./contact_modal/" method="POST">
        <div class="section_from_uno">

          <label class="section_form_inputs_encabezado">
            Nombre Comercial
            <input type="text" name="name_comercial" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Nombre Fiscal
            <input type="text" name="name_fiscal" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Direccion Fiscal
            <input type="text" name="dir_fiscal" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Código Postal
            <input type="text" name="postal" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Ciudad
            <input type="text" name="city" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Provincia
            <input type="text" name="province" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Teléfono de Contacto
            <input type="text" name="phone" required>
          </label>

          <label class="section_form_inputs_encabezado">
            E-mail de Contacto
            <input type="text" name="email" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Página Web (Si dispone de ella)
            <input type="text" name="web" required>
          </label>

          <label class="section_form_inputs_encabezado">
            Producto a contratar
            <input type="text" name="product" required>
          </label>

        </div>
        
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
    <p class="modal_close">Cerrar</p>
  </div>
</section>