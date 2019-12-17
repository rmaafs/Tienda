<?php
$key = $_GET["key"];


$servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$con = new mysqli($servidor, $cuenta, $password, $bd);
if ($con->connect_errno) {
    die('Error en la conexion');
}

$con->query('DELETE FROM recuperar WHERE id = "' . $key . '" ');
echo $con->error . ", XD " . $con->error_log;