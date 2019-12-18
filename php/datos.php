<?php
require "mysql.php";
$resultado = selectBD('select cantidad from productos_1');
if ($resultado){
    while ($fila=$resultado -> fetch_assoc()){
        echo $fila['cantidad'].",";
    }
   
}

?>
 