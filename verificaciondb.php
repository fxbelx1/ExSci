<?php
    require 'conexion.php'; 
    session_start();

    $usuario = $_POST['nickname'];
    $contrasena = $_POST['contra'];

    $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE nickus = '$usuario' and passus = '$contrasena' ");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        $_SESSION['username'] = $usuario;
        $query = mysqli_query($conexion, "SELECT expmate, expfisica, expquim, expbio FROM usuario WHERE nickus = '$usuario'");
        while($datos = mysqli_fetch_array($query)){
            $expmate = $datos['expmate'];
            $expfisica = $datos['expfisica'];
            $expquim = $datos['expquim'];
            $expbio = $datos['expbio'];
        }
        
        header("Location: menu.php"); 

    }
    else if($nr == 0) {
        header("Location: login.php");
    }
?>