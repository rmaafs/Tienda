<?php
$servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
}

$id=$_GET['g'];
$nom=$_GET['h'];
$des=$_GET['i'];
$pre=$_GET['j'];
$ex=$_GET['k'];
$img="../img/".$_GET['l'];
$query2="INSERT INTO producto(prodID, prodNombre, prodDescripcion, prodPrecio, prodExistencias, prodImagen) VALUES ('$id','$nom','$des','$pre','$ex','$img')";

$resultado=$conexion->query($query2);

if($resultado){
    echo "<p>Agregado con exito!!</p>";
}
else{
    echo "error";
}