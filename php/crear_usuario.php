<?php 

error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require($BASE_ROOT_FOLDER."config/config.php");
require($BASE_ROOT_FOLDER."config/db.php");
require($BASE_ROOT_FOLDER."data/funciones.php");
//var_dump($_POST);

$resultado = crear_usuario($conn, $_POST['nombre'],$_POST['correo'],$_POST['password']);


if ($resultado) {
    ?>
    <script>
            alert("se creo el usuario");
    </script>
    <?php

} else {
   ?>
    <script>
            alert("no se pudo");
    </script>
    <?php
}