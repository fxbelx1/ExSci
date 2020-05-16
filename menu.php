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
            <nav class = "menun">
                <a class ="menua" href="#" id="tutorial">Tutorial</a>
                <a class = "menua" href="#" id="est">Estadisticas</a>
                <a class = "menua" href="#" id="off">Cerrar Sesion</a>
            </nav>
        </header>
        <br>
        <div id="divi" class="imag">
            <img id="menuimg" src="exsci_logo2.png" alt="Logo 2 de ExSci">
        </div>
        <div class="text">
            <p style= "font-family: 'Baloo Paaji 2', cursive;">BIENVENID@ <?= $usuario ?></p>
            <p style= "font-family: 'Baloo Paaji 2', cursive;">
                A continuación podras seleccionar entre las multiples asignaturas que ExSci tiene para ti ... 
            </p>
        </div>
        <br>
        <div class="test">
        <div class="dropdown">
        <button class="dropbtn">Asignaturas</button>
            <div class="dropdown-content" style="left:0;">
                <a href="#">Matemáticas</a>
                <a href="#">Física</a>
                <a href="#">Biología</a>
                <a href="#">Química</a>
            </div>
        </div>
        </div>
        <br>
        <div class = 'text2'>
            <p style ="font-family: 'Baloo Paaji 2', cursive;">"! Acepta el reto ¡"</p>
        </div>
    </body>
</html>