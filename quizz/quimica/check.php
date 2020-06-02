<?php
    session_start();
    $usuario = $_SESSION['username'];
    include($_SERVER['DOCUMENT_ROOT'].'/exsci/conexion.php'); 

    $queryusr = mysqli_query($conexion, " SELECT * FROM usuario WHERE nickus='$usuario' ");     //OBTENCIÓN DE LOS TODOS LOS CAMPOS DE LA TABLA usuario
    $querypreg = mysqli_query($conexion, " SELECT idp, respcorr, puntosp FROM pregunta ");      //OBTENCIÓN DE LOS CAMPOS idp, respcorr, puntosp DE LA TABLA pregunta

    while( $datosus = mysqli_fetch_array($queryusr) ){
        $expquim = $datosus['expquim'];
    }

    $expquizz = 0;  //EXPERIENCIA OBTENIDA EN EL QUIZZ
    $r = 1;     //CONTADOR DE PREGUNTA

    while ($row = mysqli_fetch_assoc($querypreg)) {
        $respus = $_POST['p'.$r];
        if($row["idp"] == $r && $row["respcorr"] == $respus){
            $expquim = $expquim + $row["puntosp"];
            $expquizz = $expquizz + $row["puntosp"];
        }
        $r = $r + 1;
        if($r == 5){
            break;
        }
    }

    $exp = "UPDATE usuario SET expquim='$expquim' WHERE nickus='$usuario'"; //SE ACTUALIZA EL CAMPO expquim DE LA TABLA usuario DONDE EL NOMBRE DEL USUARIO SEA IGUAL AL CAMPO nickus
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

        <title>ExSci - Quizz [Química]</title>
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