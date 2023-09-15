<?php
    include 'conexion.php';

    $nombre = $_POST['txtNombre'];
    $categoria = $_POST['txtCategoria'];
    $precio = $_POST['txtPrecio'];
    $descripcion = $_POST['txtDescripcion'];
    $contactoProveedor = $_POST['txtContacto'];
    $imagen = 'imagen/url';

    $consulta = "INSERT INTO productos (nombre, categoria, precio, descripcion, contactoProveedor, imagen) VALUES ('$nombre', '$categoria', '$precio', '$descripcion', '$contactoProveedor', '$imagen')";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../Admin/tablaProductos.php">';
?>