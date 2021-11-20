<?php
$usuarios=obtener_listado_usuarios_con_rol($conn);?>
<br><br>
<h3>Listado de Usuarios</h3>
<br><br>

<table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Rol</th>
                    <th scopre="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($usuarios as $index=>$p){                          
                    
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
                            <a href="<?php echo $BASE_ROOT_URL;?>actualizar_usuario.php?id=<?php echo $p["id"];?>">Actualizar
                            </a>
                        </td>
                        <td> <a href="#" onClick="eliminar_usuario(<?php echo $p["id"]?>);">Eliminar</a></td>
                    </tr>
                    
                <?php 
                    } 
                ?>
                </tbody>
                </table>