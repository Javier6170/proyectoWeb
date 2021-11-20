<?php
    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function validar_conexion($conn) {
        if ($conn == NULL) {
            $conn = $GLOBALS['connection'];
        }
        
        return $conn;
    }
    function crear_usuario($conn, $nombre, $correo, $nombre_usuario, $contrasena, $rol_id) {
        //$_POST['nombres'],$_POST['correo'],$_POST['nombre_usuario'],$_POST['contrasena'],$_POST['rol_id']
        $contrasena = hash("sha256",$contrasena);

        $conn = validar_conexion($conn);
        $sql = "INSERT INTO usuarios (nombres,correo,nombre_usuario,contrasena,rol_id) VALUES (?,?,?,?,?)";
 
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssssi", $nombre,$correo,$nombre_usuario,$contrasena,$rol_id);
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
