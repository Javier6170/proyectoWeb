<?php
session_start();
$ubicacion = "Centro de ayuda | Store Dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/centro_ayuda.php");
require("required/footer.php");
