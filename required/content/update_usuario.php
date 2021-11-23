<center>
<div class="container-admin">
<div class="register-title">
    <h3>Crear Nuevo rol</h3>
</div>
<div class="form-register">
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_cambios_usuarios.php">
<input type="hidden" name="id" value="<?php echo $usuario['id']?>">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Ingrese nombre"
        value="<?php echo $usuario['nombre']?>"
    >
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" required  placeholder="Ingrese apellido"
        value="<?php echo $usuario['apellido']?>"
    >
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="text" class="form-control" id="correo" name="correo"  placeholder="Ingrese el correo" required
    value="<?php echo $usuario['correo']?>"
    >
  </div>
  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="contrasena" name="contrasena"  placeholder="Ingrese cantidad disponible"
        value="<?php echo $usuario['contrasena']?>"
    >
  </div>
  <button  class="btns" type="submit" class="btn btn-primary">Actualizar Usuario</button>
</form>
</div>
</div>
</center>