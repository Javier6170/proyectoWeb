<?php
$productos = obtener_listado_productos_con_category($conn); ?>
<br><br>
<h3>Listado de Productos</h3>
<br><br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scopre="col" colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($productos as $index => $p) {

        ?>
            <tr>
            <td>
                    <?php
                    echo $p["id"]
                    ?>

                </td>

                <td>
                    <?php
                    echo $p["Nombre"]
                    ?>

                </td>
                <td>
                    <?php
                    echo $p["precio"]
                    ?>

                </td>
                <td>
                    <?php
                    echo $p["stock"]
                    ?>

                </td>
                <td>
                    <?php
                    echo $p["descripcion"]
                    ?>
                </td>
                <td>
                    <?php
                    echo $p["category_nombre"]
                    ?>

                </td>
                <td>
                <a href="<?php echo $BASE_ROOT_URL; ?>actualizar_producto.php?id=<?php echo $p["id"]; ?>">Actualizar
                </a>
                </td>
                <td> <a href="#" onClick="eliminar_productos(<?php echo $p["id"] ?>);">Eliminar</a></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>