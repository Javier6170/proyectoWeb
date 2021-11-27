<?php 
session_start();
$ubicacion = "Lista Usuarios | Store dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
require("required/header.php");
require("required/menu/main-menu.php");

if(isset($_GET['mensaje'])) {
?>
    <script>
        alert("Exito creando el url de la imagen!");
    </script>
<?php
}

if(isset($_GET['mensaje_eliminar'])) {
    ?>
        <script>
            alert("Exito eliminando el url de la imagen!");
        </script>
    
    <?php
}

if(isset($_GET['mensaje_update'])) {
    ?>
        <script>
            alert("Exito actualizando el url de la imagen!");
        </script>
    
    <?php
}

if(isset($_GET['error'])) {
    ?>
        <script>
            alert("Error al crear al url de la imagen!");
        </script>
    
    <?php
    }

require("required/content/imagenes_productos.php");
require("required/footer.php");
?>
