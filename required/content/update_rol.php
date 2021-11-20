<br><br>
<h3>Actualizar rol</h3>
<br><br>

<!-- 
Nombre	Unidad	Precio unitario	Cantidad disponible	Observaciones    
-->
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_cambios_rol.php">
<input type="hidden" name="id" value="<?php echo $usuario['id']?>">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Ingrese nombre"
        value="<?php echo $usuario['nombre']?>"
    >

  <button type="submit" class="btn btn-primary">Actualizar Rol</button>
</form>

<br><br>