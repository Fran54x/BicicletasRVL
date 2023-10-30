<?php
    session_start();
    $nombre = $_SESSION['usuario'][0];
    $icono = $_SESSION['usuario'][2];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/iconos/iconoRVL.png">
    <title>RVL Bicicletas - Configuración</title>
</head>
<body class="admin-panel">
    <div class="menu">
        <a class="enlace-simple"
            href="index.php">
            <img src="../img/iconos/atras.png" alt="">
            Volver
        </a>

        <div class="enlaces-principales">
            <a
                href="../index.html"
                target="iframe_a">
                <img src="../img/iconos/hogar.png" alt="">
                Inicio
            </a>
            <a
                href="tablaProductos.php"
                target="iframe_a">
                <img src="../img/iconos/tabla.png" alt="">
                Productos
            </a>
            <a
                href="agregarProducto.php"
                target="iframe_a">
                <img src="../img/iconos/cascoCiclismo1.png" alt="">
                Añadir Producto
            </a>
            <a
                href="tablaUsuarios.php"
                target="iframe_a">
                <img src="../img/iconos/tabla.png" alt="">
                Usuarios
            </a>
        </div>

        <span class="logo material-symbols-outlined">directions_bike RVL</span>
        <!-- <p>Menú</p> -->
    </div>
    <div class="contenedor">
        <!-- <p>Contenedor</p> -->
        <iframe class="ventana" name="iframe_a" src="tablaProductos.php"></iframe>
    </div>
</body>
</html>