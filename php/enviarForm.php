<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido_p=$_POST['apellido'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
//$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$cp = $_POST['cp'];

// Datos para el correo
$destinatario = "smshopmx@gmail.com";
$asunto = "mensaje a atencion a clientes";

$carta = "mensaje enviado del usuario: $nombre $apellido_p\n";
$carta .= "correo del usuario: $correo \n";
$carta.="estado:  $estado\n";
$carta.="cp: $cp\n";


//$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:contacto.php');

?>