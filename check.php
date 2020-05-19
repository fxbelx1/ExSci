<?php
    include("conexion.php"); 
    session_start();
    $usuario = $_SESSION['username'];

    $r1 = $_POST['p1'];
    $r2 = $_POST['p2'];
    $r3 = $_POST['p3'];
    $r4 = $_POST['p4'];

    $sql = "SELECT idp, respcorr FROM pregunta";
    $result = mysqli_query($conexion, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){

    }else{
        echo "no";
    }

    echo $row['idp'];

    if($r1[0] == 'c'){
        echo "1. Correcta.(".$p1[0].")<br>";
    }else{
        echo "1. Incorrecta.<br>";
    }

    for($i=0; $i < count($r1); $i++){
        echo "1. Selected " . $r1[$i] . "<br/>";
    }
    for($i=0; $i < count($r2); $i++){
        echo "2. Selected " . $r2[$i] . "<br/>";
    }
    for($i=0; $i < count($r3); $i++){
        echo "3. Selected " . $r3[$i] . "<br/>";
    }
    for($i=0; $i < count($r4); $i++){
        echo "4. Selected " . $r4[$i] . "<br/>";
    }


?>