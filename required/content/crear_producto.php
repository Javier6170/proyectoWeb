<br><br>
<h3>Crear Nuevo Producto</h3>
<br><br>

<!-- 
Nombre	Unidad	Precio unitario	Cantidad disponible	Observaciones    
-->
<form method="post" action="<?php echo $BASE_ROOT_URL; ?>guardar_productos.php">
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Ingrese el nombre del producto">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="precio" required  placeholder="Ingrese el precio">
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock"  placeholder="Ingrese stock del producto" required>
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea class="form-control" id="descripcion" placeholder="Ingrese una descripcion" name="descripcion"></textarea>
  </div>
  <div class="mb-3">
    <label for="rol" class="form-label">Category</label>
    <select name="id_category" id="id_category">
        <?php foreach($categorias as $r) { ?>    
            <option value="<?php echo $r["id"];?>"><?php echo $r["nombre"];?></option>
        <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear Producto Nuevo</button>
</form>

<br><br>