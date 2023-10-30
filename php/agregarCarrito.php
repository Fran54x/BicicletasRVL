<?php
    include 'conexion.php';

    $idProducto = $_POST['txtIdProducto'];
    $nombre = $_POST['txtNombre'];
    $imagen = $_POST['txtImagen'];
    $precio = $_POST['txtPrecio'];
    $descripcion = $_POST['txtDescripcion'];

    $consulta = "INSERT INTO carrito (idCarrito, idProducto, nombre, imagen, precio, descripcion) VALUES (0, '$idProducto', '$nombre', '$imagen', '$precio', '$descripcion')";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
?>