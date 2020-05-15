<?php

    session_start();
    $usuario = $_SESSION['username'];
    echo "<h1>BIENVENIDO $usuario </h1>";

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
            <p style= "font-family: 'Baloo Paaji 2', cursive;">
                A continuación podras seleccionar entre los multiples niveles y materias que ExSci tiene para ti ... 
            </p>
        </div>
        <br>
        <div class="dropdown" style="float:left; left:300px;">
            <button class="dropbtn">Niveles</button>
            <div class="dropdown-content" style="left:0;">
              <a href="#">Fácil</a>
              <a href="#">Medio</a>
              <a href="#">Difícil</a>
            </div>
          </div>
          
          <div class="dropdown" style="float:right; right:300px">
            <button class="dropbtn">Asignaturas</button>
            <div class="dropdown-content" style="left:0;">
              <a href="#">Matematicas</a>
              <a href="#">Fisica</a>
              <a href="#">Español</a>
            </div>
          </div>
    </body>
</html>