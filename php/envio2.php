<?php
	//variables para los campos de texto
	$nombre = "SMShop";
	
	$mail = $_POST['correo'];
	$mensaje = "gracias por suscribirte , como agradecimiento le enviamos un cupon de regalo";
	$img=$_POST['archivo'];

	//variables para los datos del archivo
	
	$fecha= time();
	$fechaFormato = date("j/n/Y",$fecha);
	$carta.="Content-type:text/html";
	$carta = "<!DOCTYPE html>
	<html>
	<head>
		
	</head>
	<body>
	<img src='". $img . "' alt=''>
	</body>
	</html>";
	$correoDestino = "$mail";
	
	//asunto del correo
	$asunto = "Enviado por " . $nombre;

 	
 	// -> mensaje en formato Multipart MIME
	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: text/html; charset=iso-8859-1";
	//$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
	$cabecera .="boundary=\"=C=T=E=C=\"\r\n";
	$cabecera .= "From: {$mail}";

	//Primera parte del cuerpo del mensaje


 	// -> segunda parte del mensaje (archivo adjunto)
    
 
	//Enviar el correo
	if(mail($correoDestino, $asunto, $carta, $cabecera)){
		echo "Correo enviado";
	}else{
		echo "Error de envio";
	}
