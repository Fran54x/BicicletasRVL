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
        <link rel="shortcut icon" href="../img/iconos/iconoRVL.png">
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#Acerca">Acerca de</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li>
                        <a class="icono-nav" href="carrito.php">
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
                                <?php echo $nombre; ?>
                            </span>
                        </a>
                    </li>
                </div>
            </ul>   
        </nav>
        
        <section class="tarjeta">
            <h2>Mundo del ciclismo</h2>
            <p>
                Esta es tú página online en donde encontrarás bicicletas y accesorios con
                los que podras personalizar y equipar a tu compañera de rutas.
            </p>
        </section>
        
        <section class="tarjeta">
            <div class="contenedor-frase">
                <h2>Scott Stoll, Aventurero (2008)</h2>
                <p>¡Un paseo en bicicleta por el mundo comienza con un solo golpe de pedal!.</p>
            </div>
        </section>

        <section id="Acerca" class="contenedor-mision-vision">
            <div id="Mision">
                <h2>Misión</h2>
                <p>
                    Nos enfocamos en hacer que nuestros clientes disfruten de la experiencia de
                    recorrer el mundo en dos ruedas, además brindamos otros productos con los
                    cuales podrás equipar y personalizar tus bicicletas.
                </p>
            </div>
            <div id="Vision">
                <h2>Visión</h2>
                <p>
                    Pretendemos encaminar en un nivel estatal a personas a llevar una vida sana,
                    deportiva y llena de experiencia, al mismo tiempo que participamos de cuidar
                    el medio ambiente, volviendo entonces la bicicleta otra extensión de tu vida.
                </p>
            </div>
        </section>

        <!-- Tarjeta Hover -->
        <section class="tarjeta">
            <h2>Productos</h2>
            <div class="contenedor-bicicletas">
                
                <div class="tipo-ciclismo"><!-- Bicicleta Urbana -->
                    <img src="../img/bicicletas/biciUrbana.jpg" alt=""/>
                    <div id="bici-urbana" class="tipo-ciclismo-texto">
                        <h2>Bicicleta Urbana</h2>
                        <p>
                            ¿Te gusta pasear por la ciudad? Tenemos bicicletas urbanas
                            que son muy comodas y estan hechas especificamente para tus
                            recorridos y viajes dentro de la ciudad.
                        </p>
                    </div>
                </div>

                <div class="tipo-ciclismo"><!-- Bicicleta BMX -->
                    <img src="../img/bicicletas/biciBMX.jpg" alt=""/>
                    <div id="bici-bmx" class="tipo-ciclismo-texto">
                        <h2>Bicicleta BMX</h2>
                        <p>
                            ¿Buscas diversión? Quizá eres de los que les gustan la adrenalina
                            pura, aquella que es demostrada mediante una habilidad acrobática
                            de giros y saltos en carreras de estilo libre, para este tipo de
                            ciclismo tambien contamos con bicicletas BMX.
                        </p>
                    </div>
                </div>

                <div class="tipo-ciclismo"><!-- Bicicleta Ruta -->
                    <img src="../img/bicicletas/biciRuta.jpg" alt=""/>
                    <div id="bici-ruta" class="tipo-ciclismo-texto">
                        <h2>Bicicleta Ruta</h2>
                        <p>
                            Podría ser que lo tuyo sean los recorridos de largas distancias
                            por carreteras, ya sea para ejercitarte, recorrer otros caminos
                            y olvidarse de la ciudad un rato. Para esto y mucho más, las
                            bicicletas de Ruta son para ti.
                        </p>
                    </div>
                </div>

                <div class="tipo-ciclismo"><!-- Bicicleta Montaña -->
                    <img src="../img/bicicletas/biciMontana.jpg" alt=""/>
                    <div id="bici-montana" class="tipo-ciclismo-texto">
                        <h2>Bicicleta Montaña</h2>
                        <p>
                            Quizá tu tipo de diversión sea el recorrer otros tipos de lugares
                            más en contacto con la naturaleza, donde el suelo no es precisamente
                            regular, sitios como bosques, valles, senderos rocosos, montañas.
                            para caminos como estos entre otros, las bicicletas de montaña
                            son tu mejor opción.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="tarjeta">
            <h2>Ubicación de tienda física</h2>
            <iframe
                class="mapa"
                loading="lazy"
                allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.5732505165017!2d-103.27940630241733!3d20.616910562566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b3eb2a6aaab7%3A0x43e29a91570fec21!2sPlaza%20Box%20Market%20Tonal%C3%A1!5e0!3m2!1ses-419!2smx!4v1676904504931!5m2!1ses-419!2smx" >
            </iframe>
        </section>

        <footer id="Contacto">
            <p>Estamos ubicados en Plaza Box Market local 8 y 9 sobre Av. Tonalá #4540</p>
            <p>Comunicate con nosotros al teléfono: 34-33-22-44-54</p>
            <p>© 2023 "Bicicletas y Accesorios" <span class="letras-rvl">RVL</span></p>
        </footer>
        <div class="espacio"></div>
    </body>
</html>