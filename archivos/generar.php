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
  $producto = $_POST['txtProducto'];
  $precio = $_POST['txtPrecio'];

	require('fpdf/fpdf.php');
  require('../php/conexion.php');

  //fecha en españo
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

  //crear archivo pdf

	/*$pdf = new FPDF('P', 'mm', 'A4'); //declaración explicita = $pdf = new FPDF() declaración implicita
	$pdf -> AddPage();
  $pdf -> SetAutoPageBreak(true, 15);
  $pdf -> SetFont('Arial', 'B', 16);
  $pdf -> Cell(40,10, utf8_decode('Bicicletas RVL'));
  $pdf -> SetFont('Arial', '', 12);
  $pdf->Cell(20,10, utf8_decode('Recibo de Compra'));
  $pdf->Cell(80,10, Date('d F y'));
  $pdf->Cell(20,20, utf8_decode('Producto'));
  $pdf->Cell(40,20, utf8_decode('Precio'));
  $pdf->Cell(100, 10, $producto. ' $' . $precio);
  //$pdf->Cell();
  $pdf->SetTopMargin(15);
  $pdf->SetLeftMargin(15);
  $pdf->SetRightMargin(15);*/

  /*class PDF extends FPDF {
    function Header() {
        // Encabezado
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Bicicletas RVL', 0, 1);

        // Título
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Recibo de compra', 0, 1);
        $this->Ln(10); // Salto de línea
    }

    function Footer() {
        // Pie de página
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, utf8_decode('Página ' . $this->PageNo()), 0, 0, 'C');
    }
  }

  $pdf = new PDF();
  $pdf->AddPage();

  // Crear tabla
  $pdf->SetFont('Arial', 'B', 12);
  $pdf->Cell(70, 10, 'Producto', 1);
  $pdf->Cell(70, 10, 'Precio', 1);
  $pdf->Ln(); // Salto de línea

  // Ejemplo de fila de producto (puedes agregar más filas con tus datos)
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(70, 10, utf8_decode($producto), 1);
  $pdf->Cell(70, 10, '$'.$precio, 1);
  $pdf->Ln();*/

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
    
    //nomenclatura "Nombre_DiaMesAño_HoraMinutosSegundos.pdf" -> "Luis Francisco_8-Octubre-2023_134730.pdf"
    $nombreArchivo = $nombre . '_' . date("d_F_y_His") . '.pdf';
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