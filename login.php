<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="img/iconos/iconoRVL.png">
    <title>RVL Bicicletas</title>
</head>

<body class="fondo">
    <div class="contenedor">
        <!-- formulario login -->
        <form class="contenedor-login" method="POST" action="php/verifLogin.php">
            <div>
                <img src="img/fondos/fondo1.jpg" alt="" class="contenedor-login-imagen">
            </div>
            <div>
                <span class="material-symbols-outlined">directions_bike RVL</span>
                <h2>Inicio de Sesión</h2>
                <label for="correo">Correo</label>
                <input type="email" name="txtCorreo" placeholder="Ingresa tu correo electrónico" class="datos" autocomplete="off" />
                <label for="contra">Contraseña</label>
                <input type="password" name="txtContra" class="datos" placeholder="Ingresa tu contraseña" />
                <div style="display: flex; justify-content: space-between; padding: .7em 0;">
                    <a href="index.html" style="text-decoration: none;">Volver a Inicio</a>
                    <a href="#" style="text-decoration: none;">Olvidé mi contraseña</a>
                </div>
                <input name="btnIngresar" type="submit" value="Ingresar" class="boton" />
                <p style="text-align: center; margin-top: .8em;">¿No tienes cuenta? <span><a href="registro.php" style="color: #e6890f; font-weight: bold;">Registrate</a></span></p>
            </div>
        </form>

    </div>
</body>

</html>