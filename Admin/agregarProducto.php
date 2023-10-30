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
    <form id="datosProducto" method="POST" action="../php/agregarProducto.php">
    
        <label>Nombre:</label>
        <input type="text" id="txtNombre" name="txtNombre" class="datos" autocomplete="off" placeholder="Mochila" required>

        <label>Categoría:</label>
        <input type="text" id="txtCategoria" name="txtCategoria" class="datos" autocomplete="on" placeholder="Biciclecta o Accesorio" required>
       
        <label>Precio: $</label>
        <input type="text" id="txtPrecio" name="txtPrecio" class="datos" autocomplete="off" placeholder="549.00" required>

        <label>Cantidad: </label>
        <input type="number" id="txtCantidad" name="txtCantidad" class="datos" autocomplete="off" placeholder="12" required>
        
        <label>Descripción:</label>
        <input type="text" id="txtDescripcion" name="txtDescripcion" class="datos" autocomplete="off" placeholder="Mochila impermeable color negra con gris" required>
        
        <label>Contacto del Proveedor:</label>
        <input type="text" id="txtContacto" name="txtContacto" class="datos" autocomplete="off" placeholder="33 6712 4586" required>
        
        <label>Imagen del Producto:</label>
        <div class="contenedor-imagen">
            <div style="display: flex; border: 2px dashed #737373; width: 100%; height: 100%; justify-content: center; align-items: center;">
                Agrega aquí la imagen
            </div>
        </div>
        <input class="boton" name="enviar" type="submit" value="Guardar Datos">
    </form>
</body>
</html>