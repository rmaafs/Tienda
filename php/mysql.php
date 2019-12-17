<?php

function conexion() {
    $servidor = '34.94.76.156';
    $cuenta = 'tienda';
    $password = 'curiosoXD';
    $bd = 'tienda';
    $conexion = new mysqli($servidor, $cuenta, $password, $bd);
    if ($conexion->connect_errno) {
        die('Error en la conexion');
    } else {
        return $conexion;
    }
}

function selectBD($sql) {
    $resultado = conexion() -> query($sql);
    if ($resultado -> num_rows){
        return $resultado;
    }
    return null;
}

function insertDB($sql) {
    $conexion = conexion();
    $conexion->query($sql);
    $r = $conexion->affected_rows >= 1;
    mysqli_close($conexion);
    return $r;
}

function deleteDB($sql) {
    $conexion = conexion();
    $conexion->query($sql);
    $r = $conexion->affected_rows >= 1;
    mysqli_close($conexion);
    return $r;
}

function updateDB($sql) {
    $conexion = conexion();
    $conexion->query($sql);
    $r = $conexion->affected_rows >= 1;
    mysqli_close($conexion);
    return $r;
}

?>