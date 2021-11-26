<?php
    require($BASE_ROOT_FOLDER."config/config.php");
    require($BASE_ROOT_FOLDER."config/db.php");
    require($BASE_ROOT_FOLDER."data/funciones.php");

    $usuario = validar_usuario($conn,$_POST['correo'],$_POST['contrasena']);

    if($usuario != NULL) {
        session_start();
        $_SESSION = $usuario;
        header('Location:'.$BASE_ROOT_URL."index.php");
    } else {
        $_SESSION["mensaje"] = array();
        $_SESSION['mensaje']['error'] = TRUE;
        $_SESSION['mensaje']['mensaje'] = "Error al autenticarse. Verifique los datos e intente nuevamente!";
    }
    