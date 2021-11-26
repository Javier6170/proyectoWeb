<?php
require("config/config.php");
require("config/db.php");
require("data/funciones.php");

//var_dump($_POST);
$usuario = validar_usuario($conn, $_POST['correo'], $_POST['contrasena']);
if ($usuario != NULL) {
    session_start();
    $_SESSION = $usuario;
} else {
    $_SESSION["mensaje"] = array();
    $_SESSION['mensaje']['error'] = TRUE;
    $_SESSION['mensaje']['mensaje'] = "Error al autenticarse. Verifique los datos e intente nuevamente!";
}
header('Location:' . $BASE_ROOT_URL . "inicio_sesion.php");
