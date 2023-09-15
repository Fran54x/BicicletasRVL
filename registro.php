<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>RVL Bicicletas</title>
</head>

<body class="fondo">
    <div class="contenedor">
        <!-- formulario registro -->
        <form class="contenedor-registro" method="post" action="php/registroUsuario.php">
            <span class="material-symbols-outlined">directions_bike RVL</span>
            <h2>Inicio de Sesión</h2>
            <label for="nombre">Nombre</label>
            <input type="text" name="txtNombre" placeholder="Ingresa tu nombre" class="datos" autocomplete="off" />
            <label for="nombre">Correo</label>
            <input type="email" name="txtCorreo" placeholder="Ingresa tu correo" class="datos" autocomplete="off" />
            <label for="contra">Contraseña</label>
            <input type="password" name="txtContra" class="datos" placeholder="Ingresa tu contraseña" />
            <label for="contra">Confirmar contraseña</label>
            <input type="password" name="txtContraComprobacion" class="datos" placeholder="Ingresa tu contraseña nuevamente" />
            <a href="index.html" style="text-decoration: none; text-align: center; padding: .6em 0;">Volver a Inicio</a></span></p>
            <input type="submit" value="Registrarse" class="boton" />
            <p style="text-align: center; margin-top: .8em;">¿Ya tienes una cuenta? <span><a href="login.php" style="color: #e6890f; font-weight: bold;">Inicia Sesión</a></span></p>
        </form>
    </div>
</body>

</html>