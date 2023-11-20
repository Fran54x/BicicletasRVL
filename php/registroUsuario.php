<?php
    include 'conexion.php';
    
    $nombre = $_POST['txtNombre'];
    $correo = $_POST['txtCorreo'];
    $contra = md5($_POST['txtContra']);
    $contraComprobacion = md5($_POST['txtContraComprobacion']);
    
    $tipoUsuario = "Usuario";
    $iconoPerfil = rand(1,52);
    $estado = "Online";
   
    //$telefono = $_POST['telefono'];
    //$direccion = $_POST['direccion'];
    //$cp = $_POST['cp'];

    if($contra == $contraComprobacion){
        $consulta = "INSERT INTO usuarios (nombre, contra, correo, tipoUsuario, iconoPerfil, estado) VALUES ('$nombre', '$contra', '$correo', '$tipoUsuario', '$iconoPerfil', '$estado')";
        $sql = mysqli_query($conexion, $consulta);
        echo '<meta http-equiv="refresh" content="2; URL=../login.php">';
    }
    else{
        echo "La contraseña es diferente de la comprobación";
        echo '<meta http-equiv="refresh" content="2; URL=../registro.php">';
    }
    
    //$sql = mysqli_query($_CONNECTION, "insert into usuarios values (0, '$nombre', '$contra', '$correo', '$telefono', '$direccion', '$cp')");
    //$sql = mysqli_query($_CONNECTION, "INSERT INTO usuarios (nombre, contra, correo, telefono, direccion, cp) VALUES ('$nombre', '$contra', '$correo' , null, null, null);");
    
?>