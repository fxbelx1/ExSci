<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ExSci - Registro</title>
        <link rel="stylesheet" href="diseño.css">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">  
    </head>

    <body>
        <header id="header1">
            <img id="logo5" src="exsci_logo.png" alt="Logo de ExSci">
            </br></br>
        </header>

        <div id="formulario">
            <h2 style="font-family: 'Bebas Neue', cursive;">Crear una cuenta</h2>
            <form action="signup.php" method="POST">
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="correo">Correo electrónico </label>
                <input type="text" placeholder="tu correo electrónico" name="correo">
                
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="nickname">Nombre de usuario</label>
                <input type="text" placeholder="nombre de usuario que deseas tener" name="nickname">
                
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="contra">Contraseña</label>
                <input type="password" placeholder="contraseña para iniciar sesion en tu cuenta" name="contra">
                
                <center>
                    </br>
                    <input type="submit" style="font-family: 'Bebas Neue', cursive;" href="#" id="comenzarxd" name="comenzar">
                    </br></br>
                    <a id="op" href="login.html" style="font-family: 'Baloo Paaji 2', cursive;">¿Ya tienes una cuenta?</a>
                </center>
            </form>
        </div>

        <?php
           include("db.php"); 
        ?>

    </body>
</html>