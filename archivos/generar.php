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

	require('fpdf/fpdf.php');
  require('../php/conexion.php');

  $email;

  
	$pdf = new FPDF('P', 'mm', 'A4');
	$pdf -> AddPage();
  $pdf->SetAutoPageBreak(true, 10);
  $pdf->SetFont('Arial', '', 12);
  $pdf->SetTopMargin(10);
  $pdf->SetLeftMargin(10);
  $pdf->SetRightMargin(10);

  /*$pdf -> Image('../assets/images/synthpop.png', 88.5, 15, 33, 12, 'PNG');

  $pdf->SetTextColor(115,115,115);
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial', '', 10);
  $pdf->Cell(170, 8, utf8_decode('Equipo musical electrónico'), 'B', 1, 'C', false);
  $pdf->SetTextColor(0);

  $filename = "../orders/".$_SESSION["synthpop_id"]."_".Date("mjY").".json";

  if (file_exists($filename)) {
    $archivo = file_get_contents($filename);
    $products = json_decode($archivo);
    $user_id = $_SESSION['synthpop_id'];

    $resultado = mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$user_id';");
				
		if($resultado == true) {
			if(mysqli_num_rows($resultado) == 1) {
				$row = mysqli_fetch_array($resultado);

        $pdf->SetFontSize(10);
        $pdf->Text(20, 52, 'Resumen de pedido:');
        $pdf->Text(30, 60, 'Nombre del cliente:');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(62, 60, utf8_decode($row['firstname']));
        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(30, 65, utf8_decode('Correo electrónico:'));
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(62, 65, $row['email']);

			}
			else echo "No se encontraron los datos.";
		}
		else echo "Error en la consulta.";
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->Text(20, 74, "Fecha: ");
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Text(32, 74, Date("d/F/Y"));
    $pdf->SetFont('Arial', '', 10);

    $pdf->SetTextColor(42,42,42);
      $pdf->SetDrawColor(160,160,160);
      $pdf->SetXY(20, 78);
      $pdf->Cell(80, 7, 'Nombre', 1, 1, 'C', false);
      $pdf->SetXY(100, 78);
      $pdf->Cell(30, 7, 'Precio', 1, 1, 'C', false);
      $pdf->SetXY(130, 78);
      $pdf->Cell(30, 7, 'Cantidad', 1, 1, 'C', false);
      $pdf->SetXY(160, 78);
      $pdf->Cell(30, 7, 'Subtotal', 1, 1, 'C', false);
    
    $dato_altura = 85;
    $total = 0;
    foreach ($products as $product) {
      
      $pdf->SetFont('Arial', '', 10);
      $pdf->SetXY(20, $dato_altura);
      $pdf->Cell(80, 7, utf8_decode($product -> {'name'}), 1, 1, 'L', false);
      $pdf->SetXY(100, $dato_altura);
      $pdf->Cell(30, 7, "$".$product -> {'price'}." MXN", 1, 1, 'C', false);
      $pdf->SetXY(130, $dato_altura);
      $pdf->Cell(30, 7, $product -> {'quantity'}, 1, 1, 'C', false);
      $pdf->SetXY(160, $dato_altura);
      $pdf->Cell(30, 7, "$".$product -> {'subtotal'}." MXN", 1, 1, 'C', false);
      $total += $product -> {'subtotal'};
      $dato_altura += 7;
    }
    $pdf->SetXY(20, $dato_altura);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(140, 7, "Total", 1, 1, 'R', false);
    
    $pdf->SetXY(160, $dato_altura);
    $pdf->Cell(30, 7, "$".$total." MXN", 1, 1, 'C', false);
    $pdf->SetFont('Arial', '', 10);

    if(isset($_GET["factura"])) {
      $dato_altura += 7;
      $pdf->SetXY(100, $dato_altura);
      $pdf->Cell(60, 7, "IVA (16%, cargo por factura)", 'B', 1, 'R', false);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->SetXY(160, $dato_altura);
      $pdf->Cell(30, 7, "$".($total * .16)." MXN", 'B', 1, 'C', false);
      $pdf->SetFont('Arial', '', 10);
      $dato_altura += 7;
      $pdf->SetXY(100, $dato_altura);
      $pdf->Cell(60, 7, "Total + IVA", 'B', 1, 'R', false);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->SetXY(160, $dato_altura);
      $pdf->Cell(30, 7, "$".($total + ($total * .16))." MXN", 'B', 1, 'C', false);
      $pdf->SetFont('Arial', '', 10);
    }*/
    
    $pdf -> Output('F', $nombre.'_'.Date("dFY").'.pdf');

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        //$mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        /*
        $mail->Username   = 'marianopad@outlook.com';
        $mail->Password   = 'Iamyourfather';
        */

        $mail->Username   = 'riostorres2@gmail.com';
        $mail->Password   = 'bzqdgldjqiaoqsdc';
        
        $mail->SMTPSecure = 'TLS';
        $mail->Port       = 587;
        $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
        );
        
        $mail->setFrom('riostorres2@gmail.com', 'Bicicletas RVL');
        $mail->addAddress($correo);//modificar

        $mail->addAttachment($nombre.'_'.Date("dFY").'.pdf');//modificar idUsuario

        $mail->isHTML(true);
        $mail->Subject = 'Comprobante';
        $mail->Body    = 'Comprobante para '.$nombre.Date("d/F/Y");//cambiar
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    mysqli_close($conexion);

	echo '<meta http-equiv="refresh" content="0;url=../User/carrito.php">';
?>