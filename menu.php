<?php
    
    require 'conexion.php'; 
    $experiencia;

    session_start();
    $usuario = $_SESSION['username'];
    if(!isset($usuario)){
        header("location: login.php");
    }

    if(isset($_POST['salir'])){
        session_destroy();
        header("location: login.php");
    } 

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
    <form action="menu.php" method="POST">
        <header id="header2">
            <img src="img/logo3.png" alt="Logo de ExSci" class="img-fluid" alt="Responsive image">
            <h1 style="font-family: 'Bebas Neue', cursive;">¡Hola, <?= $usuario ?>!</h1>
            <input value="cerrar sesion" type="submit" style="font-family: 'Bebas Neue', cursive;" href="#" id="off" name="salir">
            <nav class = "menun">
                <a class = "menua" href="#est" >Estadisticas</a>    
                <a class = "menua" href="#caj" >Comenzar a Jugar</a>
                <a class ="menua" href="#tut" >Tutorial</a>
            </nav>
        </header>
    </form>
    <body class="bodymenu">
        <div class="container2">
            <h5><a name="est">.</a></h5>
            <br><br><br><br><br><br><br><br><br><br>
            <p id="pmenu" style="font-family: 'Bebas Neue', cursive;">TUS ESTADISTICAS</p>

            <!-- progreso matematicas -->
            <div id="progresscontainerm">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Matematicas</p>
                    <div id="progresscolor">
                        <div id="progressm"></div>
                    </div>
            </div>

            <!-- progreso fisica -->
            <div id="progresscontainerf">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Fisica</p>
                    <div id="progresscolor">
                        <div id="progressf"></div>
                    </div>
            </div>

            <!-- progreso quimica -->
            <div id="progresscontainerq">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Quimica</p>
                    <div id="progresscolor">
                        <div id="progressq"></div>
                    </div>
            </div>

            <!-- progreso biologia -->
            <div id="progresscontainerb">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Biologia</p>
                    <div id="progresscolor">
                        <div id="progressb"></div>
                    </div>

            </div>

        </div>

            <script>
                    // barra de experiencia matematicas
                    var m = document.getElementById('progressm');
                    //* para sacar el porcentaje: son 20 preguntas con valor de 25 puntos (20x25)=500
                    //* 500 = 100%, asi que... (nivelmate x100)/500 = porcentaje :) 
                    var width = 20;
                    m.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia fisica
                    var f = document.getElementById('progressf');
                    var width = 0;
                    f.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia quimica
                    var q = document.getElementById('progressq');
                    var width = 0;
                    q.style.width =width + '%';
                    var id = setInterval(frame, 100);

                    // barra de experiencia biologia
                    var b = document.getElementById('progressb');
                    var width = 0;
                    b.style.width =width + '%';
                    var id = setInterval(frame, 100);
                
            </script>

            <!--menu desplegable-->
            <div class="dropdownmenu">
                <h3><a name="caj">.</a></h3>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <p id="ddmenu" style="font-family: 'Bebas Neue', cursive;">
                SELECCIONA UNA DE LAS OPCIONES
                </p>
                <div class="dropdown">
                    <button class="dropbtn">Asignaturas</button>
                        <div class="dropdown-content" style="left:0;">
                            <a href="quizz">Matemáticas</a>
                            <a href="quizz/fisica/nivel1.php">Física</a>
                            <a href="#">Biología</a>
                            <a href="quizz/quimica/nivel1.php">Química</a>
                        </div>
                </div>
            </div>
            <!--fin de menu desplegable-->

            <!--espacio para tutorial-->
            <div class="tutorial">
                <h4><a name="tut">.</a></h4>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <p id="pmenu" style="font-family: 'Bebas Neue', cursive;">TUTORIAL</p>
            </div>
            <!--fin del espacio para tutorial-->
    </body>
</html>