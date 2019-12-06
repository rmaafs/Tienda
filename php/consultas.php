
<?php
   function conexion() {
    $servidor = '34.94.76.156';
    $cuenta = 'tienda';
    $password = 'curiosoXD';
    $bd = 'tienda';
    $conexion = new mysqli($servidor, $cuenta, $password, $bd);
    if ($conexion->connect_errno) {
        die('Error en la conexion');
    }
}

function selectBD($sql) {
    $resultado = conexion() -> query($sql);
    if ($resultado -> num_rows){
        return $resultado;
    }

    return null;
}

$resultado = selectBD('select * from productos_1 where id='. $_GET['id'] .'');//Seleccionar el campo usNombre de la tabla usuarios
if ($resultado){//Si $resultado != null, significa que si hay resultados del query.
    $fila = $resultado -> fetch_assoc();//Obtenemos los resultados de LA PRIMERA FILA y lo ponemos en $fila.
    echo "Id " . $fila['id'];
    echo "<br>";
    echo "Nombre: " . $fila['nombre'];
    echo "<br>";
    echo "Precio " . $fila['precio'];//Obtenemos el campo usNombre de $fila.
    echo "<br>";
    echo "Tipo " . $fila['tipo'];//Obtenemos el campo usNombre de $fila
    echo "<br>";
    echo "Descripcion " . $fila['descripcion'];//Obtenemos el campo usNombre de $fila
    echo "<br>";
    echo "Cantidad " . $fila['Cantidad'];//Obtenemos el campo usNombre de $fila
    
}else{
    echo "Error, datos no encontrados";
}


?>