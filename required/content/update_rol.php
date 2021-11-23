<center>
<div class="container-admin">
<div class="register-title">
    <h3>Crear Nuevo rol</h3>
</div>
<div class="form-register">
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_cambios_rol.php">
<input type="hidden" name="id" value="<?php echo $rol['id']?>">
  <div class="mb-3">
    <label for="nombre_rol" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" required  placeholder="Ingrese nombre"
        value="<?php echo $rol['nombre_rol']?>"
    >

  <button  class="btns" type="submit" class="btn btn-primary">Actualizar Rol</button>
</form>
</div>
</div>
</center>