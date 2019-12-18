<?php
	//variables para los campos de texto
	$nombre = "isaias emmanuel ";
	$apellidos = "ramirez gonzalez";
	$mail = "king.isaias64@gmail.com";
	$mensaje = "gracias por suscribirte , como agradecimiento le enviamos un cupon de regalo";

	//variables para los datos del archivo
	$nameFile = $_FILES['archivo']['name'];
	$sizeFile = $_FILES['archivo']['size'];
	$typeFile = $_FILES['archivo']['type'];
	$tempFile = $_FILES["archivo"]["tmp_name"];
	$fecha= time();
	$fechaFormato = date("j/n/Y",$fecha);
	$carta = "<!DOCTYPE html>
	<html>
	<head>
		
	</head>
	<body>
	<img src='https://fmaps.xyz/Tienda/dist/img/compu.png' alt=''>
	</body>
	</html>";
	$correoDestino = "$mail";
	
	//asunto del correo
	$asunto = "Enviado por " . $nombre . " ". $apellidos;

 	
 	// -> mensaje en formato Multipart MIME
	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: multipart/mixed;";
	//$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
	$cabecera .="boundary=\"=C=T=E=C=\"\r\n";
	$cabecera .= "From: {$mail}";

	//Primera parte del cuerpo del mensaje
	$cuerpo = "--=C=T=E=C=\r\n";
	$cuerpo .= "Content-type: text/plain";
	$cuerpo .= "charset=utf-8\r\n";
	$cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
	$cuerpo .= "\r\n"; // línea vacía
	$cuerpo .= "Correo enviado por: " . $nombre . " ";
	$cuerpo .= " con fecha: " . $fechaFormato . "\r\n";
	$cuerpo .= "Email: " . $mail . "\r\n";
	
	$cuerpo .= "\r\n";// línea vacía

 	// -> segunda parte del mensaje (archivo adjunto)
        //    -> encabezado de la parte
    $cuerpo .= "--=C=T=E=C=\r\n";
    $cuerpo .= "Content-Type: application/octet-stream; ";
    $cuerpo .= "name=" . $nameFile . "\r\n";
    $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
    $cuerpo .= "Content-Disposition: attachment; ";
    $cuerpo .= "filename=" . $nameFile . "\r\n";
    $cuerpo .= "\r\n"; // línea vacía

    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
	$file = chunk_split(base64_encode($file));

    $cuerpo .= "$file\r\n";
    $cuerpo .= "\r\n"; // línea vacía
    // Delimitador de final del mensaje.
    $cuerpo .= "--=C=T=E=C=--\r\n";
    
	//Enviar el correo
	if(mail($correoDestino, $asunto, $carta, $cabecera)){
		echo "Correo enviado";
	}else{
		echo "Error de envio";
	}
