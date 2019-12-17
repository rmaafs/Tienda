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
$existencias = $_GET['existencias'];

$productos = [];
if(isset($_COOKIE['array'])){
    $productos = unserialize($_COOKIE['array'], ["allowed_classes" => true]);
}

//Verificamos si el producto ya existe en el carrito, en caso de que exista
//vamos a retornar una respuesta 0
foreach ($productos as $p) {
    if ($p->id == $id) {
        die("0");
    }
}

$p = new Producto(null);
$p->id = $id;
$p->nombre = $nombre;
$p->descripcion = $descripcion;
$p->unidades = $Cantidad;
$p->precio = $precio;
$p->imagen = $imagen;
$p->existencias = $existencias;

array_push($productos, $p);
setcookie('array', serialize($productos), time() + (86400 * 30), "/"); // 86400 = 1 day

?>