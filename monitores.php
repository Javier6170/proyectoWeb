<?php
session_start();
$ubicacion = "inicio";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/monitores.php");
require("required/footer.php");