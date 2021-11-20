<header class="header content">
  <div class="header-video">
    <video src="https://redragon.es/content/uploads/2021/05/210414-Redragon-Web-1920-x-740.mp4" class="video" autoplay muted loop></video>
  </div>
  <div class="header-content">
    <form class="formulario" method="POST" action="<?php echo $BASE_ROOT_URL; ?>guardar_usuarios.php">
      <h1>Registrarse</h1>
      <div class="contenedor">
        <div class="input-contenedor">
          <i class="fas fa-signature icon"></i>

          <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="input-contenedor">
        <i class="fas fa-heading icon"></i>
          <input type="text" id="apellido" name="apellido" placeholder="Apellido">
        </div>
        <div class="input-contenedor">
          <i class="fas fa-envelope-square icon"></i>
          <input type="text" id="correo" name="correo" placeholder="Correo">
        </div>
        <div class="input-contenedor">
          <i class="fas fa-key icon"></i>
          <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
        </div>
        <div class="input-contenedor">
          <i class="fas fa-key icon"></i>
          <input type="password" id="contrasena2" name="contrasena2" placeholder="Repetir Contraseña">
        </div>
        <div class="input-contenedor mb-3">
          <label for="rol" class="form-label">Rol</label>
          <select name="rol_id" id="rol_id">
            <?php foreach ($roles as $r) { ?>
              <option value="<?php echo $r["id"]; ?>"><?php echo $r["nombre_rol"]; ?></option>
            <?php } ?>
          </select>
        </div>
        <input type="submit" value="Registrarse" class="button">
      </div>
    </form>
  </div>
</header>