<?php
    include '../php/conexion.php';

    $consulta = $_GET['consulta']??NULL; //permite la nulidad de la variable
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$consulta%'";
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
    <h2>Usuarios</h2>

    <div style="width: 100%;">
        <div class="barra-busqueda">
            <label>Buscar: </label>
            <!-- Hace que se llame así mismo -->
            <form method="GET" action="tablaUsuarios.php" >
                <input type="text" name="consulta" id="consulta" >
                <button style="display: inline;" type="submit" name="boton-buscar" id="boton-buscar">
                    <img src="../img/iconos/buscar.png">
                </button>
            </form>
            
        </div>
        <table id="tablaUsuarios">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Fecha Registro</th>
                <th>Estado</th>
                <th></th>
            </tr>
            <?php foreach ($result as $row) {
                echo "<tr>";  
                echo "<td>" .$row['idUsuario']. "</td>";
                echo "<td>" .$row['nombre']. "</td>";
                echo "<td>" .$row['correo']. "</td>";
                echo "<td>" .$row['tipoUsuario']. "</td>";
                echo "<td>" .$row['fechaRegistro']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>";
                echo "   <form action='editarUsuario.php' method='POST'>";
                echo "       <input type='hidden' name='idUsuario' value='".$row['idUsuario']."'>";
                echo "       <button class='btn editar'>";
                echo "           <img title='Editar' src='../img/iconos/editar.png' alt='Editar'>";
                echo "       </button>";
                echo "   </form>";
                echo "   <form action='../php/eliminarUsuario.php' method='POST'>";
                echo "       <input type='hidden' name='idUsuario' value='".$row['idUsuario']."'>";
                echo "       <button class='btn eliminar'>";
                echo "           <img title='Eliminar' src='../img/iconos/eliminar.png' alt='Eliminar'>";
                echo "       </button>";
                echo "   </form>";
                echo "</td>";
            }?>
        </table>
    </div>
</body>
</html>