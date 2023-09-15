<?php
    session_start();
    $nombre = $_SESSION['usuario'][0];
    $icono = $_SESSION['usuario'][2];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="icon" href="../../../recursos/icono-pagina.png">
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#Acerca">Acerca de</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="#">Productos</a></li>
                    <li>
                        <a class="icono-nav" href="carrito.php">
                            <img src="/recursos/carro-de-la-compra.png">
                            <span>Carrito</span>
                        </a>
                    </li>
                    <li>
                        <a id="User" href="perfil.php">
                            <img src="/recursos/ilustraciones-perfil/unnamed (18).png">
                            <span class="nombre-user">
                                <?php echo $nombre; ?>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>
        </nav>

        <section class="tarjeta">
            <h2>Bicicletas</h2>
            <div class="contenedor-bicicletas">
                <!-- Catálogo Bicicletas -->
                <div class="bicicleta">
                    <img src="../../../recursos/bicicletas/bici-urbana.png" alt="Bicicleta Urbana">
                    <div class="bicicleta-texto">
                        <h2>Urbana</h2>
                        <p>$4,530</p>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="../../../recursos/bicicletas/bici-bmx.png" alt="Bicicleta BMX">
                    <div class="bicicleta-texto">
                        <h2>BMX</h2>
                        <p>$4,760</p>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="../../../recursos/bicicletas/bici-ruta.png" alt="Bicicleta Ruta">
                    <div class="bicicleta-texto">
                        <h2>Ruta</h2>
                        <p>$12,150</p>
                    </div>
                </div>
                <div class="bicicleta">
                    <img src="../../../recursos/bicicletas/bici-montana.png" alt="Bicicleta Montaña">
                    <div class="bicicleta-texto">
                        <h2>Montaña</h2>
                        <p>$7,796</p>
                    </div>
                </div>
            </div>

            <h2>Accesorios</h2>
            <div class="contenedor-accesorios">
                <!-- Lista de Productos -->
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-casco.png" alt="Casco">
                    <div class="accesorio-texto">
                        <h2>Casco</h2>
                        <p>$450</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Casco">
                            <input type="hidden" name="txtPrecio" value="450">
                            <input type="hidden" name="txtImagen" value="casco">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" name="agregar" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-lampara.png" alt="Lampara">
                    <div class="accesorio-texto">
                        <h2>Lampara de Niebla</h2>
                        <p>$380</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Lampara de niebla">
                            <input type="hidden" name="txtPrecio" value="380">
                            <input type="hidden" name="txtImagen" value="lampara">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-reflejantes.png" alt="Reflejantes">
                    <div class="accesorio-texto">
                        <h2>Reflejantes</h2>
                        <p>$49</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Reflejantes">
                            <input type="hidden" name="txtPrecio" value="49">
                            <input type="hidden" name="txtImagen" value="reflejantes">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-bomba.png" alt="Bomba">
                    <div class="accesorio-texto">
                        <h2>Bomba de Aire</h2>
                        <p>$319</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-gps.png" alt="GPS">
                    <div class="accesorio-texto">
                        <h2>Geolocalizador (GPS)</h2>
                        <p>$612</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-ciclocomputadora.png" alt="Ciclocomputadora">
                    <div class="accesorio-texto">
                        <h2>Ciclocomputadora</h2>
                        <p>$549</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-luces-radio.png" alt="Luces de Radio">
                    <div class="accesorio-texto">
                        <h2>Luces de Radio</h2>
                        <p>$321</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-ropa-ciclismo.png" alt="Ropa de Ciclismo">
                    <div class="accesorio-texto">
                        <h2>Ropa de Ciclismo</h2>
                        <p>$1199</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-calzado-ciclismo.png" alt="Calzado de Ciclismo">
                    <div class="accesorio-texto">
                        <h2>Calzado de Ciclismo</h2>
                        <p>$3499</p>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-guantes-ciclismo.png" alt="Guantes de Ciclismo">
                    <div class="accesorio-texto">
                        <h2>Guantes de Ciclismo</h2>
                        <p>$199</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-canasta.png" alt="Canasta">
                    <div class="accesorio-texto">
                        <h2>Canasta</h2>
                        <p>$245</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-bolsa-ciclismo.png" alt="Bolsa de Ciclismo">
                    <div class="accesorio-texto">
                        <h2>Bolsa de Ciclismo</h2>
                        <p>$289</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Bolsa de ciclismo">
                            <input type="hidden" name="txtPrecio" value="289">
                            <input type="hidden" name="txtImagen" value="bolsa-ciclismo">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-mochila.png" alt="Mochila">
                    <div class="accesorio-texto">
                        <h2>Mochila</h2>
                        <p>$549</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Mochila">
                            <input type="hidden" name="txtPrecio" value="549">
                            <input type="hidden" name="txtImagen" value="mochila">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-mochila-hidratacion.png" alt="Mochila de Hidratación">
                    <div class="accesorio-texto">
                        <h2>Mochila de Hidratación</h2>
                        <p>$389</p>
                        <form action="../php/agregarCarrito.php" method="POST">
                            <input type="hidden" name="txtNombre" value="Mochila de hidratacion">
                            <input type="hidden" name="txtPrecio" value="389">
                            <input type="hidden" name="txtImagen" value="mochila-hidratacion">
                            <input type="hidden" name="txtDescripcion" value="Una descripcion muy detallada">
                            <input type="submit" style="position: relative; top: .75in; width: 100%;" class="boton" value="Añadir al Carrito">
                        </form>
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-parches-y-pegamento.png" alt="Parches y Pegamento">
                    <div class="accesorio-texto">
                        <h2>Parches y Pegamento</h2>
                        <p>$179</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-llantas.png" alt="Llantas">
                    <div class="accesorio-texto">
                        <h2>Llantas</h2>
                        <p>$612</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-rines.png" alt="Rines">
                    <div class="accesorio-texto">
                        <h2>Rines</h2>
                        <p>$380</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-anfora.png" alt="Anfora">
                    <div class="accesorio-texto">
                        <h2>Anfora</h2>
                        <p>$259</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-asiento.png" alt="Asiento">
                    <div class="accesorio-texto">
                        <h2>Asiento</h2>
                        <p>$450</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-diablitos.png" alt="Diablito">
                    <div class="accesorio-texto">
                        <h2>Diablito</h2>
                        <p>$180</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-calcomanias.png" alt="Calcomanias">
                    <div class="accesorio-texto">
                        <h2>Calcomanias</h2>
                        <p>$20</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
                <div class="accesorio">
                    <img src="../../../recursos/productos/prod-campana-pato2.png" alt="Campana de Pato">
                    <div class="accesorio-texto">
                        <h2>Campana de Pato</h2>
                        <p>$210</p>
                        <input style="position: relative; top: .75in; width: 100%;" type="button" class="boton" value="Añadir al Carrito">
                    </div>
                </div>
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