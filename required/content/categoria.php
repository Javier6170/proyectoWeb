<?php
$categorias = obtener_listado_categorias($conn); ?>
<div class="container-views">
    <div class="title-listado">
        <h3>Listado de productos</h3>
    </div>
    <div class="table-listado">

<table class="table">
    <thead>
        <tr>
            <th scope="col">nombre</th>
            <th scopre="col" colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($categorias as $index => $p) {

        ?>
            <tr>

                <td>
                    <?php
                    echo $p["nombre"]
                    ?>

                <td>
                    <a  class="btns" href="<?php echo $BASE_ROOT_URL; ?>actualizar_categoria.php?id=<?php echo $p["id"]; ?>">Actualizar
                    </a>
                </td>
                <td> <a class="btns" href="#" onClick="eliminar_categoria(<?php echo $p["id"] ?>);">Eliminar</a></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>