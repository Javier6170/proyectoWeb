<br><br>
<h3>Crear Nuevo rol</h3>
<br><br>

<!-- 
Nombre	Unidad	Precio unitario	Cantidad disponible	Observaciones    
-->
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_rol.php">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="ingresa el nombre del rol">
    </div>
    <button type="submit" class="btn btn-primary">Crear nuevo rol</button>
</form>
<br><br>