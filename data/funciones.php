<?php
error_reporting(E_ALL ^ E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validar_conexion($conn)
{
    if ($conn == NULL) {
        $conn = $GLOBALS['connection'];
    }

    return $conn;
}
function obtener_listado_usuarios_con_rol($conn)
{
    $conn = validar_conexion($conn);
    $usuarios = [];
    $sql = "SELECT U.*,R.nombre_rol as rol_nombre FROM usuario U INNER JOIN rol R ON U.rol_id=R.id";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $usuarios[$i]["id"] = $row["id"];
        $usuarios[$i]["nombre"] = $row["nombre"];
        $usuarios[$i]["apellido"] = $row["apellido"];
        $usuarios[$i]["correo"] = $row["correo"];
        $usuarios[$i]["rol_id"] = $row["rol_id"];
        $usuarios[$i]["rol_nombre"] = $row["rol_nombre"];
        $i++;
    }

    //$conn->close();

    return $usuarios;
}

function crear_usuario($conn, $nombre, $apellido, $correo, $contrasena, $rol_id)
{
    //$_POST['nombres'],$_POST['correo'],$_POST['nombre_usuario'],$_POST['contrasena'],$_POST['rol_id']
    $contrasena = hash("sha256", $contrasena);

    $conn = validar_conexion($conn);
    $sql = "INSERT INTO usuario (nombre,apellido,correo,contrasena,rol_id) VALUES (?,?,?,?,?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $nombre, $apellido, $correo, $contrasena, $rol_id);

        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_listado_usuarios($conn)
{
    $conn = validar_conexion($conn);
    $usuarios = [];
    $result = $conn->query("SELECT * FROM usuario");

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $usuarios[$i]["id"] = $row["id"];
        $usuarios[$i]["nombre"] = $row["nombre"];
        $usuarios[$i]["apellido"] = $row["apellido"];
        $usuarios[$i]["correo"] = $row["correo"];
        $usuarios[$i]["rol_id"] = $row["rol_id"];
        $i++;
    }

    //$conn->close();

    return $usuarios;
}

function obtener_usuario($conn, $id)
{
    $conn = validar_conexion($conn);
    $usuario = [];
    $sql = "SELECT * FROM usuario WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $row = $stmt_result->fetch_assoc();
            $usuario["id"] = $row["id"];
            $usuario["nombre"] = $row["nombre"];
            $usuario["apellido"] = $row["apellido"];
            $usuario["correo"] = $row["correo"];
            $usuario["contrasena"] = $row["contrasena"];
            $usuario["rol_id"] = $row["rol_id"];
        }
    }
    $stmt->close();
    //$conn->close();
    return $usuario;
}


function actualizar_usuario($conn, $id, $nombre, $apellido, $correo, $contrasena)
{
    $conn = validar_conexion($conn);
    $sql = "UPDATE usuario SET nombre=?, apellido=?,correo=?,contrasena=? WHERE id=?";
    $contrasena = hash('sha256', $contrasena);
    //die($sql);

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $nombre, $apellido, $correo, $contrasena, $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function eliminar_usuario($conn, $id)
{
    $conn = validar_conexion($conn);
    $sql = "DELETE  FROM usuario WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function crear_producto($conn, $nombre, $precio, $stock, $descripcion, $url_imagen, $id_category)
{

    $conn = validar_conexion($conn);
    $sql = "INSERT INTO producto (nombre,precio,stock,descripcion,url_imagen,id_category) VALUES (?,?,?,?,?,?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("siissi", $nombre, $precio, $stock, $descripcion, $url_imagen, $id_category);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_producto($conn, $id)
{
    $conn = validar_conexion($conn);
    $producto = [];
    $sql = "SELECT * FROM producto WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $row = $stmt_result->fetch_assoc();
            $producto["id"] = $row["id"];
            $producto["nombre"] = $row["nombre"];
            $producto["precio"] = $row["precio"];
            $producto["stock"] = $row["stock"];
            $producto["descripcion"] = $row["descripcion"];
            $producto["id_category"] = $row["id_category"];
            $producto["id_imagen"] = $row["id_imagen"];
        }
    }
    $stmt->close();
    //$conn->close();
    return $producto;
}
function actualizar_producto($conn, $nombre, $precio, $stock, $descripcion, $id)
{
    $conn = validar_conexion($conn);
    $sql = "UPDATE producto SET nombre=?,precio=?,stock=?,descripcion=?  WHERE id=?";
    //die($sql);

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("siisi", $nombre, $precio, $stock, $descripcion, $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function eliminar_producto($conn, $id)
{
    $conn = validar_conexion($conn);
    $sql = "DELETE  FROM producto WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_listado_productos_con_category($conn)
{
    $conn = validar_conexion($conn);
    $categorias = [];
    $sql = "SELECT P.*,C.nombre as category_nombre FROM producto P INNER JOIN categoria C ON P.id_category=C.id";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $categorias[$i]["id"] = $row["id"];
        $categorias[$i]["nombre"] = $row["nombre"];
        $categorias[$i]["precio"] = $row["precio"];
        $categorias[$i]["stock"] = $row["stock"];
        $categorias[$i]["descripcion"] = $row["descripcion"];
        $categorias[$i]["url_imagen"] = $row["url_imagen"];
        $categorias[$i]["id_category"] = $row["id_category"];
        $categorias[$i]["category_nombre"] = $row["category_nombre"];
        $i++;
    }

    //$conn->close();

    return $categorias;
}

function obtener_listado_productos($conn)
{
    $conn = validar_conexion($conn);
    $productos = [];
    $result = $conn->query("SELECT * FROM producto");

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $producto["id"] = $row["id"];
        $producto["nombre"] = $row["nombre"];
        $producto["precio"] = $row["precio"];
        $producto["stock"] = $row["stock"];
        $producto["descripcion"] = $row["descripcion"];
        $producto["id_category"] = $row["id_category"];
        $i++;
    }

    //$conn->close();

    return $productos;
}

function obtener_listado_roles($conn)
{
    $conn = validar_conexion($conn);
    $roles = [];
    $sql = "SELECT id,nombre_rol FROM rol ";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $roles[$i]["id"] = $row["id"];
        $roles[$i]["nombre_rol"] = $row["nombre_rol"];
        $i++;
    }

    //$conn->close();

    return $roles;
}
function obtener_roless($conn, $id)
{
    $conn = validar_conexion($conn);
    $rol = [];
    $sql = "SELECT * FROM rol WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $row = $stmt_result->fetch_assoc();
            $rol["id"] = $row["id"];
            $rol["nombre_rol"] = $row["nombre_rol"];
        }
    }

    $stmt->close();
    //$conn->close();
    return $rol;
}
function crear_rol($conn, $nombre_rol)
{

    //var_dump($conn); die();

    $conn = validar_conexion($conn);
    $sql = "INSERT INTO rol (nombre_rol) VALUES (?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $nombre_rol);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_rol($conn)
{
    $conn = validar_conexion($conn);
    $rol = [];
    $result = $conn->query("SELECT * FROM rol");

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $rol[$i]["id"] = $row["id"];
        $rol[$i]["nombre_rol"] = $row["nombre_rol"];

        $i++;
    }

    //$conn->close();

    return $rol;
}

function eliminar_rol($conn, $id)
{
    $conn = validar_conexion($conn);
    $sql = "DELETE  FROM rol WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function actualizar_rol($conn, $id, $nombre_rol)
{
    $conn = validar_conexion($conn);
    $sql = "UPDATE rol SET nombre_rol=? WHERE id=?";
    //die($sql);

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("si", $nombre_rol, $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    $stmt->close();
    //$conn->close();
    return $result;
}

function get_last_url_segment()
{
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    return $uri_segments[count($uri_segments) - 1] == '' ? '/' : $uri_segments[count($uri_segments) - 1];
}
function crear_categoria($conn, $nombre)
{

    //var_dump($conn); die();

    $conn = validar_conexion($conn);
    $sql = "INSERT INTO categoria (nombre) VALUES (?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $nombre);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_listado_categorias($conn)
{
    $conn = validar_conexion($conn);
    $categorias = [];
    $sql = "SELECT id,nombre FROM categoria ";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $categorias[$i]["id"] = $row["id"];
        $categorias[$i]["nombre"] = $row["nombre"];
        $i++;
    }

    //$conn->close();

    return $categorias;
}


function obtener_categoria($conn, $id)
{
    $conn = validar_conexion($conn);
    $categorias = [];
    $sql = "SELECT * FROM categoria WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $row = $stmt_result->fetch_assoc();
            $categorias["id"] = $row["id"];
            $categorias["nombre"] = $row["nombre"];
        }
    }

    $stmt->close();
    //$conn->close();
    return $categorias;
}

function actualizar_categoria($conn, $id, $nombre)
{
    $conn = validar_conexion($conn);
    $sql = "UPDATE categoria SET nombre=? WHERE id=?";
    //die($sql);

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("si", $nombre, $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    $stmt->close();
    //$conn->close();
    return $result;
}
function obtener_catego($conn)
{
    $conn = validar_conexion($conn);
    $categorias = [];
    $result = $conn->query("SELECT * FROM rol");

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $categorias[$i]["id"] = $row["id"];
        $categorias[$i]["nombre_rol"] = $row["nombre_rol"];

        $i++;
    }

    //$conn->close();

    return $categorias;
}
function eliminar_categoria($conn, $id)
{
    $conn = validar_conexion($conn);
    $sql = "DELETE  FROM categoria WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}


function crear_imagen_producto($conn, $url_imagen)
{
    $conn = validar_conexion($conn);
    $sql = "INSERT INTO imagenes_productos (url_imagen) VALUES (?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $url_imagen);

        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}

function obtener_listado_url_productos($conn)
{
    $conn = validar_conexion($conn);
    $url_productos = [];
    $sql = "SELECT * FROM imagenes_productos";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $url_productos[$i]["id"] = $row["id"];
        $url_productos[$i]["url_imagen"] = $row["url_imagen"];
        $i++;
    }

    //$conn->close();

    return $url_productos;
}

function eliminar_url_imagen($conn, $id)
{
    $conn = validar_conexion($conn);
    $sql = "DELETE  FROM imagenes_productos WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
        $stmt->execute();
        $result = TRUE;
    } else {
        $result = FALSE;
    }

    $stmt->close();
    //$conn->close();
    return $result;
}

function obtener_listado_url_imagen($conn)
{
    $conn = validar_conexion($conn);
    $categorias = [];
    $sql = "SELECT id,url_imagen FROM imagenes_productos";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $categorias[$i]["id"] = $row["id"];
        $categorias[$i]["url_imagen"] = $row["url_imagen"];
        $i++;
    }

    //$conn->close();

    return $categorias;
}

function obtener_permisos_rol($conn, $rol_id)
{

    $conn = validar_conexion($conn);
    //$conn = $GLOBALS['conn'];    

    $permisos = NULL;
    $sql = "SELECT P.* FROM permisos P INNER JOIN rol_permisos RP ON RP.permisos_id = P.id " .
        "WHERE RP.rol_id = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("i", $rol_id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $permisos = [];

            $i = 0;
            while ($row = $stmt_result->fetch_assoc()) {
                $permisos['nombre'][$i] = $row["nombre"];
                $permisos['script'][$i] = $row["script"];
                $permisos['id'][$i] = $row["id"];
                $i++;
            }
        } else {
            $permisos = NULL;
        }
    }

    $stmt->close();
    //$conn->close();
    return $permisos;
}


function validar_usuario($conn, $correo, $contrasena)
{
    $conn = validar_conexion($conn);
    $contrasena = hash('sha256', $contrasena);
    $datosUsuario = NULL;
    $sql = "SELECT U.*, R.nombre_rol AS rol_nombre FROM usuario U " .
        "INNER JOIN rol R ON U.rol_id = R.id " .
        "WHERE (correo=? AND contrasena=?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            //echo '$stmt_result->num_rows > 0<br>';
            $datosUsuario = [];
            $row = $stmt_result->fetch_assoc();
            $datosUsuario["id"] = $row["id"];
            $datosUsuario["nombre"] = $row["nombre"];
            $datosUsuario["apellido"] = $row["apellido"];
            $datosUsuario["correo"] = $row["correo"];
            $datosUsuario["rol_id"] = $row["rol_id"];
            $datosUsuario["rol_nombre"] = $row["rol_nombre"];
            $datosUsuario["permisos"] = obtener_permisos_rol($conn, $row["rol_id"]);
        } else {
            $datosUsuario = NULL;
        }
    }

    $stmt->close();
    //$conn->close();
    return $datosUsuario;
}

function tiene_permiso($conn, $usuario_id, $permiso)
{
    $conn = validar_conexion($conn);

    $sql = "SELECT P.* FROM permisos P INNER JOIN rol_permisos RP ON RP.permiso_id = P.id 
    INNER JOIN rol R on RP.rol_id = R.id INNER JOIN usuarios U ON R.id = U.rol_id 
    WHERE U.id = ? AND P.nombre = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("is", $usuario_id, $permiso);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $stmt->close();
            return TRUE;
        }
        return FALSE;
    }
}

function tiene_permiso_sesion($permiso)
{
    session_start();
    return in_array($permiso, $_SESSION['permisos']["nombre"]);
}

function puede_ejecutar_script($conn, $usuario_id, $script)
{
    $conn = validar_conexion($conn);

    $sql = "SELECT P.* FROM permisos P INNER JOIN rol_permisos RP ON RP.permiso_id = P.id 
    INNER JOIN rol R on RP.rol_id = R.id INNER JOIN usuarios U ON R.id = U.rol_id 
    WHERE U.id = ? AND P.script = ?";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param("is", $usuario_id, $script);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $stmt->close();
            return TRUE;
        }

        return FALSE;
    }
}

function puede_ejecutar_script_sesion($script)
{
    session_start();
    return in_array($script, $_SESSION['permisos']["script"]);
}
