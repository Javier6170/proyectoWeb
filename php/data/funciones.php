<?php 

function obtener_listado_usuarios($conn){
    $usuarios = [];
    $result = $conn->query("SELECT * FROM users");

    $i=0;
    while($row=$result->fetch_assoc()){
        $usuarios[$i]["nombre"]=$row["nombre"];
        $usuarios[$i]["correo"]=$row["correo"];
        $usuarios[$i]["password"]=$row["password"];
        $i++;
    }

    $conn->close();
    
    return $usuarios;
}

function crear_usuario($conn, $nombre, $correo, $password){

    $cadena_insert = "'$nombre','$correo','$password'";

    $sql = "INSERT INTO users (nombre, correo, password) VALUES "
     ."($cadena_insert)";

    $result = NULL;
                
    if ($conn->query($sql) === TRUE) {
        $result = TRUE;
    } else {
            $result = FALSE;
    }
    return $result;
}
?>

