<?php
    include '../php/conexion.php';

    $idProducto = $_POST['idProducto']?? null;
    $consulta = "SELECT * FROM productos WHERE idProducto = '$idProducto'";
    $sql = mysqli_query($conexion, $consulta);

    //obtener objeto
    $producto = $sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body class="ventana-espaciada">
    <h2>Agregar Producto</h2>
    <form id="datosProducto" method="POST" action="../php/modificarProducto.php">
    
        <label>Id Producto:</label>
        <input type="text" id="txtIdProducto" name="txtIdProducto" class="datos" autocomplete="off" value="<?php echo $producto->idProducto; ?>" readonly>

        <label>Nombre:</label>
        <input type="text" id="txtNombre" name="txtNombre" class="datos" autocomplete="off" value="<?php echo $producto->nombre; ?>" required>

        <label>Categoría:</label>
        <input type="text" id="txtCategoria" name="txtCategoria" class="datos" autocomplete="on" value="<?php echo $producto->categoria; ?>" required>
       
        <label>Precio: $</label>
        <input type="text" id="txtPrecio" name="txtPrecio" class="datos" autocomplete="off" value="<?php echo $producto->precio; ?>" required>

        <label>Cantidad: $</label>
        <input type="number" id="txtCantidad" name="txtCantidad" class="datos" autocomplete="off" value="<?php echo $producto->cantidad; ?>" required>
        
        <label>Descripción:</label>
        <input type="text" id="txtDescripcion" name="txtDescripcion" class="datos" autocomplete="off" value="<?php echo $producto->descripcion; ?>" required>
        
        <label>Contacto del Proveedor:</label>
        <input type="text" id="txtContacto" name="txtContacto" class="datos" autocomplete="off" value="<?php echo $producto->contactoProveedor; ?>" required>
        
        <label>Imagen del Producto:</label>
        <input type="text" id="txtImagen" name="txtImagen" class="datos" autocomplete="off" value="<?php echo $producto->imagen; ?>" >
        <input class="boton" name="enviar" type="submit" value="Guardar Datos">
    </form>
</body>
</html>