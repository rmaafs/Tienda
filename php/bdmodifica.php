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
$nom=$_GET['b'];
$des=$_GET['c'];
$pre=$_GET['d'];
$ex=$_GET['e'];
$img="../img/".$_GET['f'];
$idhost=$_GET['ag'];
$tipo=$_GET['t'];
$query1= "UPDATE productos_1 SET id='$id', imagen='$img', nombre='$nom', precio='$pre', tipo='$tipo', descripcion='$des', Cantidad='$ex' WHERE id='$idhost'";

$resultado=$conexion->query($query1);

if($resultado){
    echo "<p>MODIFICADO</p>";
}
else{
    echo "error";
}