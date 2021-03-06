<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$ubicacion = "Inicio de Sesion";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
if(isset($_SESSION) && isset($_SESSION['correo'])) {
    require("required/content/bienvenido.php");
} else {
    require("required/content/inicio_sesion.php");
}
require("required/footer.php");
?>