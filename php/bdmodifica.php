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
$query1= "UPDATE producto SET prodID='$id', prodNombre='$nom', prodDescripcion='$des', prodPrecio='$pre', prodExistencias='$ex', prodImagen='$img' WHERE prodID='$idhost'";

$resultado=$conexion->query($query1);

if($resultado){
    echo "<p>MODIFICADO</p>";
}
else{
    echo "error";
}