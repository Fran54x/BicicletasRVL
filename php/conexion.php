<?php
  $SERVER = "127.0.0.1";
  $DATABASE = "bicicletas_rvl";
  $USERNAME = "root";
  $PASSWORD = "";

  $conexion = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);
  $conexion -> set_charset("utf8");
  
  if(!$conexion)
    echo "Algo ha salido mal";  
  //else
    //echo "Conexión realizada exitosamente";
?>