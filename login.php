<?php

    $nickname = $POST['nickname'];
    $usuario = $POST ['contra'];

    $nickname = stripcslashes($nickname);
    $contra = stripcslashes($contra);
    $nickname = mysql_real_escape_string($nickname);
    $contra = mysql_real_escape_string($contra);

    $host ="localhost";
    $dbname = "exsci";
    $user ="test_us";
    $pass ="123456";

    $conectar = mysqli_connect($host, $user, $pass, $dbname)
        or die( "No se logró conectar al base de datos con éxito: ".mysqli_connect_error() );

    mysqli_set_charset($conectar, "utf8");

    $result = mysql_query("select * from ExSci where username = '$nickname' and password = '$contra");
                or die();
    $row = mysql_fetch_array($result);

    if( $row['nickname'] == $nickname && $row['contra'] == $contra ){
        echo "Sesión iniciada correctamente.";
    } else{
        echo "Error en los datos.";
    }

?>