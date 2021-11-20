<?php
$roles=obtener_listado_roles($conn);?>
<br><br>
<h3>Listado de Usuarios</h3>
<br><br>

<table class="table">
            <thead>
                <tr>
                    <th scope="col">nombre</th>
                    <th scopre="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($roles as $index=>$p){                          
                    
                ?>
                    <tr>
                        
                        <td>
                            <?php
                                echo $p["nombre"]
                            ?>
                        
                        <td>
                            <a href="<?php echo $BASE_ROOT_URL;?>actualizar_rol.php?id=<?php echo $p["id"];?>">Actualizar
                            </a>
                        </td>
                        <td> <a href="#" onClick="eliminar_rol(<?php echo $p["id"]?>);">Eliminar</a></td>
                    </tr>
                    
                <?php 
                    } 
                ?>
                </tbody>
                </table>