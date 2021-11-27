<?php
session_start();
?>
<center>
<div class="container-admin">
<div class="register-title">
    <h3>Añadir Nueva imagen de productos</h3>
</div>
<div class="form-register">
    <form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_producto_url.php">
        <div class="mb-3">
            <label for="url_imagen" class="form-label"><h4>Url de imagenes de productos</h4></label>
            <input type="text" class="form-control" id="url_imagen" name="url_imagen" required placeholder="Ingresa la url de la imagen">
        </div>
        <button type="submit" class="btn btn-danger">Añadir Imagen</button>
    </form>
</div>
</div>
</center>