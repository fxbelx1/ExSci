<?php

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $correo = $_POST['correo'];
        $nickname = $_POST['nickname'];
        $contra = $_POST['contra'];

        include("conexion.php");
    }else{
        echo "Los datos no llegaron correctamente.";
    }

?>