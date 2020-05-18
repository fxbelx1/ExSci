<?php
   include("conexion.php"); 

   if(isset($_POST['comenzar'])){
        if(strlen($_POST['correo']) >= 1 && strlen($_POST['nickname']) >= 1 && strlen($_POST['contra']) >= 1){
            $correo = trim($_POST['correo']);
            $nickn = trim($_POST['nickname']);
            $pass = trim($_POST['contra']);

<<<<<<< HEAD
            $consulta = "INSERT INTO usuario(nickus, correous, passus, nivelmate, nivelfisica, nivelquim, nivelbio) 
=======
            $consulta = "INSERT INTO usuario(nicknus, correous, passus, nivelmate, nivelfisica, nivelquim, nivelbio) 
>>>>>>> 294bf2d820fbb7d26b9dd1c7c88b2a7689bd7e3a
                        VALUES ('$nickn','$correo','$pass',0,0,0,0)";

            $resultado = mysqli_query($conexion,$consulta);
        }
        header("Location: login.php");
    }
?>