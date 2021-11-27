<?php
session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");    
    $producto=obtener_producto($conn, $_GET['id']);
    //echo "<pre>".print_r($producto)."</pre>";

    $ubicacion = "Actualizar producro";    

    require("required/header.php");
    require("required/menu/main-menu.php");
    require("required/content/update_producto.php");
    require("required/footer.php");