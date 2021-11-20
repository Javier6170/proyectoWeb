<?php

    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");    
    $usuario=obtener_roless($conn, $_GET['id']);
    //echo "<pre>".print_r($producto)."</pre>";

    $ubicacion = "Actualizar rol";    

    require("required/header.php");
    require("required/menu/main-menu.php");
    require("required/content/update_rol.php");
    require("required/footer.php");