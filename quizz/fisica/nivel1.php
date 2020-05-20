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

        <title>ExSci - Quizz [Física]</title>
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
                    <p class="cabeza"><strong>FÍSICA</strong></p>
                    <div id="instrucciones" style="display: inline">
                        <p>En esta sección se le mostrarán preguntas junto con tres posibles respuestas. De acuerdo a su conocimiento deberá seleccionar la respuesta que usted considere correcta.</p>
                        <p><strong>EJEMPLO:</strong></p>
                        
                        <div style="border: solid #3a3939 1px;" >
                            <ol>
                                <li>
                                    <p>Fenómeno que sufre un cuerpo que provoque su caida hacia la Tierra.</strong></p>
                                    <p>
                                        <div class="form-check" id="formz">
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios1">Fuerza nuclear</label>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" disabled> <label class="form-check-label" for="exampleRadios2">Fuerza centrífuga</label>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" checked disabled> <label class="form-check-label" for="exampleRadios3">Fuerza gravitacional</label>
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
                            <form action="/exsci/check.php" method="POST">
                                <ol>
                                    <li>
                                        <p>La densidad de un cuerpo se expresa en…</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="a" id="p1"> <label class="form-check-label MathJax" for="exampleRadios1">Kilogramos \((Kg)\)</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="b" id="p1"> <label class="form-check-label" for="exampleRadios2">Litros \((L)\)</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p1" value="c" id="p1"> <label class="form-check-label" for="exampleRadios3">Gramos por centímetro cúbico \(({g\over cm^3})\)</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>¿Cuáles de las siguientes afirmaciones indican un centro de gravedad atrasado y fuera de sus límites?</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="a" id="p2r1"> <label class="form-check-label" for="exampleRadios4">La velocidad de perdida es mayor</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="b" id="p2r2"> <label class="form-check-label" for="exampleRadios5">Tendencia a despegar con baja velocidad</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p2" value="c" id="p2r3"> <label class="form-check-label" for="exampleRadios6">El avión se hace más inestable y dificulta el control</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>Cuándo nos referimos a la estructura fija de la aeronave más el aceite y el combustible residual estamos hablando de…</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="a" id="p3r1"> <label class="form-check-label" for="exampleRadios7">Carga útil</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="b" id="p3r2"> <label class="form-check-label" for="exampleRadios8">Peso máximo</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p3" value="c" id="p3r3"> <label class="form-check-label" for="exampleRadios9">Peso vacío</label>
                                    </li>
                                    <br><br>
                                    <li>
                                        <p>La ecuación de momentos se define como…</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="a" id="p4r1"> <label class="form-check-label" for="exampleRadios10">\(M=P·B\)</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="b" id="p4r2"> <label class="form-check-label" for="exampleRadios11">\(M=P·T\)</label>
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="p4" value="c" id="p4r3"> <label class="form-check-label" for="exampleRadios12">\(M=T·B\)</label>
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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
        <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>