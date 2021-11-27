<?php
require("config.php");
$paginas_no_protegidas = explode('|', $PAGINAS_DESPROTEGIDAS);
$pagina_actual = substr($_SERVER['SCRIPT_NAME'], 1);
$paginas_permitidas = $_SESSION['permisos']['script'];

$enPaginaSinProtección = in_array($pagina_actual, $paginas_no_protegidas);

var_dump($paginas_permitidas);
var_dump($pagina_actual);
var_dump(!$enPaginaSinProtección);
var_dump(in_array($pagina_actual, $paginas_permitidas));
die;

if (!$enPaginaSinProtección && !in_array($pagina_actual, $paginas_permitidas)) {
    //session_start();
    //unset($_SESSION);
    header('Location:' . $BASE_ROOT_URL . "non-permission.php");
}
