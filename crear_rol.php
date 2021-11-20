<?php 
error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$ubicacion = "Nuevo rol";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
//$productos=obtener_listado_producto($conn);
//var_dump($productos);
//var_dump($conn);
require("required/header.php");
require("required/menu/main-menu.php");
$roles = obtener_rol($conn);
require("required/content/crear_rol.php");
require("required/footer.php");
// require("required/content/pages.php");
// require("required/message/msj-one.php");
?>