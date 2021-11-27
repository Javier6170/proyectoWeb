<?php
$usuarios = obtener_listado_usuarios_con_rol($conn);
$columnasAcciones = 0;

if (tiene_permiso_sesion('actualizar_usuario'))
    $columnasAcciones++;

if (tiene_permiso_sesion('eliminar_usuarios'))
    $columnasAcciones++;
?>

<div class="py-2 text-center">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <h3>Listado de Usuarios</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Rol</th>
                        <?php if ($columnasAcciones > 0) { ?>
                            <th scopre="col" colspan="<?php echo $columnasAcciones; ?>">Acciones</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $index => $p) { ?>
                        <tr>
                            <td><?php echo $p["id"] ?></td>
                            <td><?php echo $p["nombre"] ?></td>
                            <td><?php echo $p["apellido"] ?></td>
                            <td><?php echo $p["correo "] ?></td>
                            <td><?php echo $p["rol_nombre"] ?></td>
                            <?php if ($columnasAcciones > 0) { ?>
                                <?php if (tiene_permiso_sesion('actualizar_usuario-usuario')) { ?>
                                    <td>
                                        <a href="<?php echo $BASE_ROOT_URL; ?>actualizar_usuario.php?id=<?php echo $p["id"]; ?>">Actualizar
                                        </a>
                                    </td>
                                <?php } ?>
                                <?php if (tiene_permiso_sesion('eliminar_usuarios')) { ?>
                                    <td>
                                        <a href="#" onClick="eliminar_usuario(<?php echo $p["id"] ?>);">Eliminar</a>
                                    </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>