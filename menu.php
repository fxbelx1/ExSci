<
<?php

    session_start();
    $usuario = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>menu</title>
        <link rel="stylesheet" href="diseño.css">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">  
    </head>

    <body class="bodymenu">
        <header id="header2">
            <br>
            <img src="logo3.png" alt="Logo de ExSci" class="img-fluid" alt="Responsive image">
            <h1 style="font-family: 'Bebas Neue', cursive;">¡Hola <?= $usuario ?>!</h1>
            <br>
            <nav class = "menun">
                <a class = "menua" href="#" id="off">Comenzar a Jugar</a>
                <a class ="menua" href="#" >Tutorial</a>
                <a class = "menua" href="#" id="off">Cerrar Sesion</a>
            </nav>
        </header>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="estadisticas">
            <br><br><br><br>
            <p style= "font-family: 'Baloo Paaji 2', cursive;">Tus estadisticas</p>
        </div>
        <br>
        <div class="test">
        <div class="dropdown">
        <br><br><br><br>
        <p style= "font-family: 'Baloo Paaji 2', cursive;">Selecciona una de las asignaturas</p>  
        <button class="dropbtn">Asignaturas</button>
            <div class="dropdown-content" style="left:0;">
                <a href="#">Matemáticas</a>
                <a href="#">Física</a>
                <a href="#">Biología</a>
                <a href="#">Química</a>
            </div>
        </div>
        </div>

        <div id="tutorial">
            <br><br><br><br>
            <p style= "font-family: 'Baloo Paaji 2', cursive;">Tutorial</p> 
        </div>
    </body>
</html>