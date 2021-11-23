<center>
<div class="container-admin">
<div class="register-title">
    <h3>Crear Nuevo rol</h3>
</div>
<div class="form-register">
    <form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_rol.php">
        <div class="mb-3">
            <label for="nombre_rol" class="form-label"><h4>Nombre</h4></label>
            <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" required placeholder="ingresa el nombre del rol">
        </div><button type="submit" class="btn btn-danger">Crear nuevo rol</button>
    </form>
</div>
</div>
</center>

