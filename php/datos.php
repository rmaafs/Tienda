<?php
require "mysql.php";
$resultado = selectBD('select valores from valores_grafica');
if ($resultado){
    while ($fila=$resultado -> fetch_assoc()){
        echo $fila['valores'].",";
    }
   
}

?>
 