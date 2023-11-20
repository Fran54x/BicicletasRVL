<?php
    include 'conexion.php';

    $idCarrito = $_POST['txtIdCarrito']; 
    $consulta = "DELETE FROM carrito WHERE idCarrito = '$idCarrito'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
?>