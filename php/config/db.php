<?php
    $conn=new mysqli($DB_SERVERNAME,$DB_USERNAME,$DB_PASSWORD);
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
    $conn->select_db($DB_NAME);    
