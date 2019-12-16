<?php
require "Producto.php";
//Declaramos las variables 

$id = $_GET['id'];
$imagen = $_GET['imagen'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$nombre = $_GET['tipo'];
$descripcion = $_GET['descripcion'];
$Cantidad = $_GET['Cantidad'];

$productos = [];
if(isset($_COOKIE['array'])){
    $productos = unserialize($_COOKIE['array'], ["allowed_classes" => true]);
}

$p = new Producto();
$p->id = $id;
$p->nombre = $nombre;
$p->descripcion = $descripcion;
$p->unidades = "piezas";
$p->precio = $precio;
$p->imagen = $imagen;
$p->existencias = $Cantidad;
$p->cantidad = 1;

array_push($productos, $p);
setcookie('array', serialize($productos), time() + (86400 * 30), "/"); // 86400 = 1 day
?>