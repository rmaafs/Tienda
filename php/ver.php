<?php
require "mysql.php";

$user = $_POST['nom'];
$ing = $_POST['cod'];

$check = selectBD('select codigo from login where usuario = "' . $user . '"');
$c1 = $check->fetch_assoc();
$c2 = $c1['codigo'];

if ($ing == $c2) {
    //echo "Esta vivo";
    header('Location:nuevaC.php');
} else {
    header('Location:comparacion.php');
}

?>


