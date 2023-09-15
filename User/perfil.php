<?php
    session_start();
    include '../php/conexion.php';

    $nombre = $_SESSION['usuario'][0];
    $correo = $_SESSION['usuario'][1];
    $icono = $_SESSION['usuario'][2];

    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $sql = mysqli_query($conexion, $consulta);

    //obtener objeto
    $usuario = $sql->fetch_object();
    //var_dump($usuario);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="icon" href="/recursos/icono-pagina.png">
        <title>RVL Bicicletas</title>
    </head>
    <body>
        <div class="cover">
            <h1 id="Titulo">Bicicletas y Accesorios</h1>
            <h2 id="Subtitulo">El Mundo del Ciclismo</h2>
        </div>
        <nav>
            <ul class="lista-items">
                <div class="logo">
                    <li>
                        <span class="material-symbols-outlined">directions_bike RVL</span>
                    </li>
                </div>
                <div class="enlaces">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#Acerca">Acerca de</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li>
                        <a class="icono-nav" href="usuarioCarrito.php">
                            <img src="../../../recursos/carro-de-la-compra.png">
                            <span>Carrito</span>
                        </a>
                    </li>
                    <li>
                        <a id="User" href="#">
                            <img src="../../../recursos/ilustraciones-perfil/unnamed (18).png">
                            <span class="nombre-user">
                                <?php echo $nombre; ?>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>   
        </nav>
        
        <section class="tarjeta">
            <h2>Perfil</h2>
            <p style="padding-top: 10px; font-size: 20px;">Proximamente</p>
        </section>

        <section class="tarjeta">
        <h2>Datos del Usuario</h2>
            <!-- formulario datos de usuario -->
            <form id="datosUsuario" method = "POST" action="../php/modificarUsuario.php">
                <input type="hidden" name="formulario" class="datos" autocomplete="off" value="0" readonly>
                <!-- <label>Id Usuario:</label> -->
                <input type="hidden" name="txtIdUsuario" class="datos" autocomplete="off" value="<?php echo $usuario->idUsuario ?>" readonly>

                <label>Nombre completo:</label>
                <input type="text" name="txtNombre" class="datos" autocomplete="off" value="<?php echo $usuario->nombre ?>" required>
    
                <label>Contraseña:</label>
                <input type="password" name="txtContra" class="datos" value="<?php echo $usuario->contra ?>"required>

                <label>Correo:</label>
                <input type="email" name="txtCorreo" class="datos" autocomplete="off" value="<?php echo $usuario->correo ?>" required>

                <!-- <label>Tipo Usuario:</label> -->
                <input type="hidden" name="txtTipo" class="datos" autocomplete="off" value="<?php echo $usuario->tipoUsuario ?>" readonly>

                <label>Número de Teléfono:</label>
                <input type="number" name="txtTelefono" class="datos" autocomplete="off" minlength="8" maxlength="10"value="<?php echo $usuario->telefono ?>" required>
   
                <label>Dirección:</label>
                <input type="text" name="txtDireccion" class="datos" autocomplete="off" value="<?php echo $usuario->direccion ?>" required>
   
                <label>Codigo Postal:</label>
                <input type="number" name="txtCp" class="datos" autocomplete="off" value="<?php echo $usuario->cp ?>" required>

                <!-- <label>Icono:</label> -->
                <input type="hidden" name="txtIcono" class="datos" autocomplete="off" value="<?php echo $usuario->tipoUsuario ?>" required>

                <label>Fecha de Registro:</label>
                <input type="text" name="txtFechaRegistro" class="datos" autocomplete="off" minlength="8" maxlength="10" value="<?php echo $usuario->fechaRegistro ?>" readonly>

                <input class="boton" name="enviar" type="submit" id="btnEnviar" value="Guardar Datos">
            </form>
        </section>

        <section class="tarjeta">
            <h2>Formas de Pago</h2>
            <p style="padding-top: 10px; font-size: 20px;">Proximamente</p>
        </section>

        <section class="tarjeta">
            <h2>Cuenta</h2>
            <form action="../php/desconexion.php" method="POST">
                <input type="hidden" name="txtCorreo" value="<?php echo $correo ?>" readonly>
                <input class="btnSalir" name="btnSalir" type="submit" value="Cerrar Sesión">
            </form>
        </section>

        <footer id="Contacto">
            <p>Estamos ubicados en Plaza Box Barket local 8 y 9 sobre Av. Tonalá #4540</p>
            <p>Comunicate con nosotros al teléfono: 34-33-22-44-54</p>
            <p>© 2023 "Bicicletas y Accesorios" <span class="letras-rvl">RVL</span></p>
        </footer>
        <div class="espacio"></div>
    </body>
</html>