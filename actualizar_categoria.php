<?php

    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");    
    $categoria=obtener_categoria($conn, $_GET['id']);
    //echo "<pre>".print_r($producto)."</pre>";

    $ubicacion = "Actualizar categoria";    

    require("required/header.php");
    require("required/menu/main-menu.php");
    require("required/content/update_categoria.php");
    require("required/footer.php");