<?php
require "mysql.php";
require_once "Cupon.php";

$cupon = isset($_GET['cupon']) ? $_GET['cupon'] : "";
$cupones = [];

if (isset($_COOKIE['cupones'])) {
    $cupones = unserialize($_COOKIE['cupones'], ["allowed_classes" => true]);
}

if ($cupon == "") {
    die("false");
}

$nuevaLista = [];
$descuento = 0;
foreach ($cupones as $c) {
    if ($c->cupon != $cupon) {
        array_push($nuevaLista, $c);
    } else {
        $descuento = $c->descuento;
    }
}
setcookie('cupones', serialize($nuevaLista), time() + (86400 * 30), "/");
die($descuento);