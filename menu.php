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
            <img src="/exsci/img/logo3.png" alt="Logo de ExSci" class="img-fluid" alt="Responsive image">
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
        <br><br><br><br><br><br><br><br><br>
            <p id="pmenu" style="font-family: 'Bebas Neue', cursive;">TUS ESTADISTICAS</p>

            <div id="progresscontainerm">
                <p style= "font-family: 'Baloo Paaji 2', cursive;">Matematicas</p>
                    <div id="progresscolor">
                        <div id="progressm"></div>
                    </div>
                    <!--prueba-->
                <p style= "font-family: 'Baloo Paaji 2', cursive;">50%</p>
            </div>
        </div>

        <button onclick="progress()">Click to progress</button>

            <script>
                function  progress(){
                    var el = document.getElementById('progress');
                    var width = 1;
                    var id = setInterval(frame, 100);

                    function frame(){
                        if(width >= 100){
                            clearInterval(id);
                        }else{
                            width++;
                            el.style.width =width + '%';
                        }
                    }
                }
            </script>

            <!--menu desplegable-->
            <div class="dropdownmenu">
                <div class="dropdown">
                    <button class="dropbtn">Asignaturas</button>
                        <div class="dropdown-content" style="left:0;">
                            <a href="quizz">Matemáticas</a>
                            <a href="/fisica/quizzFisica.php">Física</a>
                            <a href="#">Biología</a>
                            <a href="/exsci/quimica/quizzQuimica.php">Química</a>
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