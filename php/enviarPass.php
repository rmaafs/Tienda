<?php

require "mysql.php";


// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

//$nombre = "paco";
//$correo = "franciscomedina.05.12.99@gmail.com";
// Datos para el correo
$destinatario = $correo;
$asunto = "recuperacion de contraseña con el codigo ";
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$substring = substr(str_shuffle($permitted_chars), 0, 10);
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "el codigo de rcuperacion de la contraseña es $substring";

// Enviando Mensaje

if(updateDB("UPDATE login set codigo = '". $substring ."' where usuario = '" . $nombre . "'; ")){
    mail($destinatario, $asunto, $carta);
    header('Location:comparacion.php');   
 }else{
    header('Location:FormCorreo2.php');
 }

?>       

