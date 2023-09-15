<?php
    include '../php/conexion.php';

    $consulta = $_GET['consulta']??NULL; //permite la nulidad de la variable
    $sql = "SELECT * FROM productos WHERE nombre LIKE '%$consulta%'";
    $result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/panel.css">
    <title>Document</title>
</head>
<body class="ventana-espaciada">
    <h2>Productos</h2>

    <div style="width: 100%;">
        <div class="barra-busqueda">
            <label>Buscar: </label>
            <!-- Hace que se llame así mismo -->
            <form method="GET" action="tablaProductos.php" >
                <input type="text" name="consulta" id="consulta" >
                <button style="display: inline;" name="boton-buscar" id="boton-buscar">
                    <img src="/recursos/iconos/lupa.png">
                </button>
            </form>

        </div>
        <table id="tablaProductos">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Contacto del Proveedor</th>
                <th>Categoría</th>
                <th></th>
            </tr>
            <?php foreach ($result as $row) {
                echo "<tr>";  
                echo "<td>" .$row['idProducto']. "</td>";
                echo "<td>" .$row['nombre']. "</td>";
                echo "<td>$" .$row['precio']. "</td>";
                echo "<td>" .$row['cantidad']. "</td>";
                echo "<td>" .$row['descripcion']. "</td>";
                echo "<td>" .$row['contactoProveedor']. "</td>";
                echo "<td>" .$row['categoria']. "</td>";
                echo "<td>";
                echo "   <form action='editarProducto.php' method='POST'>";
                echo "       <input type='hidden' name='idProducto' value='".$row['idProducto']."'>";
                echo "       <button class='btn editar'>";
                echo "           <img title='Editar' src='../../../recursos/iconos/editar.png' alt='Editar'>";
                echo "       </button>";
                echo "   </form>";
                echo "   <form action='../php/eliminarProducto.php' method='POST'>";
                echo "       <input type='hidden' name='idProducto' value='".$row['idProducto']."'>";
                echo "       <button class='btn eliminar'>";
                echo "           <img title='Eliminar' src='../../../recursos/iconos/editar.png' alt='Eliminar'>";
                echo "       </button>";
                echo "   </form>";
                echo "</td>";
            }?>

            <!-- <tr>
                <td>1</td>
                <td>Casco</td>
                <td>$380</td>
                <td>$450</td>
                <td>Casco de ciclismo color negro con rojo para adulto de marca Imperio</td>
                <td>33 1123 4565</td>
                <td>
                    <button class="btn editar">
                        <img title="Editar" src="/recursos/iconos/editar.png" alt="Editar">
                    </button>
                    <button class="btn eliminar">
                        <img title="Eliminar" src="/recursos/iconos/eliminar.png" alt="Eliminar">
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lampara de niebla</td>
                <td>$250</td>
                <td>$380</td>
                <td>Luz delantera de 300 lumenes, tiene 3 modos de intensidad de luz y es impermeable</td>
                <td>33 1789 4528</td>
                <td>
                    <button class="btn editar">
                        <img title="Editar" src="/recursos/iconos/editar.png" alt="Editar">
                    </button>
                    <button class="btn eliminar">
                        <img title="Eliminar" src="/recursos/iconos/eliminar.png" alt="Eliminar">
                    </button>
                </td>
            </tr> -->

        </table>
    </div>
</body>
</html>