<?php
session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");
    //var_dump($_POST);
    //echo $_GET['id'];
    //die();

    eliminar_producto($conn, $_GET['id']);
    header('Location:'.$BASE_ROOT_URL."productos.php?mensaje_eliminar=Exito");