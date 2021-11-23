<?php
$usuarios = obtener_listado_usuarios_con_rol($conn); ?>
<div class="container-views">
    <div class="title-listado">
        <h3>Listado de Usuarios</h3>
    </div>
    <div class="table-listado">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scopre="col" colspan="2" style="padding-left: 50px;">Acciones</th>
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
                            echo $p["nombre"]
                            ?>

                        </td>
                        <td>
                            <?php
                            echo $p["apellido"]
                            ?>

                        </td>
                        <td>
                            <?php
                            echo $p["correo"]
                            ?>

                        </td>

                        <td>
                            <?php
                            echo $p["rol_nombre"]
                            ?>

                        </td>

                        <td>
                            <a class="btns" href="<?php echo $BASE_ROOT_URL; ?>actualizar_usuario.php?id=<?php echo $p["id"]; ?>">Actualizar
                            </a>
                        </td>
                        <td> <a class="btns" href="#" onClick="eliminar_usuario(<?php echo $p["id"] ?>);">Eliminar</a></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>