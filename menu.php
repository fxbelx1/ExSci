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
        <header id="header2">
            <img src="logo3.png" alt="Logo de ExSci" class="img-fluid" alt="Responsive image">
            <h1 style="font-family: 'Bebas Neue', cursive;">¡Hola, <?= $usuario ?>!</h1>
            <nav class = "menun">
                <a class = "menua" href="#" id="off">Comenzar a Jugar</a>
                <a class ="menua" href="#" >Tutorial</a>
                <a class = "menua" href="#" id="off">Cerrar Sesion</a>
            </nav>
        </header>
    <body class="bodymenu">
            <div class="maindiv"></div>
        <hr>

        <div class="container">
            <div id="progresscontainer">
                <div id="progress"></div>
            </div>
        </div>

        <button onclick="progress()">Click to progress</button>

            <script>
                function  progress(){
                    var el = document.getElementById('progress');
                    var width = 1;
                    var id = setInterval(frame, 100);

                    function frame(){
                        if(width >= 50){
                            clearInterval(id);
                        }else{
                            width++;
                            el.style.width = width + '%';
                        }
                    }
                }
            </script>

            <div class= "text1">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Selecciona una de las asignaturas</p>  
            </div>
            <!--menu desplegable-->
            <div class="dropdownmenu">
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
            <!--fin de menu desplegable-->
        <hr>
            <div class = 'text2'>
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Recuerda que cada materia tiene un nuevo reto para ti</p>
            </div>
            <br>
        <hr>
            <!--espacio para tutorial-->
            <div class="tutorial">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Tutorial</p>
            </div>
            <!--fin del espacio para tutorial-->
    </body>
</html>