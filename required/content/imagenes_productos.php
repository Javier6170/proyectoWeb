<?php
session_start();
?>
<?php
$usuarios = obtener_listado_url_productos($conn); ?>
<div class="container-views">
    <div class="title-listado">
        <h3>Listado de Usuarios</h3>
    </div>
    <div class="table-listado">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Url Imagen</th>
                    <th scopre="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $index => $p) {
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $p["id"]
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $p["url_imagen"]
                            ?>
                        </td>
                        <td> <a class="btns" href="#" onClick="eliminar_url_imagen(<?php echo $p["id"] ?>);">Eliminar</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>