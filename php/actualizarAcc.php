<?php
require "mysql.php";

$colorFondo = $_POST["colorFondo"];
$tamanoLetra = $_POST["tamanoLetra"];
$usuario = $_SESSION['usuario'];

$_SESSION["colorFondo"] = $colorFondo;
$_SESSION["tamanoLetra"] = $tamanoLetra;//

if (selectBD("SELECT usuario FROM accesibilidad WHERE usuario='$usuario'")) {
    if (updateDB("UPDATE accesibilidad SET color='$colorFondo', letra='$tamanoLetra' WHERE usuario='$usuario'")) {
        die("true");
    }
} else {
    if (insertDB("INSERT INTO accesibilidad (usuario, color, letra) VALUES('$usuario','$colorFondo','$tamanoLetra')")) {
        die("true");
    }
}
die("false");
