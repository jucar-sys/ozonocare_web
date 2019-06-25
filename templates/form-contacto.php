<form action="enviarFormulario.php" class="p-5 needs-validation" method="post" novalidate>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo" name="nombre" required>
    <div class="invalid-feedback">
      El nombre es obligatorio
    </div>
    <div class="valid-feedback">
      Correcto
    </div>
  </div>

  <div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="email" class="form-control" id="email" placeholder="correo@mail.com" name="email" required>
    <div class="invalid-feedback">
      El correo es obligatorio
    </div>
    <div class="valid-feedback">
      Correcto
    </div>
  </div>

  <div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="telefono" class="form-control" id="telefono" placeholder="Teléfono de contacto" name="telefono" required>
    <div class="invalid-feedback">
      El teléfono es obligatorio
    </div>
    <div class="valid-feedback">
      Correcto
    </div>
  </div>

  <div class="form-group">
    <label for="interes">¿Qué te interesa?:</label>
    <input type="interes" class="form-control" id="interes" name="interes" list="interes" placeholder="Belleza o Salud" required pattern="[Bb][Ee][Ll][Ll][Ee][Zz][Aa]|[Ss][Aa][Ll][Uu][Dd]">
    <datalist id="interes">
        <option>Belleza</option>
        <option>Salud</option>
    </datalist>
    <div class="invalid-feedback">
      Escribe "Belleza" o "Salud"
    </div>
    <div class="valid-feedback">
      Correcto
    </div>
  </div>

  <div class="form-group">
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" class="form-control" cols="30" rows="7" required></textarea>
    <div class="invalid-feedback">
      El mensaje es obligatorio
    </div>
    <div class="valid-feedback">
      Correcto
    </div>
  </div>

  <input type="submit" class="btn btn-secondary text-uppercase m-2" value="Enviar">
  <input type="reset" class="btn btn-secondary text-uppercase m-2" value="Limpiar">
  
</form><!-- .formulario-contacto -->