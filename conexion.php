<?php
    //conectamos Con el servidor
    $host ="localhost";
    $dbname = "exsci";
    $user ="test_us";
    $pass ="123456";

    $conectar = mysqli_connect($host, $user, $pass, $dbname)
        or die( "No se logró conectar al base de datos con éxito: ".mysqli_connect_error() );

    mysqli_set_charset($conectar, "utf8");

    // echo"Conexión con base de datos exitosa";
?>