<?php
    session_start();
    include 'conexion.php';

    $correo = $_POST['txtCorreo'];
    $estado = "Offline";

    $consulta = "UPDATE usuarios SET estado='$estado' WHERE correo = '$correo'";
    $sql = mysqli_query($conexion, $consulta);

    function desconectar_BD($conexion){
        $close = msqli_close($conexion) or die ("Error, no se pudo desconectar");

        return $close;
    }

    session_destroy();
    echo '<meta http-equiv="refresh" content="2; URL=../index.html">';
?>