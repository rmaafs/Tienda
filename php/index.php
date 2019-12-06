<!-- CONEXION A LA BASE DE DATOS -->

<?php

$servidor = '34.94.76.156';
$cuenta = 'tienda';
$password = 'curiosoXD';
$bd = 'tienda';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_errno) {
    die('Error en la conexion');
}

?>
<!-- CONEXION A LA BASE DE DATOS FIN -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>

        <?php include "titlePrefix.php"; ?>Top Navigation</title>
    <?php include "favicon.php" ?>

    <!------------------------------------------------------------ LINKS ------------------------------------------------------------>


    <!-- Le dice al navegador que sea responsivo -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4328fe96d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Chat -->
    <?php include "includes/chat.php" ?>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Link de tabla css -->
    <link rel="stylesheet" href="../dist/css/productostabla.css">
    <!-- Extra styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!------------------------------------------------------------ LINKS FIN ------------------------------------------------------------>


</head>

<!------------------------------------------------------------ NAV ------------------------------------------------------------>


<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <!------------------------------------------------------------ NAV FIN ------------------------------------------------------------>


        <!------------------------------------------------------------ WRAPPER ------------------------------------------------------------>


        <div class="content-wrapper">
            <div>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        SMShop
                        <small>"A la vanguardia a través de la tecnología"</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!------------------------------------------------------- DATOS DE PRODUCTOS ------------------------------------------------------->

                    <div class="box box-info" style="padding:10px;">

                        <!-- Categoria -->

                        <label>Seleccionar categoría: </label></dt>
                        <dd><span class="select">
                                <select id="selectC">
                                    <option value="Noselect">-No Seleccionado-</option>
                                    <option value="Categoria1">Laptops</option>
                                    <option value="Categoria2">Celulares</option>
                                </select>
                                <button name="cat" href="#" onclick="checar()" style="border-radius: 5px; background: lightblue; color: #000;">Seleccionar</button>
                                <p id="c"></p>

                                <!-- CHECA EL TIPO DE CATEGORIA -->
                                <script>
                                    function checar() {
                                        if (document.getElementById("selectC").value == "Categoria1") {
                                            redirectCat1()
                                        } else if (document.getElementById("selectC").value == "Categoria2") {
                                            redirectCat2();
                                        } else if (document.getElementById("selectC").value == "Noselect") {
                                            location.replace("http://localhost/Tienda/php/index.php?CAT=1");
                                        }

                                    }

                                    function redirectCat1() {
                                        location.replace("http://localhost/Tienda/php/index.php?CAT=1");
                                    }

                                    function redirectCat2() {
                                        location.replace("http://localhost/Tienda/php/index.php?CAT=2");
                                    }
                                //Funcion que agrega al carrito
                                    function add(id,imagen,nombre,precio,tipo,descripcion,Cantidad) {
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                               // document.getElementById("").innerHTML = this.responseText;
                                            }
                                        };

                                        //pasa por el metodo get a addArray.php
                                        xhttp.open("GET", "addArray.php?id="+id+"&imagen="+imagen+"&nombre="+nombre+"&precio="+precio+"&tipo="+tipo+"&descripcion="+descripcion+"&Cantidad="+Cantidad, true);
                                        xhttp.send();
                                    }

                                </script>
                                <!-- CHECA EL TIPO DE CATEGORIA -->

                                <!-- Categoria FIN -->


                                <!-------------------------------------------- MUESTRA DE PRODUCTOS ---------------------------------------------->
                                <h4>
                                    <p>Algunos de nuestros productos</p>
                                </h4>
                                <table>
                                    <?php
                                    require "Producto.php";

                                    $tipo = "Celular";
                                    if (isset($_GET['CAT'])) {
                                        $tipo = $_GET['CAT'];

                                        if ($tipo == 1) {
                                            $tipo = "Laptop";
                                        }else{
                                            $tipo = "Celular";
                                        }
                                    }


                                    $sql = "SELECT * from productos_1 where tipo='" . $tipo . "'";
                                    $result = mysqli_query($conexion, $sql);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                        <tr>
                                            <td id="td"><?php echo $mostrar['id'] ?></td>
                                            <td id="td"><img class="w3-hover-sepia" style="width:70px; height:60px;" src="<?php echo $mostrar['imagen'] ?>"></td>
                                            <td id="td"><?php echo $mostrar['nombre'] ?></td>
                                            <td id="td">$<?php echo $mostrar['precio'] ?></td>
                                            <td id="td"><?php echo $mostrar['tipo'] ?></td>
                                            <td id="td"><?php echo $mostrar['descripcion'] ?></td>
                                            </td>
                                            <td id="td"><?php echo $mostrar['Cantidad'] ?></td>
                                            </td>
                                            <td id="td"><button name="botonCarrito" href="" onclick="add('<?php echo $mostrar['id'] ?>','<?php echo $mostrar['imagen'] ?>','<?php echo $mostrar['nombre'] ?>','<?php echo $mostrar['precio'] ?>','<?php echo $mostrar['tipo'] ?>','<?php echo $mostrar['descripcion'] ?>','<?php echo $mostrar['Cantidad'] ?>');" style="border-radius: 5px; background: lightblue; color: #000;">Agregar al Carrito</button></td>

                                        </tr>


                                    <?php
                                    }

                                    ?>
                                </table>
                                <!-------------------------------------------- MUESTRA DE PRODUCTOS FIN ---------------------------------------------->


                    </div>
                    <!------------------------------------------------------- DATOS DE PRODUCTOS FIN ------------------------------------------------------->


                    <div class="box box-default">
                        <div class="box-body">
                            <div class="unified_widget rcmBody" ,="" style="margin:20px">
                                <h2 style="text-align:left;">Promociones: Nuevas ofertas, todos los días</h2>
                                <p style="text-align:left;">
                                    <span>

                                        Si buscas ofertas y promociones especiales de SMShop México, visita nuestra página de Promociones. Nuestras <b>Ofertas del Día</b> son las ofertas más destacadas. Nuestras <b>Ofertas Relámpago</b> son ofertas de tiempo limitado con precios extraordinarios, cómpralas rápidamente ya que estas ofertas se acabarán en poco tiempo. Nuestras <b>Ofertas destacadas</b> incluyen cientos de productos dentro de SMShop.com.mx.

                                    </span>
                                </p>
                                <p style="text-align:left;">

                                    Regresa frecuentemente porque nuestras promociones se actualizan diario.

                                </p>
                                <p style="text-align:left">

                                </p>
                                <p style="text-align:left">

                                    Para conocer los Términos y condiciones de las ofertas consulta la <a href="ayuda.php">Sección de ayuda</a>.

                                </p>
                                <div class="h_rule">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
            <div>



            </div>

        </div>
        <!------------------------------------------------------------ CONTADOR DE VISITAS ------------------------------------------------------------>

        <a><img src="https://counter6.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=se5dkchz6h1kfuhrhfbeprl1a4csnzr4" border="0" title="contador de visitas" alt="contador de visitas"></a>


        <!------------------------------------------------------------ CONTADOR DE VISITAS FIN ------------------------------------------------------------>





        <!------------------------------------------------------------ FOOTER ------------------------------------------------------------>

        <?php include "includes/footer.php" ?>

        <!------------------------------------------------------------ FOOTER FIN ------------------------------------------------------------>
    </div>


    <!------------------------------------------------------------ WRAPPER FIN ------------------------------------------------------------>



    <!------------------------------------------------------------ SCRIPTS ------------------------------------------------------------>

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

    <!------------------------------------------------------------ SCRIPTS FIN ------------------------------------------------------------>

</body>


</html>