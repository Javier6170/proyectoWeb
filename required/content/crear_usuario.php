<br><br>
<h3>Crear Nuevo Usuario</h3>
<br><br>

<!-- 
Nombre	Unidad	Precio unitario	Cantidad disponible	Observaciones    
-->
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_usuarios.php">
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Ingrese nombre del usuario">
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido </label>
    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese el apellido del usuario" required>
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="correo" name="correo" required  placeholder="Ingrese el correo electrónico">
  </div>
  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contrasena" name="contrasena" required placeholder="Ingrese contraseña">
  </div>
  <div class="mb-3">
    <label for="contrasena2" class="form-label">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="contrasena2" name="contrasena2" required placeholder="Ingrese nuevamente la contraseña">
  </div>
  <div class="mb-3">
    <label for="rol" class="form-label">Rol</label>
    <select name="rol_id" id="rol_id">
        <?php foreach($roles as $r) { ?>    
            <option value="<?php echo $r["id"];?>"><?php echo $r["nombre"];?></option>
        <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear usuario</button>
</form>
<br><br>