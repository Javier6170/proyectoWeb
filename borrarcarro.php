<?php 
session_start(); 
unset($_SESSION['carrito']);
header('Location:' . $BASE_ROOT_URL . "index.php#ventas");
?>