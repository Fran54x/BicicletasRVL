<?php
    include 'conexion.php';

    $nombre = $_POST['txtNombre'];
    $imagen = $_POST['txtImagen'];
    $precio = $_POST['txtPrecio'];
    $descripcion = $_POST['txtDescripcion'];

    $consulta = "INSERT INTO carrito (nombre, imagen, precio, descripcion) VALUES ('$nombre', '$imagen', '$precio', '$descripcion')";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
?>