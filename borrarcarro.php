<?php session_start(); 
unset($_SESSION['carrito']);
session_destroy();
header('Location:' . $BASE_ROOT_URL . "teclados.php");
?>