<?php
require "mysql.php";
$fontSize;
$fondo;
$letra;
$user = $_COOKIE["user"];

$resultado = selectBD('select tam, fondo, letra from login where usuario = "' . $user . ' "'); //Seleccionar el campo usNombre de la tabla usuarios
if ($resultado) { //Si $resultado != null, significa que si hay resultados del query.
    $fila = $resultado->fetch_assoc(); //Obtenemos los resultados de LA PRIMERA FILA y lo ponemos en $fila.
    $fontSize = $fila['tam']; //Obtenemos el campo usNombre de $fila.
    $fondo = $fila["fondo"];
    $letra = $fila["letra"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Accesibilidad</title>

</head>

<body>
    <button onclick="claro()">Claro</button>
    <br>
    <button onclick="obscuro()">Obscuro</button>
    <br>
    <button onclick="zoomIn()">Aumentar</button>
    <br>
    <button onclick="zoomOut()">Disminuir</button>
    <br>
    <button onclick="save()">Guardar</button>
    <button onclick="ZoomIn()">Iniciar</button>
    
    
    <div>
        <h2>Fuente establecida con <strong>em</strong></h2>
        Esta fuente esta establecida con em, por lo que su tamaño sera modificado con javascript
    </div>

    <span>El texto en la eqiqueta span se verá así</span>

    <p>En los parrafos el texto será así</p>

    <header>Los encabezados son así</header>

    <aside>En los asides se verá de este manera.</aside>
    <br>
    <aside>En los asides se verá de este manera.</aside>
    <div id="demo">

    </div>

    
    <script>
        var fontSize = <?php echo $fontSize; ?>;
        var f = '<?php echo $fondo; ?>';
        var l = '<?php echo $letra; ?>';

        // funcion para aumentar la fuente
        function zoomIn() {
            fontSize += 0.1;
            document.body.style.fontSize = fontSize + "em";
        }

        // funcion para disminuir la fuente
        function zoomOut() {
            fontSize -= 0.1;
            document.body.style.fontSize = fontSize + "em";
        }

        function claro() {
            f = '#FFF';
            l = '#000';
            document.body.style.backgroundColor = f;
            document.body.style.color = l;
            //alert("Blanco");
        }

        function obscuro() {
            l = '#FFF';
            f = '#000';
            document.body.style.backgroundColor = f;
            document.body.style.color = l;
        }

        function save() {
            /*var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "col.php", true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            alert("f: " + f + ", l: " + l);
            xhttp.send();
            alert("hola");*/
            //location.href="fondo.php";


            const http = new XMLHttpRequest()
            http.open('POST', 'col.php')
            http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
            http.send("fontSize=" + fontSize + "&f=" + f + "&l=" + l) // Make sure to stringify
            http.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        }
    </script>
</body>

</html>