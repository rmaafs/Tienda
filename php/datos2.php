<?php
$resultado2 = selectBD('select nombre from productos_1');
if ($resultado2){
    while ($fila2=$resultado2 -> fetch_assoc()){
        echo " ' ".$fila2['nombre']." ' ,";
    }
   
}

?>
 