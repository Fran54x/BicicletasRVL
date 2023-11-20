<?php
    include 'conexion.php';

    $idProducto = $_POST['idProducto']; 
    $consulta = "DELETE FROM productos WHERE `idProducto` = '$idProducto'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../Admin/tablaProductos.php">';
?>