<?php 
    require("config/config.php");
    require("config/db.php");
    require("data/funciones.php");
    
    session_start();
    unset($_SESSION);
    session_destroy();

    header('Location:'.$BASE_ROOT_URL."inicio_sesion.php");