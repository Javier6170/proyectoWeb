<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$ubicacion = "Nuevo rol";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
require("required/header.php");
require("required/menu/main-menu.php");
$roles = obtener_rol($conn);
require("required/content/mensajes.php");
require("required/content/crear_rol.php");
require("required/footer.php");
