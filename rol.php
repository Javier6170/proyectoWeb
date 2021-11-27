<?php 
session_start();
$ubicacion = "Listo rol | Store dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
//$productos=obtener_listado_producto($conn);
//var_dump($productos);
//var_dump($conn);
require("required/header.php");
require("required/menu/main-menu.php");

if(isset($_GET['mensaje'])) {
?>
    <script>
        alert("Exito creando el rol!");
    </script>
<?php
}

if(isset($_GET['mensaje_eliminar'])) {
    ?>
        <script>
            alert("Exito eliminando el rol!");
        </script>
    
    <?php
}

if(isset($_GET['mensaje_update'])) {
    ?>
        <script>
            alert("Exito actualizando el rol!");
        </script>
    
    <?php
}

if(isset($_GET['error'])) {
    ?>
        <script>
            alert("Error al crear al rol!");
        </script>
    
    <?php
    }

require("required/content/rol.php");
require("required/footer.php");
// require("required/content/pages.php");
// require("required/message/msj-one.php");
?>