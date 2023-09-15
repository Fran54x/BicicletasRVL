<?php
    include 'conexion.php';

    $formulario = $_POST['formulario'];
    $idUsuario = $_POST['txtIdUsuario'];
    $nombre = $_POST['txtNombre'];
    $contra = $_POST['txtContra'];
    $correo = $_POST['txtCorreo'];
    $tipo = $_POST['txtTipo'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $cp = $_POST['txtCp'];
    $icono = $_POST['txtIcono'];

    $consulta = "UPDATE usuarios SET nombre='$nombre', contra='$contra', correo='$correo', tipoUsuario='$tipo', telefono='$telefono', direccion='$direccion', cp='$cp', iconoPerfil='$icono' WHERE idUsuario = '$idUsuario'";
    $sql = mysqli_query($conexion, $consulta);
    switch($formulario){
        case "0" :
            echo '<meta http-equiv="refresh" content="2; URL=../User/perfil.php">';
            break;      //perfil usuario
        case "1" :
            echo '<meta http-equiv="refresh" content="2; URL=../Admin/perfil.php">';
            break;      //perfil admin
        case "2" :
            echo '<meta http-equiv="refresh" content="2; URL=../Admin/tablaUsuarios.php">';
            break;      //tabla usuarios
    }
?>