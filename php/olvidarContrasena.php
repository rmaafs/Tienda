<?php
require "mysql.php";
$user = $_POST["user"];

$resultado = selectBD("SELECT email FROM login WHERE usuario='" . $user .  "'");
if ($resultado) {
    $fila = $resultado -> fetch_assoc();

    $key = getKey(70);
    if (insertDB("INSERT INTO recuperar (id, usuario) VALUES('$key','$user')")) {
        echo $fila['email'] . "\nURL: recuperarCuenta.php?key=" . $key;
    }
    
} else {
    die("false");
}

function getKey($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
}
