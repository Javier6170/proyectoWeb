<?php
session_start();
$ubicacion = "Lista Usuarios | Store dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/usuarios.php");
require("required/footer.php");
?>