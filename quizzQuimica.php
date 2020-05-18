<?php
    session_start();
    $usuario = $_SESSION['username'];
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
        <link rel="stylesheet" href="disenoQuizz.css">

        <title>ExSci - Quizz [Química]</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">   <h1 style="font-family: 'Bebas Neue', cursive;">Responde las preguntas</h1> </div>
                <div class="col">   <h1 style="font-family: 'Bebas Neue', cursive; text-align: right"> <?= $usuario ?> </h1>  </div>
            </div>

            <div class="row">
                <div class="col" id="box">
                    <p class="cabeza"><strong>QUÍMICA</strong></p>
                    <p>En esta sección se le mostrarán preguntas junto con tres posibles respuestas. De acuerdo a su conocimiento deberá seleccionar la respuesta que usted considere correcta.</p>
                    <p><strong>EJEMPLO:</strong></p>
                    
                    <div style="border: solid #3a3939 1px;">
                        <p>El elemento químico <strong>(P)Fósforo</strong> tiene un número atómico de...</p>
                        <p>
                            <div class="form-check" id="formz">
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled> <label class="form-check-label" for="exampleRadios1">92</label>
                                <br>
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked disabled> <label class="form-check-label" for="exampleRadios2">15</label>
                                <br>
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> <label class="form-check-label" for="exampleRadios3">3</label>
                            </div>
                        </p>
                        <p style="text-align: center;"><button type="button" class="btn btn-dark" disabled>Atras</button> &nbsp; <button type="button" class="btn btn-dark" disabled>Siguiente</button></p>
                        
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <button type="button" class="btn btn-secondary">Entendido</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>