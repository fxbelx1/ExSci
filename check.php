<?php
    include("conexion.php"); 
    session_start();
    $usuario = $_SESSION['username'];

    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];

    $r1 = mqsqli_query($conexion, "SELECT * FROM pregunta WHERE ");

    if($p1[0] == 'c'){
        echo "1. Correcta.(".$p1[0].")<br>";
    }else{
        echo "1. Incorrecta.<br>";
    }

    for($i=0; $i < count($p1); $i++){
        echo "1. Selected " . $p1[$i] . "<br/>";
    }
    for($i=0; $i < count($p2); $i++){
        echo "2. Selected " . $p2[$i] . "<br/>";
    }
    for($i=0; $i < count($p3); $i++){
        echo "3. Selected " . $p3[$i] . "<br/>";
    }
    for($i=0; $i < count($p4); $i++){
        echo "4. Selected " . $p4[$i] . "<br/>";
    }


?>