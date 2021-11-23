<?php
$roles=obtener_listado_roles($conn);?>
<div class="container-views">
    <div class="title-listado">
        <h3>Listado de roles</h3>
    </div>
    <div class="table-listado">
<table class="table">
            <thead>
                <tr>
                <th scope="col">#id</th>
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
                                echo $p["id"]
                            ?>
                         </td>
                        
                        <td>
                            <?php
                                echo $p["nombre_rol"]
                            ?>
                         </td>
                        <td>
                            <a class="btns" href="<?php echo $BASE_ROOT_URL;?>actualizar_rol.php?id=<?php echo $p["id"];?>">Actualizar
                            </a>
                        </td>
                        <td> <a class="btns" href="#" onClick="eliminar_rol(<?php echo $p["id"]?>);">Eliminar</a></td>
                    </tr>
                    
                <?php 
                    } 
                ?>
                </tbody>
                </table>
                </div>
</div>