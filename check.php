<?php
    session_start();
    $usuario = $_SESSION['username'];
    include("conexion.php"); 

    //EXTRAR 'EXPMATERIA' DEL USUARIO

    $sum = 0;
    $r1 = $_POST['p1'];
    $r2 = $_POST['p2'];
    $r3 = $_POST['p3'];
    $r4 = $_POST['p4'];

    echo "Bienvenido, $usuario<br>";

    echo $r1, $r2. $r3, $r4, "<br>";


    if($r1 == 'c'){
        echo "1. Correcta.<br>";
        $sum = $sum + 25;
    }else{
        echo "1. Incorrecta.<br>";
    }
    if($r2 == 'b'){
        echo "2. Correcta.<br>";
        $sum = $sum + 25;
    }else{
        echo "2. Incorrecta.<br>";
    }
    if($r3 == 'a'){
        echo "3. Correcta.<br>";
        $sum = $sum + 25;
    }else{
        echo "3. Incorrecta.<br>";
    }
    if($r4 == 'b'){
        echo "4. Correcta.<br>";
        $sum = $sum + 25;
    }else{
        echo "4. Incorrecta.<br>";
    }

    echo "Un total de: $sum";   //SE SUMA LA 'EXPMATERIA' DEL USUARIO

    $exp = "UPDATE usuario SET expquim='$sum' WHERE nickus='$usuario'"; //SE ACTUALIZA EL CAMPO 'EXPMATERIA'
    $res = mysqli_query($conexion, $exp);   //SE SINCRONIZA LA BASE DE DATOS

?>