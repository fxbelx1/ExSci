<?php
    include("conexion.php"); 

    if(isset($_POST['listo'])){
        if(isset($_POST['p1']) && $_POST['p1'] == '3')
            header("Location: menu.php");
        else
            header("Location: index.html");
    }   
?>