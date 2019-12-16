<?php
    require "mysql.php";
    $n = $_POST["fontSize"] ;
    $back = $_POST["f"] ;
    $font = $_POST["l"];
    $user = $_COOKIE["user"];  
    
    echo $back;
    echo $font;

    if(updateDB("UPDATE login set tam = '". $n ."' where usuario = '" . $user . "'; ")){
       // echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if(updateDB("UPDATE login set fondo = '". $back ."' where usuario = '" . $user . "'; ")){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
        //echo "<br>";
        //echo "Fallo al actualizar el estado";
    }

    if(updateDB("UPDATE login set letra = '". $font ."' where usuario = '" . $user . "'; ")){
        //echo "<br>";
        //echo "se actualizo el intento el estado";
    }else{
       // echo "<br>";
        //echo "Fallo al actualizar el estado";
    }
?>


