<?php
session_start();
$ubicacion = "Comunidad | Store Dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("config/security.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/comunidad.php");
require("required/footer.php");
