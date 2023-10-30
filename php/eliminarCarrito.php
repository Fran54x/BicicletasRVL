<?php
    include 'conexion.php';

    $idProducto = $_POST['txtIdProducto']; 
    $consulta = "DELETE FROM carrito WHERE idProducto = '$idProducto'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
?>