<?php
    include 'conexion.php';

    $nombre = $_POST['txtNombre']; 
    $consulta = "DELETE FROM carrito WHERE nombre = '$nombre'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../User/carrito.php">';
?>