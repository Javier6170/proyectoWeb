<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require($BASE_ROOT_FOLDER . "config/config.php");
require($BASE_ROOT_FOLDER . "config/db.php");
require($BASE_ROOT_FOLDER . "data/funciones.php");
require("config/security.php");
$usuario = obtener_usuario($conn, $_GET['id']);
$ubicacion = "Editar perfil";
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/update_usuario_user.php");
require("required/footer.php");
