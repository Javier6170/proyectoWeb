<center>
  <div class="container-user">
    <div class="register-title">
      <h3>Registrase</h3>
    </div>
    <div class="form-register">
      <form method="post" onsubmit="return validar_contraseñas()" action="<?php echo $BASE_ROOT_URL; ?>guardar_usuarios.php">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Ingresa tu apellido">
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electronico" required>
        </div>
        <div class="mb-3">
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
        </div>
        <div class="mb-3">
          <label for="contrasena2" class="form-label">Repetir Contraseña</label>
          <input type="password" class="form-control" id="contrasena2" name="contrasena2" placeholder="Repite tu contraseña" required>
        </div>
        <div class="mb-3">
          <label for="rol" class="form-label">Rol</label>
          <select name="rol_id" id="rol_id">
            <?php foreach ($roles as $r) { ?>
              <option value="<?php echo $r["id"]; ?>"><?php echo $r["nombre_rol"]; ?></option>
            <?php } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-danger">Registrarse</button>
      </form>
    </div>
  </div>
  <center>