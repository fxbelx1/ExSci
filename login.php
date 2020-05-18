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
            <img id="logo5" src="img/exsci_logo.png" alt="Logo de ExSci">
            </br></br>
        </header>

        <div id="formulario">
            <h2 style="font-family: 'Bebas Neue', cursive;">iniciar sesion</h2>
            <form action="verificaciondb.php" method="POST">
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="nickname">Nombre de usuario</label>
                <input type="text" placeholder="tu nombre de usuario" name="nickname">
                <label style="font-family: 'Baloo Paaji 2', cursive;" for="contra">Contraseña</label>
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