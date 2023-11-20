<?php
    include 'php/conexion.php';
    $consulta = $_GET['consulta']??NULL; //permite la nulidad de la variable
    $sql = "SELECT * FROM productos WHERE nombre LIKE '%$consulta%'";
    $result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="shortcut icon" href="img/iconos/iconoRVL.png">
        <title>RVL Bicicletas - Productos</title>
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
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="index.html#Acerca">Acerca de</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                </div>
            </ul>
        </nav>

        <section class="tarjeta">

            <div class="barra-busqueda">
                <label>Buscar: </label>
                <!-- Hace que se llame así mismo -->
                <form method="GET" action="productos.php" >
                    <input type="text" name="consulta" id="consulta" >
                    <button style="display: inline;" name="boton-buscar" id="boton-buscar">
                        <img src="img/iconos/buscar.png">
                    </button>
                </form>
            </div>

            <h2>Bicicletas</h2>
            <div class="contenedor-bicicletas">
                <!-- Catálogo Bicicletas -->
                <div class="bicicleta">
                    <img src="img/bicicletas/bici-urbana.png" alt="Bicicleta Urbana">
                    <div class="bicicleta-texto">
                        <h2>Urbana</h2>
                        <p>$4,530</p>
                        <form action="php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtIdProducto" value="0">
                            <input type="hidden" name="txtNombre" value="Urbana">
                            <input type="hidden" name="txtPrecio" value="4530">
                            <input type="hidden" name="txtImagen" value="bici-urbana">
                            <input type="hidden" name="txtDescripcion" value="Bicicleta urbana tinta, perfecta para paseos dentro de la ciudad">
                            <input type="submit" style="position: relative; top: .2in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="img/bicicletas/bici-bmx.png" alt="Bicicleta BMX">
                    <div class="bicicleta-texto">
                        <h2>BMX</h2>
                        <p>$4,760</p>
                        <form action="php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtIdProducto" value="0">
                            <input type="hidden" name="txtNombre" value="BMX">
                            <input type="hidden" name="txtPrecio" value="4760">
                            <input type="hidden" name="txtImagen" value="bici-bmx">
                            <input type="hidden" name="txtDescripcion" value="Bicicleta BMX color roja y ligera, se necesita mucha destreza para sacar potencial a esta bicicleta">
                            <input type="submit" style="position: relative; top: .2in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="img/bicicletas/bici-ruta.png" alt="Bicicleta Ruta">
                    <div class="bicicleta-texto">
                        <h2>Ruta</h2>
                        <p>$12,150</p>
                        <form action="php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtIdProducto" value="0">
                            <input type="hidden" name="txtNombre" value="Ruta">
                            <input type="hidden" name="txtPrecio" value="12150">
                            <input type="hidden" name="txtImagen" value="bici-ruta">
                            <input type="hidden" name="txtDescripcion" value="Bicicleta de ruta color negro con vivos rojos, un largo camino en la carretera lejos de la ciudad espera">
                            <input type="submit" style="position: relative; top: .2in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="img/bicicletas/bici-montana.png" alt="Bicicleta Montaña">
                    <div class="bicicleta-texto">
                        <h2>Montaña</h2>
                        <p>$7,796</p>
                        <form action="php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtIdProducto" value="0">
                            <input type="hidden" name="txtNombre" value="Montaña">
                            <input type="hidden" name="txtPrecio" value="7796">
                            <input type="hidden" name="txtImagen" value="bici-montana">
                            <input type="hidden" name="txtDescripcion" value="Bicicleta de montaña color azul cielo, está lista para rodar en cualquier tipo de terreno">
                            <input type="submit" style="position: relative; top: .2in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="img/bicicletas/bici-oso1.png" alt="Bicicleta Angel Oso Holandes">
                    <div class="bicicleta-texto">
                        <h2>Oso holandes</h2>
                        <p>$7,550</p>
                        <form action="php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtIdProducto" value="0">
                            <input type="hidden" name="txtNombre" value="Oso Holandes">
                            <input type="hidden" name="txtPrecio" value="7550">
                            <input type="hidden" name="txtImagen" value="bici-oso1">
                            <input type="hidden" name="txtDescripcion" value="Bicicleta Angelo, una bicicleta holandeza color naranja fuera de serie">
                            <input type="submit" style="position: relative; top: .2in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">';
                        </form>
                    </div>
                </div>
            </div>

            <h2>Accesorios</h2>
            <!-- Lista de Accesorios -->
            <div class="contenedor-accesorios">
            <?php foreach ($result as $row) {
            echo '<div class="accesorio">';
            echo '  <img src="img/accesorios/'.$row['imagen'].'.png" alt="'.$row['imagen'].'">';
            echo '  <div class="accesorio-texto">';
            echo '      <h2>'.$row['nombre'].'</h2>';
            echo '      <p>$'.$row['precio'].'</p>';
            echo '      <form action="php/agregarCarrito.php" method="POST">';
            echo '          <input type="hidden" name="txtIdProducto" value="'.$row['idProducto'].'">';
            echo '          <input type="hidden" name="txtNombre" value="'.$row['nombre'].'">';
            echo '          <input type="hidden" name="txtPrecio" value="'.$row['precio'].'">';
            echo '          <input type="hidden" name="txtImagen" value="'.$row['imagen'].'">';
            echo '          <input type="hidden" name="txtDescripcion" value="'.$row['descripcion'].'">';
            echo '          <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">';
            echo '      </form>';
            echo '  </div>';
            echo '</div>';
            }?>
        </section>

        <footer id="Contacto">
            <p>Estamos ubicados en plaza box market local 8 y 9 sobre Av. Tonalá #4540</p>
            <p>Comunicate con nosotros al teléfono: 34-33-22-44-54</p>
            <p>© 2023 "Bicicletas y Accesorios" <span class="letras-rvl">RVL</span></p>
        </footer>
        <div class="espacio"></div>
    </body>
</html>