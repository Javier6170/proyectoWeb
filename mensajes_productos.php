<?php 
$ubicacion = "Lista Usuarios | Store dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
//$productos=obtener_listado_producto($conn);
//var_dump($productos);
//var_dump($conn);
require("required/header.php");
require("required/menu/main-menu.php");

if(isset($_GET['mensaje_comprar'])) {
    ?>
        <script>
            alert("Exito comprando el producto!");
        </script>
    <?php
}