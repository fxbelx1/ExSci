<?php
    
    require 'conexion.php'; 
    session_start();

    $usuario = $_POST['nickname'];
    $contrasena = $_POST['contra'];

<<<<<<< HEAD
    $query = mysqli_query($conexion, " SELECT * FROM usuario WHERE nickus = '$usuario' and passus = '$contrasena' ");
=======
    $query = mysqli_query($conexion, " SELECT * FROM usuario WHERE nicknus = '$usuario' and passus = '$contrasena' ");
>>>>>>> 294bf2d820fbb7d26b9dd1c7c88b2a7689bd7e3a
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        $_SESSION['username'] = $usuario;
        header("Location: menu.php");
    }
    else if($nr == 0) {
        header("Location: login.php");
    }
?>