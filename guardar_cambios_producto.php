<?php

    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");
    //var_dump($_POST);

    $resultado = actualizar_producto($conn, $_POST['id'],$_POST['nombre'],$_POST['precio'],$_POST['stock'],
                    $_POST['descripcion']);

    if ($resultado) {
        header('Location:'.$BASE_ROOT_URL."productos.php?mensaje_update=Exito");
    }