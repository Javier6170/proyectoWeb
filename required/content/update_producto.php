<?php
session_start();
?>
<center>
<div class="container-admin">
<div class="register-title">
    <h3>Crear Nuevo rol</h3>
</div>
<div class="form-register">
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_cambios_producto.php">
<input type="hidden" name="id" value="<?php echo $producto['id']?>">
<div class="mb-3">
    <label for="nombre" class="form-label">nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Ingrese El nombre del producto"
        value="<?php echo $producto['nombre']?>"
    >
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">precio</label>
    <input type="text" class="form-control" id="precio" name="precio" required  placeholder="Ingrese El Precio del Producto"
        value="<?php echo $producto['precio']?>"
    >
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock producto</label>
    <input type="text" class="form-control" id="stock" name="stock"  placeholder="Ingrese stock Producto" required
    value="<?php echo $producto['stock']?>"
    >
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <br>
    <textarea class="form-control-area" id="descripcion" placeholder="Ingrese la descripcion del producto" name="descripcion">
    <?php echo $producto['descripcion']?>
    </textarea>
  </div>
  <button  class="btns" type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>
</div>
</div>
</center>
