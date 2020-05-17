<?php
    $server = "localhost";
    $user = "test";
    $pass = "1234";
    $db = "exsci";

    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        die("La conexion ha fallado". $conexion->connect_errno);
    }
?>