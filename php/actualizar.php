<?php
    require "mysql.php";
    $user = $_POST['nom'];
    $ing = openssl_encrypt($_POST['con'], "AES-128-ECB", "123");


    if (updateDB('UPDATE login set intentos = 0 where usuario = "' . $user . '"; ')) {
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    } else {
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if (updateDB('UPDATE login set estado = 1 where usuario = "' . $user . '"; ')) {
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    } else {
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if (updateDB('UPDATE login set con = "' . $ing . '" where usuario = "' . $user . '"; ')) {
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    } else {
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }
    header('Location:login.php');
?>