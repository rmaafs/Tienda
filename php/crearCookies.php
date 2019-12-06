<?php
    require "mysql.php";
    if(updateDB('UPDATE login set ACC = 1 where usuario = "pacoMedina"; ')){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }


    if(updateDB('UPDATE login set tam = 1 where usuario = "pacoMedina"; ')){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if(updateDB("UPDATE login set fondo = '#FFF' where usuario = 'pacoMedina'; ")){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if(updateDB("UPDATE login set letra = '#000' where usuario = 'pacoMedina'; ")){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }
?>