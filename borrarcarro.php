<?php session_start(); 
var_dump($_SESSION['carrito']);
die;
unset($_SESSION['carrito']);
session_destroy();
?>