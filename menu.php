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
            <img src="img/logo3.png" alt="Logo de ExSci" class="img-fluid" alt="Responsive image">
            <h1 style="font-family: 'Bebas Neue', cursive;">¡Hola, <?= $usuario ?>!</h1>
            <nav class = "menun">
                <a class = "menua" href="#" id="off">Comenzar a Jugar</a>
                <a class ="menua" href="#" >Tutorial</a>
                <a class = "menua" href="#" id="off">Cerrar Sesion</a>
            </nav>
        </header>
    <body class="bodymenu">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <p id="pmenu" style="font-family: 'Bebas Neue', cursive;">TUS ESTADISTICAS</p>

            <!-- progreso matematicas -->
            <div id="progresscontainerm">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Matematicas</p>
                    <div id="progresscolor">
                        <div id="progressm"></div>
                    </div>
                    <!--prueba-->
                <p style= "font-family: 'Baloo Paaji 2', cursive;">50%</p>
            </div>

            <!-- progreso fisica -->
            <div id="progresscontainerf">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Fisica</p>
                    <div id="progresscolor">
                        <div id="progressf"></div>
                    </div>
                    <!--prueba-->
                <p style= "font-family: 'Baloo Paaji 2', cursive;">30%</p>
            </div>

            <!-- progreso quimica -->
            <div id="progresscontainerq">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Quimica</p>
                    <div id="progresscolor">
                        <div id="progressq"></div>
                    </div>
                    <!--prueba-->
                <p style= "font-family: 'Baloo Paaji 2', cursive;">70%</p>
            </div>

            <!-- progreso biologia -->
            <div id="progresscontainerb">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Biologia</p>
                    <div id="progresscolor">
                        <div id="progressb"></div>
                    </div>
                    <!--prueba-->
                <p style= "font-family: 'Baloo Paaji 2', cursive;">100%</p>
            </div>

        </div>

            <script>
                    // barra de experiencia matematicas
                    var el = document.getElementById('progressm');
                    //* para sacar el porcentaje: son 20 preguntas con valor de 25 puntos (20x25)=500
                    //* 500 = 100%, asi que... (nivelmate x100)/500 = porcentaje :) 
                    var width = 50;
                    el.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia fisica
                    var el = document.getElementById('progressf');
                    var width = 30;
                    el.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia quimica
                    var el = document.getElementById('progressq');
                    var width = 70;
                    el.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia biologia
                    var el = document.getElementById('progressb');
                    var width = 100;
                    el.style.width =width + '%';
                    var id = setInterval(frame, 100);
                }
            </script>

            <!--menu desplegable-->
            <div class="dropdownmenu">
                <div class="dropdown">
                    <button class="dropbtn">Asignaturas</button>
                        <div class="dropdown-content" style="left:0;">
                            <a href="quizz">Matemáticas</a>
                            <a href="quizzFisica.php">Física</a>
                            <a href="#">Biología</a>
                            <a href="quizzQuimica.php">Química</a>
                        </div>
                </div>
            </div>
            <!--fin de menu desplegable-->

            <!--espacio para tutorial-->
            <div class="tutorial">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Tutorial</p>
            </div>
            <!--fin del espacio para tutorial-->
    </body>
</html>