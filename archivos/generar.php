<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  session_start();
  $nombre = $_SESSION['usuario'][0];
  $correo = $_SESSION['usuario'][1];
  $idUsuario = $_SESSION['usuario'][3];
  $producto = $_POST['txtProducto'];
  $precio = $_POST['txtPrecio'];

	require('fpdf/fpdf.php');
  require('../php/conexion.php');

  //establece la fecha en la que se maneja la página
  date_default_timezone_set("America/Mexico_City");
  //fecha en español
  $diasSemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
  $fechaActual = $diasSemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

  //crear archivo pdf
  $pdf = new FPDF('P', 'mm', 'A4');
  $pdf -> AddPage();
  $pdf -> SetTopMargin(25);
  $pdf -> SetLeftMargin(15);
  $pdf -> SetRightMargin(15);
  
  //agregar imagen pdf
  $pdf -> Image('iconoRVL.png', 172, 12, 11);
  //$pdf -> Image('iconoRVL(128px).png', 162, 12, 11);
  //agregar titulo
  $pdf -> SetFont('Arial', 'B', 26);
  $pdf -> Cell(0, 15, 'Bicicletas y Accesorios RVL', 0, 1, 'C');
  //$pdf -> Cell(0, 15, '       Bicicletas y Accesorios RVL', 0, 1);
  $pdf -> SetFont('Arial', 'B', 18);
  $pdf -> Ln(0.2);
  $pdf -> Cell(0, 15, 'El Mundo Del Ciclismo', 0, 1, 'C');
  $pdf -> Ln();

  //agregar texto
  $pdf -> SetFont('Arial', '', 14);
  $pdf -> Cell(0, 7, utf8_decode('Recibo de compra de '.$nombre.'.                  '.$fechaActual), 0, 1);
  $pdf -> Ln();

  //agregar tablas y productos
  $pdf -> SetFont('Arial', 'B', 14);
  $pdf -> Cell(30, 10, 'Cantidad', 1, 0, 'C');
  $pdf -> Cell(105, 10, '    Producto', 1, 0);
  $pdf -> Cell(42, 10, 'Precio', 1, 0,'C');
  $pdf -> Ln();
  $pdf -> SetFont('Arial', '', 14);
  $pdf -> Cell(30, 10, '1', 1, 0, 'C');
  $pdf -> Cell(105, 10, utf8_decode('    '.$producto), 1, 0);
  $pdf -> Cell(42, 10, '$'.$precio, 1, 0, 'C');
  $pdf -> Ln();

  //columnas vacías
  for($i = 0; $i < 7; $i++){
    $pdf -> Cell(30, 10, '', 1, 0, 'C');
    $pdf -> Cell(105, 10, utf8_decode(''), 1, 0);
    $pdf -> Cell(42, 10, '', 1, 0, 'C');
    $pdf -> Ln();
  }

  //pie de página
  $pdf -> SetY(260);
  $pdf -> SetFont('Arial', 'I', 12);
  $pdf -> Cell(0, 10, utf8_decode('Plaza Box Barket local 8 y 9 sobre Av. Tonalá #4540  Teléfono: 34-33-22-44-54'), 0, 0, 'C');
  $pdf -> Ln(5);
  $pdf -> Cell(0, 10, utf8_decode('© 2023 "Bicicletas y Accesorios" RVL'), 0, 0, 'C');
    
    //nomenclatura "IDUSUARIO-AÑO-MES-DIA-HORA.pdf"  ->  "1-24-10-23-024305.pdf"
    $fechaYHora = date("d-m-y-His");
    $nombreArchivo = $idUsuario . '-' . $fechaYHora . '.pdf';
    //salida de archivo en carpeta actual y nombre
    $pdf -> Output('F', $nombreArchivo);

    $mail = new PHPMailer(true);

    try {
        //Configuraciones del Servidor
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'bicicletasrvl@gmail.com';
        $mail->Password   = 'euxqhrtpekmutxfs';
        
        $mail->SMTPSecure = 'TLS';
        $mail->Port       = 587;
        $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
        );
        
        //$mail->setFrom('riostorres2@gmail.com', 'Bicicletas RVL');
        $mail->setFrom('bicicletasrvl@gmail.com', 'Bicicletas RVL');
        $mail->addAddress($correo);
        $mail->addAttachment($nombreArchivo);

        $mail->isHTML(true);
        $mail->Subject = 'Recibo de Compra';
        $mail->Body = 'Agradecemos tu compra en bicicletasrvl.com.mx, a continuación tienes tu recibo de compra ';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "No se pudo enviar el correo. Correo Error: {$mail->ErrorInfo}";
    }

    mysqli_close($conexion);

	echo '<meta http-equiv="refresh" content="0;url=../User/carrito.php">';
?>