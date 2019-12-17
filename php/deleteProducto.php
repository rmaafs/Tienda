<?php
require_once("Producto.php");

$listaEliminar = explode(",", $_POST["producto"]);

$productos = [];
if (isset($_COOKIE['array'])) {
    $productos = unserialize($_COOKIE['array'], ["allowed_classes" => true]);
}

$nuevaLista = [];

foreach ($productos as $p) {
    if (!in_array($p->id, $listaEliminar)) {
        array_push($nuevaLista, $p);
    }
}

setcookie('array', serialize($nuevaLista), time() + (86400 * 30), "/"); // 86400 = 1 day
