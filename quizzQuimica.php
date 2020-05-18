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
                    <div id="instrucciones" style="display: inline">
                        <p>En esta sección se le mostrarán preguntas junto con tres posibles respuestas. De acuerdo a su conocimiento deberá seleccionar la respuesta que usted considere correcta.</p>
                        <p><strong>EJEMPLO:</strong></p>
                        
                        <div style="border: solid #3a3939 1px;" >
                            <p>¿Qué número atómico es el <strong>(P)Fósforo</strong>?</p>
                            <p>
                                <div class="form-check" id="formz">
                                    &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios1">92</label>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" checked disabled> <label class="form-check-label" for="exampleRadios2">15</label>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios3">3</label>
                                </div>
                            </p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item disabled">
                                        <a class="page-link disabled" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <button type="button" class="btn btn-secondary" onclick="juego();">Entendido</button>
                        </div>
                    </div>

                    <div id="preguntas" style="display: none;">
                        <div id="pregunta1"style="display: inline;">
                            <p>Son las propiedades que varían de forma gradual al movernos en un determinado sentido en el sistema periódico.</p>
                            <div class="form-check" id="formz">
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1r1" > <label class="form-check-label" for="exampleRadios1">Propiedades Cualitativas</label>
                                <br>
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1r2" > <label class="form-check-label" for="exampleRadios2">Propiedades Cuantitativas</label>
                                <br>
                                &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1r3" > <label class="form-check-label" for="exampleRadios3">Propiedades Periódicas</label>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#2">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#3">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#4">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#5">5</a></li>
                                        <a class="page-link" href="#6">Next</a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>

        <script src="preguntas.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>