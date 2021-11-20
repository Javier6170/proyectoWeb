<?php 
$ubicacion = "inicio";
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
        alert("Exito creando el producto!");
    </script>
<?php
}

if(isset($_GET['mensaje_eliminar'])) {
    ?>
        <script>
            alert("Exito eliminando el producto!");
        </script>
    
    <?php
}

if(isset($_GET['mensaje_update'])) {
    ?>
        <script>
            alert("Exito actualizando el producto!");
        </script>
    
    <?php
}

if(isset($_GET['error'])) {
    ?>
        <script>
            alert("Error al crear al producto!");
        </script>
    
    <?php
    }

require("required/content/productos.php");
require("required/footer.php");
// require("required/content/pages.php");
// require("required/message/msj-one.php");
?>

