<?php
    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function validar_conexion($conn) {
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
        while($row = $result->fetch_assoc()) {
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

    function crear_usuario($conn,$nombre,$apellido,$correo,$contrasena, $rol_id) {
        //$_POST['nombres'],$_POST['correo'],$_POST['nombre_usuario'],$_POST['contrasena'],$_POST['rol_id']
        $contrasena = hash("sha256",$contrasena);

        $conn = validar_conexion($conn);
        $sql = "INSERT INTO usuario (nombre,apellido,correo,contrasena,rol_id) VALUES (?,?,?,?,?)";
 
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssssi", $nombre,$apellido,$correo,$contrasena,$rol_id);
            
            $stmt->execute();    
            $result = TRUE;
        } else{
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
        while($row = $result->fetch_assoc()) {
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

    function obtener_usuario($conn, $id) {
        $conn = validar_conexion($conn);
        $usuario = [];
        $sql = "SELECT * FROM usuario WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
    
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
    
            if ($stmt_result->num_rows>0) {
                $row = $stmt_result->fetch_assoc();
                $usuario["id"] = $row["id"];
                $usuario["nombre"] = $row["nombre"];
                $usuario["apellido"] = $row["apellido"];
                $usuario["correo"] = $row["correo"];
                $usuario["contrasena"] = $row["contrasena"];
                $usuario["rol_id"] = $row["rol_id"]; 
              
            }
        }
    }

    function actualizar_usuario($conn,$nombre,$apellido,$correo,$contrasena,$id) {
        $conn = validar_conexion($conn);
        $sql = "UPDATE usuario SET nombre=?, apellido=?,correo=?,contrasena=?,nombre_usuario=? WHERE id=?";
        $contrasena = hash('sha256',$contrasena);
        //die($sql);
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssssi", $nombre,$apellido,$correo,$contrasena,$id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function eliminar_usuario($conn, $id) {
        $conn = validar_conexion($conn);
        $sql = "DELETE  FROM usuario WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function crear_producto($conn,$nombre, $precio, $stock, $descripcion,$id_category) {

        $conn = validar_conexion($conn);
        $sql = "INSERT INTO producto (nombre,precio,stock,descripcion,id_category) VALUES (?,?,?,?,?)";
 
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("siisi",$nombre, $precio, $stock, $descripcion,$id_category);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function obtener_producto($conn, $id) {
        $conn = validar_conexion($conn);
        $producto = [];
        $sql = "SELECT * FROM producto WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
    
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
    
            if ($stmt_result->num_rows>0) {
                $row = $stmt_result->fetch_assoc();
                $producto["id"] = $row["id"];
                $producto["nombre"] = $row["nombre"];
                $producto["precio"] = $row["precio"];
                $producto["stock"] = $row["stock"];
                $producto["descripcion"] = $row["descripcion"];
                $producto["id_category"] = $row["id_category"]; 
              
            }
        }
    }
    function actualizar_producto($conn,$nombre, $precio, $stock, $descripcion,$id) {
        $conn = validar_conexion($conn);
        $sql = "UPDATE producto SET nombre=?, apellido=?,stock=?,descripcion=?  WHERE id=?";
        //die($sql);
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("siisi", $nombre, $precio, $stock, $descripcion,$id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function eliminar_producto($conn, $id) {
        $conn = validar_conexion($conn);
        $sql = "DELETE  FROM producto WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function obtener_listado_productos_con_category($conn)
    {
        $conn = validar_conexion($conn);
        $usuarios = [];
        $sql = "SELECT P.*,C.nombre as category_nombre FROM producto U INNER JOIN categoria C ON P.id_category=U.id";
        $result = $conn->query($sql);
        
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $usuarios[$i]["id"] = $row["id"];
            $usuarios[$i]["nombre"] = $row["nombre"];
            $usuarios[$i]["precio"] = $row["precio"];
            $usuarios[$i]["stock"] = $row["stock"];
            $usuarios[$i]["descripcion"] = $row["descripcion"];
            $usuarios[$i]["id_category"] = $row["id_category"];
            $usuarios[$i]["category_nombre"] = $row["category_nombre"];
            $i++;
        }

        //$conn->close();
    
        return $usuarios;
    }
    function obtener_listado_productos($conn)
    {
        $conn = validar_conexion($conn);
        $productos = [];
        $result = $conn->query("SELECT * FROM producto");
        
        $i = 0;
        while($row = $result->fetch_assoc()) {
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
        while($row = $result->fetch_assoc()) {
            $roles[$i]["id"] = $row["id"];
            $roles[$i]["nombre_rol"] = $row["nombre_rol"];
            $i++;
        }

        //$conn->close();
    
        return $roles;
    }
    function obtener_roless($conn, $id) {
        $conn = validar_conexion($conn);
        $usuario = [];
        $sql = "SELECT * FROM rol WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
    
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
    
            if ($stmt_result->num_rows>0) {
                $row = $stmt_result->fetch_assoc();
                $usuario["id"] = $row["id"];
                $usuario["nombre_rol"] = $row["nombre_rol"];
            }
        }
    
        $stmt->close();
        //$conn->close();
        return $usuario;
    }
    function crear_rol($conn,$nombre_rol) {

        //var_dump($conn); die();

        $conn = validar_conexion($conn);
        $sql = "INSERT INTO rol (nombre_rol) VALUES (?)";
 
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s",$nombre_rol);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
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
        while($row = $result->fetch_assoc()) {
            $rol[$i]["id"] = $row["id"];
            $rol[$i]["nombre_rol"] = $row["nombre_rol"];

            $i++;
        }

        //$conn->close();
    
        return $rol;
    }

    function eliminar_rol($conn, $id) {
        $conn = validar_conexion($conn);
        $sql = "DELETE  FROM rol WHERE id = ?";
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        
        $stmt->close();
        //$conn->close();
        return $result;
    }
    function actualizar_rol($conn, $id,$nombre_rol) {
        $conn = validar_conexion($conn);
        $sql = "UPDATE rol SET nombre_rol=? WHERE id=?";
        //die($sql);
    
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("si", $nombre_rol,$id);
            /*
                i - integer
                d - double
                s - string
                b - BLOB
            */
            $stmt->execute();    
            $result = TRUE;
        } else{
            $result = FALSE;
        }
        $stmt->close();
        //$conn->close();
        return $result;
    }

    function get_last_url_segment() {
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        return $uri_segments[count($uri_segments)-1]==''?'/':$uri_segments[count($uri_segments)-1];
    }

