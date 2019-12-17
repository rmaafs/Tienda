<?php $servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Top Navigation</title>
    <?php include "favicon.php" ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        body {
            font-family: sans-serif;
        }

        table tr th,
        table tr td {
            text-align: center;
            padding: 1em;
            border-left: 1px solid lightblue;
        }

        table tr {
            border: 1px solid black;

        }

        img {
            width: 35%;
            height: 35%;
        }
    </style>

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Altas, bajas o modificacion de Productos
                        <small></small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="box box-default">
                        <br>
                        
                           <a href="Estadisticas.php" style="margin-left:90%">Estadísticas</a>
                      
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <div class="box-body">
                            <h2>Productos Disponibles</h2>
                            <div>
                                <table class="table">
                                    <tr class="info">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Existencias</th>
                                        <th>Imagen</th>
                                    </tr>
                                    <?php
                                    $sql1 = "SELECT * from producto";
                                    $res = mysqli_query($conexion, $sql1);
                                    while ($mostrar = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr class="active">
                                            <td><?php echo $mostrar['prodID'] ?></td>
                                            <td><?php echo $mostrar['prodNombre'] ?></td>
                                            <td><?php echo $mostrar['prodDescripcion'] ?></td>
                                            <td>$<?php echo $mostrar['prodPrecio'] ?></td>
                                            <td><?php echo $mostrar['prodExistencias'] ?> Unidades</td>
                                            <td><img class="img-rounded" src="<?php echo $mostrar['prodImagen'] ?>" alt="imagen">
                                                Ruta: <b><?php echo $mostrar['prodImagen'] ?></b></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <h2>¿Que deseas hacer?</h2>
                            <div class="row" style="text-align:center;">

                                <div class="col-lg-4"><input class="btn btn-success" type="button" id="altas" onclick="altas()" value="Altas"></div>
                                <div class="col-lg-4"><input class="btn btn-danger" type="button" id="bajas" onclick="bajas()" value="Bajas"></div>
                                <div class="col-lg-4"><input class="btn btn-primary" type="button" id="modificar" onclick="modificar()" value="Modificar"></div>

                            </div>

                            <div id="mostrar"></div>
                            <div id="contenido"></div>
                            <div id="res" class="table-responsive"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "includes/footer.php" ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>

    <script>
        function limpiar() {
            document.getElementById('mostrar').innerHTML = "";
            document.getElementById('contenido').innerHTML = "";
            document.getElementById("res").innerHTML = "";
        }

        function altas() {
            tipo = 1;
            limpiar();
            document.getElementById('mostrar').innerHTML = "<br> <p> Ingresaste a altas </p>";
            agregar();
        }

        function bajas() {
            tipo = 2;
            limpiar();
            document.getElementById('mostrar').innerHTML = "<br> <p> Ingresaste a bajas </p>";

            idmostrar();
        }

        function modificar() {
            tipo = 3;
            limpiar();
            document.getElementById('mostrar').innerHTML = "<br> <p> Ingresaste a modificar </p>";

            idmostrar();
        }

        function idmostrar() {

            var x = document.createElement('P');
            x.innerHTML += "<br> Ingresa el id a buscar <br>";
            x.innerHTML += "<input type='number' id='id'> <br> <br>";
            x.innerHTML += "<input class='btn btn-info' type='button' onclick='verificar()' value='Aceptar'>";
            document.getElementById('mostrar').appendChild(x);
        }

        function verificar() {
            document.getElementById("contenido").innerHTML = "";
            document.getElementById("res").innerHTML = "";
            var id = document.getElementById("id").value;
            var xhttp = new XMLHttpRequest();
            if (id == "") {
                document.getElementById("contenido").innerHTML = "Ingresa un ID";
                return;
            }
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response != "error") {
                        //document.getElementById("contenido").innerHTML=tipo1;
                        document.getElementById("contenido").innerHTML += this.response;
                        if (tipo == 1) {
                            agregar(id);
                        }
                        if (tipo == 2) {
                            eliminar(id)
                        }
                        if (tipo == 3) {
                            modificar1(id);
                        }
                    } else {
                        document.getElementById("contenido").innerHTML = "ID incorrecto, vuelva a intentarlo";
                    }
                }
            };
            xhttp.open("GET", "bdbusca.php?q=" + id, true);
            xhttp.send();
        }

        function modificar1(id) {
            idhost = id;
            document.getElementById("res").innerHTML = "<p>Ahora puedes modificar el producto con id: " + id + "</p>";
            ta = document.getElementById("res");
            ta.innerHTML += "<table id='tabla' class='table'> <tr class='info'> <th>ID</th> <th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Existencias</th> <th>Imagen</th> </tr> </table>";
            var elemento = document.createElement('tr');
            elemento.innerHTML += "<td><input type='number' id='idmod' value='id'></td>"
            elemento.innerHTML += "<td><input type='text' id='nommod'></td>"
            elemento.innerHTML += "<td><input type='text' id='desmod'></td>"
            elemento.innerHTML += "<td><input type='number' id='premod'></td>"
            elemento.innerHTML += "<td><input type='number' id='exmod'></td>"
            elemento.innerHTML += "<td><input type='text' id='imgmod'></td>"
            document.getElementById('tabla').appendChild(elemento);
            ta.innerHTML += "<br> <input class='btn btn-info' type='button' value='Enviar' onclick='mod()'>";
        }

        function mod() {
            var idmod = document.getElementById("idmod").value;
            var nommod = document.getElementById("nommod").value;
            var desmod = document.getElementById("desmod").value;
            var premod = document.getElementById("premod").value;
            var exmod = document.getElementById("exmod").value;
            var imgmod = document.getElementById("imgmod").value;
            var xhttp1 = new XMLHttpRequest();
            if (idmod == "" || nommod == "" || desmod == "" || premod == "" || exmod == "" || imgmod == "") {
                document.getElementById("res").innerHTML = "COMPLETA EL FORMULARIO";
                return;
            }
            xhttp1.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response != "error") {
                        //document.getElementById("contenido").innerHTML=tipo1;
                        document.getElementById("res").innerHTML += this.response;
                    } else {
                        document.getElementById("res").innerHTML = "<p>No se modifico, el ID al que quieres modificar ya existe</p>";
                    }
                }
            };
            xhttp1.open("GET", "bdmodifica.php?a=" + idmod + "&b=" + nommod + "&c=" + desmod + "&d=" + premod + "&e=" + exmod + "&f=" + imgmod + "&ag=" + idhost, true);
            xhttp1.send();
        }

        function agregar() {
            document.getElementById("res").innerHTML = "<p>Ahora puedes agregar algun producto </p>";
            var ta1 = document.getElementById("res");
            ta1.innerHTML += "<table id='tabla1' class='table'> <tr class='info'> <th>ID</th> <th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Existencias</th> <th>Imagen</th> </tr> </table>";
            var elemento = document.createElement('tr');
            elemento.innerHTML += "<td><input type='number' id='idag'></td>"
            elemento.innerHTML += "<td><input type='text' id='nomag'></td>"
            elemento.innerHTML += "<td><input type='text' id='desag'></td>"
            elemento.innerHTML += "<td><input type='number' id='preag'></td>"
            elemento.innerHTML += "<td><input type='number' id='exag'></td>"
            elemento.innerHTML += "<td><input type='text' id='imgag'></td>"
            document.getElementById('tabla1').appendChild(elemento);
            ta1.innerHTML += "<br> <input class='btn btn-info' type='button' value='Enviar' onclick='ag()'>";
        }

        function ag() {
            var idag = document.getElementById("idag").value;
            var nomag = document.getElementById("nomag").value;
            var desag = document.getElementById("desag").value;
            var preag = document.getElementById("preag").value;
            var exag = document.getElementById("exag").value;
            var imgag = document.getElementById("imgag").value;
            var xhttp2 = new XMLHttpRequest();
            if (idag == "" || nomag == "" || desag == "" || preag == "" || exag == "" || imgag == "") {
                document.getElementById("res").innerHTML = "COMPLETA EL FORMULARIO";
                return;
            }
            xhttp2.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response != "error") {
                        //document.getElementById("contenido").innerHTML=tipo1;
                        document.getElementById("res").innerHTML += this.response;
                    } else {
                        limpiar();
                        document.getElementById("res").innerHTML = "<br>Error al agregar. Ingresaste un ID EXISTENTE ";
                    }
                }
            };
            xhttp2.open("GET", "bdagrega.php?g=" + idag + "&h=" + nomag + "&i=" + desag + "&j=" + preag + "&k=" + exag + "&l=" + imgag, true);
            xhttp2.send();
        }

        function eliminar(id) {
            val = id;
            var ta1 = document.getElementById("res");
            document.getElementById("res").innerHTML = "Estas por eliminar el id :" + id + " ¿Estas seguro?";
            ta1.innerHTML += "<br> <input class='btn btn-info' type='button' value='Eliminalo' onclick='el()'>";
        }

        function el() {
            var xhttp2 = new XMLHttpRequest();
            xhttp2.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response != "error") {
                        //document.getElementById("contenido").innerHTML=tipo1;
                        document.getElementById("res").innerHTML += this.response;
                    } else {
                        document.getElementById("res").innerHTML = "Error";
                    }
                }
            };
            xhttp2.open("GET", "bdelimina.php?a=" + val, true);
            xhttp2.send();

        }
    </script>
</body>

</html>