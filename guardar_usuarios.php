<?php

error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require($BASE_ROOT_FOLDER . "config/config.php");
require($BASE_ROOT_FOLDER . "config/db.php");
require($BASE_ROOT_FOLDER . "data/funciones.php");
//var_dump($_POST);

$resultado = crear_usuario($conn, $_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['contrasena'], $_POST['rol_id']);

if ($resultado) {
    session_start();
    $_SESSION['mensaje']['exito'] = TRUE;
    $_SESSION['mensaje']['mensaje'] = "Usuario creado de forma exitosa!";
} else {
    session_start();
    $_SESSION['mensaje']['error'] = TRUE;
    $_SESSION['mensaje']['mensaje'] = "Ocurrió un error al tratar de crear un nuevo usuario. Verifique los datos e intente nuevamente!";
}

header('Location:' . $BASE_ROOT_URL . "usuarios.php?mensaje_update=Exito");
