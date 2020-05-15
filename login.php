<?php
include("conexion.php");

session_start();
if(isset($_POST['comenzar'])){
    if(!empty($_POST['nickname']) && !empty($_POST['contra'])){
        $records = $conexion->prepare('SELECT id_us, pass_us FROM usuario WHERE id_us=:id');
        $records->bindParam(':id',$_POST['nickname']);
        $records->execute();

        $results = $records->fetch(PDO::FETCH_ASSOC);
        $message = '';

        if(count($results) > 0 && password_verify($_POST['contra'], $results['pass_us'])){
            $_SESSION['user_id'] = $results['id_us'];
            header('Location: /menu.php');
        }
        else{
            $message = 'BAD XD';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ExSci - Inicio de sesión</title>
        <link rel="stylesheet" href="diseño.css">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">   
    </head>

    <body>
        <header id="header1">
            <img id="logo5" src="exsci_logo.png" alt="Logo de ExSci">
            </br></br>
        </header>

        <?php if(!empty($message)) : ?>
            <p> <?= $message ?> </p>
        <?php endif; ?>


        <div id="formulario">
            <h2 style="font-family: 'Bebas Neue', cursive;">iniciar sesion</h2>
            <form action="login.php" method="post">
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="nickname">Nombre de usuario</label>
                <input type="text" placeholder="tu nombre de usuario" name="nickname">
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="contraseña">Contraseña</label>
                <input type="password" placeholder="tu contraseña" name="contra">
                <center>
                    </br>
                    <input type="submit" style="font-family: 'Bebas Neue', cursive;" href="#" id="comenzarxd" name="comenzar">
                    </br></br>
                    <a id="op" href="#" style="font-family: 'Baloo Paaji 2', cursive;">¿Olvidaste tu contraseña?</a>
                    </br>
                    <a id="op" href="signup.php" style="font-family: 'Baloo Paaji 2', cursive;">¿No tienes cuenta?</a>
                </center>
            </form>
        </div>
    </body>
</html>