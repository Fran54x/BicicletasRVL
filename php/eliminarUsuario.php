<?php
    include 'conexion.php';

    $idUsuario = $_POST['idUsuario']; 
    $consulta = "DELETE FROM usuarios WHERE `idUsuario` = '$idUsuario'";
    $sql = mysqli_query($conexion, $consulta);
    echo '<meta http-equiv="refresh" content="2; URL=../Admin/tablaUsuarios.php">';
?>