<?php
    include 'conexion.php';

    $idProducto = $_POST['txtIdProducto'];
    $nombre = $_POST['txtNombre'];
    $categoria = $_POST['txtCategoria'];
    $precio = $_POST['txtPrecio'];
    $cantidad = $_POST['txtCantidad'];
    $descripcion = $_POST['txtDescripcion'];
    $contactoProveedor = $_POST['txtContacto'];
    $imagen = $_POST['txtImagen'];

    $consulta = "UPDATE productos SET nombre='$nombre', categoria='$categoria', precio='$precio', cantidad='$cantidad', descripcion='$descripcion', contactoProveedor='$contactoProveedor', imagen='$imagen' WHERE idProducto = '$idProducto'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../Admin/tablaProductos.php">';
?>