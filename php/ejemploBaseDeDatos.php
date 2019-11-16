<?php

//require "mysql.php"; //Descomenté esta línea para evitar hacer peticiones la base de datos sin querer.

//Obtenemos resultados
$resultado = selectBD('select usNombre from usuarios');//Seleccionar el campo usNombre de la tabla usuarios
if ($resultado){//Si $resultado != null, significa que si hay resultados del query.
    $fila = $resultado -> fetch_assoc();//Obtenemos los resultados de LA PRIMERA FILA y lo ponemos en $fila.
    echo "Hola " . $fila['usNombre'];//Obtenemos el campo usNombre de $fila.
}

//Obtenemos resultados
$resultado = selectBD('select usNombre from usuarios');//Seleccionar el campo usNombre de la tabla usuarios
if ($resultado){//Si $resultado != null, significa que si hay resultados del query.
    while ($fila = $resultado -> fetch_assoc()) {//Vamos a ciclar cada FILA que nos ha retornado la consulta, y se guarda en $fila
        //En caso de que el query nos retorne 3 filas, en cada vuelta del while, $fila va a cambiar.
        echo "Hola " . $fila['usNombre'];//Obtenemos el campo usNombre de $fila.
    }
}

//Insertar datos
//La consulta dice: INSERTA en la tabla usuarios (en orden de campos usNombre, usUsuario, usPass) los datos (en orden de campos Rodrigo, rmaafs, 123)
if (insertDB("INSERT INTO usuarios (usNombre, usUsuario, usPass) VALUES('Rodrigo','rmaafs','123')")){
    //Regresa verdadero si se ha insertado correctamente.
} else {
    //Retornará false si no se insertó correctamente (El query está mal)
}

//Actualizar datos
//La consulta dice: ACTUALIZA de la tabla usuarios, el campo usNombre a Rodrigo Maafs, cuando el id sea 1
if (updateDB("UPDATE usuarios SET usNombre='Rodrigo Maafs' WHERE id='1'")){
    //Regresa verdadero si se ha actualizado correctamente.
} else {
    //Retornará false si no se actualizó correctamente (El query está mal)
}

//Eliminar datos
//La consulta dice: ELIMINA de la tabla usuarios cuando el id sea 1
if (deleteDB("DELETE FROM usuarios WHERE id='1'")){
    //Regresa verdadero si se ha eliminado correctamente.
} else {
    //Retornará false si no se eliminó correctamente (El query está mal)
}

?>