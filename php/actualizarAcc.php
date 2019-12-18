<?php
require "mysql.php";

$colorFondo = $_POST["colorFondo"];
$tamanoLetra = $_POST["tamanoLetra"];
$usuario = $_COOKIE['user'];

setcookie('colorFondo', $colorFondo, time() + (86400 * 30 * 24), "/");
setcookie('tamanoLetra', $tamanoLetra, time() + (86400 * 30 * 24), "/");

if (selectBD("SELECT usuario FROM accesibilidad WHERE usuario='$usuario'")) {
    if (updateDB("UPDATE accesibilidad SET color='$colorFondo', letra='$tamanoLetra' WHERE usuario='$usuario'")) {
        die("true");
    }
} else {
    if (insertDB("INSERT INTO accesibilidad (usuario, color, letra) VALUES('$usuario','$colorFondo','$tamanoLetra')")) {
        die("true");
    }
}
die("" . $usuario);
