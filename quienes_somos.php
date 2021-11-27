<?php
session_start();
$ubicacion = "Quienes Somos | Store Dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/quienes_somos.php");
require("required/footer.php");
