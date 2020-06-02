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
        <link rel="stylesheet" href="/exsci/quizz/disenoQuizz.css">

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
                            <ol>
                                <li>
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
                                </li>
                                <li>
                                    <p>Pregunta 2...</p>
                                    <p>
                                        <div class="form-check" id="formz">
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios1">Respuesta a</label>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" checked disabled> <label class="form-check-label" for="exampleRadios2">Respuesta b</label>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios3">Respuesta c</label>
                                        </div>
                                    </p>
                                </li>
                                <li>
                                <p>Pregunta 3...</p>
                                </li>
                            </ol>
                            
                            <p style="text-align: center;"><button type="button" class="btn btn-success disabled">¡LISTO!</button></p>
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <button type="button" class="btn btn-secondary" onclick="entendidobtn();">Entendido</button>
                        </div>
                    </div>

                    <div id="preguntas" style="display: none;">
                        <div id="preguntas14 form-check"style="display: inline;"id="formz">
                            <form action="/exsci/quizz/quimica/check.php" method="POST">
                                <ol>
                                    <li>
                                        <p>Son las propiedades que varían de forma gradual al movernos en un determinado sentido en el sistema periódico.</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="a" id="p1"> <label class="form-check-label" for="exampleRadios1">Propiedades Cualitativas</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="b" id="p1"> <label class="form-check-label" for="exampleRadios2">Propiedades Cuantitativas</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="c" id="p1"> <label class="form-check-label" for="exampleRadios3">Propiedades Periódicas</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>Enlace que resulta de la transferencia de uno o más electrones de un átomo a otro átomo o un grupo de éstos.</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="a" id="p2r1"> <label class="form-check-label" for="exampleRadios4">Enlace covalente</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="b" id="p2r2"> <label class="form-check-label" for="exampleRadios5">Enlace iónico</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="c" id="p2r3"> <label class="form-check-label" for="exampleRadios6">Enlace metálico</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>Es un elemento con pocos electrones en su última capa y con gran tendencia a cederlos.</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="a" id="p3r1"> <label class="form-check-label" for="exampleRadios7">Metal</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="b" id="p3r2"> <label class="form-check-label" for="exampleRadios8">Semimetal</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="c" id="p3r3"> <label class="form-check-label" for="exampleRadios9">No metal</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>¿Cuál es el símbolo del elemento químico Einstenio?</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="a" id="p4r1"> <label class="form-check-label" for="exampleRadios10">Ei</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="b" id="p4r2"> <label class="form-check-label" for="exampleRadios11">Es</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="c" id="p4r3"> <label class="form-check-label" for="exampleRadios12">No tiene símbolo</label>
                                    </li>
                                    <br><br>
                                </ol>
                                <br>
                                <p style="text-align: center;"><input class="btn btn-success" type="submit" value="¡LISTO!" names></p>
                            </form>
                        </div>
                    </div>

                    <div class="resultados" style="display: none;" id="resultados">
                        <p>Tus resultados son los siguientes:</p>

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