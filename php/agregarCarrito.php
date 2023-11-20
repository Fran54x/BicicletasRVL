<?php
    session_start();
    include 'conexion.php';

    if($_SESSION == null){ //si el usuario aun no se ha identificado
        echo '<meta http-equiv="refresh" content="2; URL=../login.php">';
    } else {
        $idProducto = $_POST['txtIdProducto'];
        $nombre = $_POST['txtNombre'];
        $imagen = $_POST['txtImagen'];
        $precio = $_POST['txtPrecio'];
        $descripcion = $_POST['txtDescripcion'];

        $consulta = "INSERT INTO carrito (idCarrito, idProducto, nombre, imagen, precio, descripcion) VALUES (0, '$idProducto', '$nombre', '$imagen', '$precio', '$descripcion')";
        $sql = mysqli_query($conexion, $consulta);
        echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
    }
?>