<?php
$servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
}

$sql = "SELECT id, imagen, nombre, precio, tipo, descripcion, Cantidad
FROM productos_1 WHERE id = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($prodID, $prodImagen, $prodNombre, $prodPrecio, $prodTipo, $prodDescripcion, $prodExistencias);
$stmt->fetch();
$stmt->close();
if($prodID==$_GET['q']){

echo "<table class='table'>";
echo "<tr class='info'>";
echo "<th>ID</th>";
echo "<th>NOMBRE</th>";
echo "<th>TIPO</th>";
echo "<th>DESCRIPCION</th>";
echo "<th>PRECIO</th>";
echo "<th>EXISTENCIAS</th>";
echo "<th>IMAGEN</th>";
echo "</tr>";
echo "<tr class='active'>";
echo "<td>".$prodID."</td>";
echo "<td>".$prodNombre."</td>";
echo "<td>".$prodTipo."</td>";
echo "<td>".$prodDescripcion."</td>";
echo "<td>$".$prodPrecio."</td>";
echo "<td>".$prodExistencias." Unidades</td>";
echo "<td> <img class='img-rounded' src='".$prodImagen."'></td>";
echo "</tr>";
echo "</table>";
}
else{
  echo "error";
}
?>