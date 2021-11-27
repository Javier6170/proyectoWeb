<?php
require("config.php");
$paginas_no_protegidas = explode('|', $PAGINAS_DESPROTEGIDAS);
$pagina_actual = substr($_SERVER['SCRIPT_NAME'], 1);
$paginas_permitidas = $_SESSION['permisos']['script'];
$enPaginaSinProtección = in_array($pagina_actual, $paginas_no_protegidas);
if (!$enPaginaSinProtección && !in_array($pagina_actual, $paginas_permitidas)) {
    header('Location:' . $BASE_ROOT_URL . "non-permission.php");
}
