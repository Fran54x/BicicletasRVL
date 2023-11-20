<?php
    include '../php/conexion.php';

    $idUsuario = $_POST['idUsuario']?? null;
    $consulta = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
    $sql = mysqli_query($conexion, $consulta);

    //obtener objeto
    $usuario = $sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/panel.css">
    <title>Document</title>
</head>
<body class="ventana-espaciada">
    <h2>editar Usuario</h2>
    <!-- Formulario Datos Usuario -->
    <form id="datosUsuario" method="POST" action="../php/modificarUsuario.php">

        <input type="hidden" name="formulario" class="datos" autocomplete="off" value="2" readonly>
        <label>Id Usuario:</label>
        <input type="number" id="txtIdUsuario" name="txtIdUsuario" class="datos" value="<?php echo $usuario->idUsuario; ?>" readonly>
    
        <label>Nombre:</label>
        <input type="text" id="txtNombre" name="txtNombre" class="datos" autocomplete="off" value="<?php echo $usuario->nombre; ?>" required>

        <label>Contraseña:</label>
        <input type="password" id="txtContra" name="txtContra" class="datos" autocomplete="off" value="<?php echo $usuario->contra; ?>" required>
        
        <label>Correo: </label>
        <input type="email" id="txtCorreo" name="txtCorreo" class="datos" autocomplete="off" value="<?php echo $usuario->correo; ?>" readonly>
       
        <label>Tipo Usuario: </label>
        <input type="text" id="txtTipo" name="txtTipo" class="datos" autocomplete="off" value="<?php echo $usuario->tipoUsuario; ?>" required>
        
        <label>Teléfono:</label>
        <input type="number" id="txtTelefono" name="txtTelefono" class="datos" autocomplete="off" value="<?php echo $usuario->telefono; ?>" required>
        
        <label>Direccion:</label>
        <input type="text" id="txtDireccion" name="txtDireccion" class="datos" autocomplete="off" value="<?php echo $usuario->direccion; ?>" required>
        
        <label>Código Postal:</label>
        <input type="number" id="txtCp" name="txtCp" class="datos" autocomplete="off" value="<?php echo $usuario->cp; ?>" required>
        
        <!-- <label>Icono Perfil:</label> -->
        <input type="hidden" id="txIcono" name="txtIcono" class="datos" autocomplete="off" value="<?php echo $usuario->iconoPerfil; ?>">

        <label>Estado:</label>
        <input type="text" id="txtEstado" name="txtEstado" class="datos" autocomplete="off" value="<?php echo $usuario->estado; ?>" readonly>

        <label>Fecha Registro:</label>
        <input type="date" id="txtFechaRegistro" name="txtFechaRegistro" class="datos" autocomplete="off" value="<?php echo $usuario->fechaRegistro; ?>" readonly>

        <input class="boton" name="enviar" type="submit" value="Guardar Datos">
    </form>
</body>
</html>