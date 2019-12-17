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

$resultado = selectBD('SELECT * from cupones WHERE cupon="' . $cupon . '"');
if ($resultado) {
    $fila = $resultado->fetch_assoc();

    //Verificamos si el cupón ya ha sido utilizado
    foreach ($cupones as $c) {
        if ($c->cupon == $cupon) {
            die("duplicate");
        }
    }

    echo json_encode($fila);

    $nuevoCupon = new Cupon($fila);
    array_push($cupones, $nuevoCupon);
    setcookie('cupones', serialize($cupones), time() + (86400 * 30), "/");
} else {
    die("false");
}
