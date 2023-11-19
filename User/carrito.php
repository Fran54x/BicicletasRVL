<?php
    session_start();
    $nombreUsuario = $_SESSION['usuario'][0];
    $icono = $_SESSION['usuario'][2];

    include '../php/conexion.php';

    $consulta = $_POST['agregar']??NULL;

    // Realizar la consulta a la base de datos
    $sql = "SELECT * FROM carrito WHERE nombre LIKE '%$consulta%'";
    $result = mysqli_query($conexion, $sql);
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
    <body class="fondo-carrito">
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
                        <a class="icono-nav" href="#">
                            <img src="../img/iconos/carritoCompra.png">
                            <span>Carrito</span>
                        </a>
                    </li>
                    <li>
                        <a class="icono-nav" href="pedidos.php">
                            <img src="../img/iconos/pedidos.png">
                            <span>Pedidos</span>
                        </a>
                    </li>
                    <li>
                        <a id="User" href="perfil.php">
                            <img src="../img/perfiles/<?php echo $icono; ?>.png" >
                            <span class="nombre-user">
                                <?php echo $nombreUsuario; ?>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>   
        </nav>

        <section class="tarjeta">
            <h2>Productos añadidos al carrito</h2>
            <div class="contenedor-carrito">

            <?php foreach ($result as $row) {
                echo '<div class="producto">';
                echo '<img src="../img/accesorios/'.$row['imagen'].'.png" alt="'.$row['imagen'].'">';
                echo '<div class="accesorio-texto">';
                echo '<h2>'.$row['nombre'].'</h2>';
                echo '<p>$'.$row['precio'].'</p>';
                echo '<p class="producto-descripcion">'.$row['descripcion'].'</p>';
                echo '<form action="../php/eliminarCarrito.php" method="POST" >';
                echo '<input type="hidden" name="txtIdCarrito" value='.$row["idCarrito"].'>' ;
                echo '<input style="position: relative; bottom: 0; width: 100%; margin-bottom: .1in;" type="submit" class="boton-eliminar" value="Eliminar">';
                echo '</form>';
                echo '<form action="../archivos/generar.php" method="POST">';
                echo '<input type="hidden" name="txtProducto" value="'.htmlspecialchars($row['nombre']).'">';
                echo '<input type="hidden" name="txtPrecio" value='.$row['precio'].'>' ;
                echo '<input style="position: relative; bottom: 0; width: 100%; margin-top: .1in;" type="submit" class="boton" value="Pagar">';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }?>

            </div>
        </section>

        <footer id="Contacto">
            <p>Estamos ubicados en Plaza Box Barket local 8 y 9 sobre Av. Tonalá #4540</p>
            <p>Comunicate con nosotros al teléfono: 34-33-22-44-54</p>
            <p>© 2023 "Bicicletas y Accesorios" <span class="letras-rvl">RVL</span></p>
        </footer>
        <div class="espacio"></div>
    </body>
</html>