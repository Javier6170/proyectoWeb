<?php
session_start();
$ubicacion = "No permiso | Store Dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/non-permission.php");
require("required/footer.php");
