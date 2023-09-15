<?php
    session_start();
    include 'conexion.php';

    $ingresar = $_POST['btnIngresar'];
    $correo = $_POST['txtCorreo'];
    $contra = md5($_POST['txtContra']);

    if (!empty($ingresar)){
        if (empty($nombre) && empty($contra)){
            echo '<br>Los campos están vacios';
        } else {

            $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' AND contra = '$contra'";
            $sql = mysqli_query($conexion, $consulta);
            
            $usuario = $sql->fetch_object();

            $datos = array(
                0 => $usuario->nombre,
                1 => $usuario->correo,
                2 => $usuario->iconoPerfil
            );

            $_SESSION['usuario'] = $datos;

            if(!empty($usuario)){
                
                //establece al usuario como "En linea"
                $consulta = "UPDATE usuarios SET estado='Online' WHERE correo = '$usuario->correo'";
                $sql = mysqli_query($conexion, $consulta);

                switch($usuario->tipoUsuario){
                    case 'Usuario':
                        echo '<meta http-equiv="refresh" content="2; URL=../User/index.php">';
                        break;
                    case 'Admin':
                        echo '<meta http-equiv="refresh" content="2; URL=../Admin/index.php">';
                        break;
                    default :
                        echo 'Alga ha salido mal"';
                        break;
                }
            }else{
                echo '<br>Acceso Denegado';
            }
        }
    }
?>