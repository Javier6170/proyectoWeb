<?php
session_start();
$ubicacion = "inicio | Store Dark";
require("config/config.php");
require("config/db.php");
require("data/funciones.php");
require("required/header.php");
require("required/menu/main-menu.php");
require("required/content/login.php");
require("required/content/ventas.php");
require("required/footer.php");
