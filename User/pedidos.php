<?php
    session_start();
    $_SESSION['usuario'][0] = $_GET['nombreUsuario'];
    $_SESSION['usuario'][1] = $_GET['correo'];
    $_SESSION['usuario'][2] = $_GET['icono'];
    $_SESSION['usuario'][3] = $_GET['idUsuario'];

    $nombre = $_SESSION['usuario'][0];
    $correo = $_SESSION['usuario'][1];
    $icono = $_SESSION['usuario'][2];
    $idUsuario = $_SESSION['usuario'][3];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="shortcut icon" href="../img/iconos/iconoRVL.png">
        <title>RVL Bicicletas</title>
    </head>
    <body class="fondo-archivos">
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
                    <li><a href="http://www.bicicletasRVL.com.mx/User/index.php">Inicio</a></li>
                    <li><a href="http://www.bicicletasRVL.com.mx/User/index.php#Acerca">Acerca de</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="http://www.bicicletasRVL.com.mx/User/productos.php">Productos</a></li>
                    <li>
                        <a class="icono-nav" href="http://www.bicicletasRVL.com.mx/User/carrito.php">
                            <img src="../img/iconos/carritoCompra.png">
                            <span>Carrito</span>
                        </a>
                    </li>
                    <li>
                        <a class="icono-nav" href="#">
                            <img src="../img/iconos/pedidos.png">
                            <span>Pedidos</span>
                        </a>
                    </li>
                    <li>
                        <a id="User" href="http://www.bicicletasRVL.com.mx/User/perfil.php">
                            <img src="../img/perfiles/<?php echo $icono; ?>.png" >
                            <span class="nombre-user">
                                <?php echo $nombre; ?>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>   
        </nav>

        <section class="tarjeta" style="">
            <h2>Pedidos</h2>
            <div class="contenedor-archivos">
            <?php
                $directorio = "../archivos";

                // carpeta con archivos PDF
                $archivos = glob("$directorio/*.pdf");

                foreach ($archivos as $archivo) {
                    // obtiene el nombre de archivo sin la extensión .pdf
                    $nombreArchivo = pathinfo($archivo, PATHINFO_FILENAME);

                    // divide el nombre del archivo en partes usando el guion "-"
                    // el delimitador del nombre es "-" y por la nomenclatura se divide en 5 partes
                    $partes = explode('-', $nombreArchivo);

                    // Compara el primer dígito del nombre del archivo con la ID de usuario
                    if ($idUsuario == $partes[0]) {
                        echo '<div class="marco-archivo">';
                        echo '<img src="./../img/iconos/archivoPDF.png" alt="PDF" />';
                        echo '<a href="../archivos/' . basename($archivo) . '" target="_blank">' . basename($archivo) . '</a>';
                        echo '</div>';
                    }
                }?>
            </div>
        </section>


        <footer id="Contacto">
            <p>Estamos ubicados en Plaza Box Market local 8 y 9 sobre Av. Tonalá #4540</p>
            <p>Comunicate con nosotros al teléfono: 34-33-22-44-54</p>
            <p>© 2023 "Bicicletas y Accesorios" <span class="letras-rvl">RVL</span></p>
        </footer>
        <div class="espacio"></div>
    </body>
</html>
