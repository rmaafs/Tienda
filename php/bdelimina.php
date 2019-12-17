<?php
$servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
}

$id=$_GET['a'];

$query2="DELETE FROM productos_1 WHERE id='$id'";

$resultado=$conexion->query($query2);

if($resultado){
    echo "<p>Eliminado</p>";
}
else{
    echo "error";
}