<?php
    session_start();
    $usuario = $_SESSION['username'];
    include($_SERVER['DOCUMENT_ROOT'].'/exsci/conexion.php'); 

///////////////EXTRAER 'EXPMATERIA' DEL USUARIO/////////////////

    $queryusr = mysqli_query($conexion, " SELECT * FROM usuario WHERE nickus='$usuario' ");
    $querypreg = mysqli_query($conexion, " SELECT idp, respcorr, puntosp FROM pregunta ");

    while( $datosus = mysqli_fetch_array($queryusr) ){
        $expquim = $datosus['expquim'];
    }

    while( $datospreg = mysqli_fetch_array($querypreg) ){
        $idpreg = $datospreg['idp'];
        $exppreg = $datospreg['puntosp'];
    }

////////////////////////////////////////////////////////////////

    $r1 = $_POST['p1'];
    $r2 = $_POST['p2'];
    $r3 = $_POST['p3'];
    $r4 = $_POST['p4'];
    $expquizz = 0;

    if($r1 == 'c' && $r1 != NULL){
        $expquim = $expquim + 25;
        $expquizz = $expquizz + 25;
    }
    if($r2 == 'b' && $r2 != NULL){
        $expquim = $expquim + 25;
        $expquizz = $expquizz + 25;
    }
    if($r3 == 'a' && $r3 != NULL){
        $expquim = $expquim + 25;
        $expquizz = $expquizz + 25;
    }
    if($r4 == 'b' && $r4 != NULL){
        $expquim = $expquim + 25;
        $expquizz = $expquizz + 25;
    }

    $exp = "UPDATE usuario SET expquim='$expquim' WHERE nickus='$usuario'"; //SE ACTUALIZA EL CAMPO 'EXPMQUIM' donde $usuario
    $res = mysqli_query($conexion, $exp);   //SE SINCRONIZA LA BASE DE DATOS
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">  
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css'>
        <link rel="stylesheet" href="/exsci/quizz/disenoQuizz.css">

        <title>ExSci - Quizz [Física]</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">   <h1 style="font-family: 'Bebas Neue', cursive;">RESULTADOS</h1> </div>
                <div class="col">   <h1 style="font-family: 'Bebas Neue', cursive; text-align: right"> <?= $usuario ?> </h1>  </div>
            </div>

            <div class="row">
                <div class="col" id="box">
                    <div class="resultados" id="resultados">
                        <p>
                            Tus resultados son los siguientes: <br>
                            Puntos obtenidos: <?= $expquizz?>/100
                        </p>
                        <p style="text-align: center;" ><a href="/exsci/menu.php"><button type="button" class="btn btn-dark">Regresar al menú</button></a></p>
                    </div>
                </div>
            </div>
            <div class="row"><br><br></div>
        </div>

        <script src="/ExSci/javascript.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>