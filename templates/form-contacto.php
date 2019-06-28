<form action="enviarFormulario1.php" class="p-5" method="post">
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo" name="nombre" pattern=[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{3,50} required>
  </div>

  <div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="email" class="form-control" id="email" placeholder="correo@mail.com" data-toggle="tooltip" data-placement="top" name="email" required>
  </div>

  <div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="number" class="form-control" id="telefono" placeholder="Teléfono de contacto" data-toggle="tooltip" data-placement="top" name="telefono" required>
  </div>

  <div class="form-group">
    <label for="interes">¿Qué te interesa?:</label>
    <select id="interes" class="form-control" name="interes" required>
        <option value="">Selecciona uno</option>
        <option value="belleza">Belleza</option>
        <option value="salud">Salud</option>
    </select>
  </div>

  <div class="form-group">
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" class="form-control" cols="30" rows="7" placeholder="¿Cuál es el mensaje?" data-toggle="tooltip" data-placement="top" required></textarea>
  </div>

  <input type="submit" class="btn btn-secondary text-uppercase m-2" value="Enviar">
  <input type="reset" class="btn btn-secondary text-uppercase m-2" value="Limpiar">
  
</form><!-- .formulario-contacto -->