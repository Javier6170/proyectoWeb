<?php

    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");
    //var_dump($_POST);

    $resultado = crear_producto($conn, $_POST['nombre'],$_POST['precio'],$_POST['stock'],$_POST['descripcion'],$_POST['url_imagen'],$_POST['id_category']);

    if ($resultado) {
        session_start();
        $_SESSION['mensaje']['exito'] = TRUE;
        $_SESSION['mensaje']['mensaje'] = "Producto creado de forma exitosa!";
        
    } else {
        session_start();
        $_SESSION['mensaje']['error'] = TRUE;
        $_SESSION['mensaje']['mensaje'] = "Ocurrió un error al tratar de crear un nuevo Producto. Verifique los datos e intente nuevamente!";
    }

        header('Location:'.$BASE_ROOT_URL."productos.php?mensaje_update=Exito");