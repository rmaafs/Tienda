<?php
require "mysql.php";
require "Producto.php";

$id = $_GET["id"];
$puntuacion = rand(5, 9);
$opiniones = rand(10, 300);

$prod = new Producto(null);

$resultado = selectBD('SELECT * FROM productos_1 WHERE id="' . $id . '"');
if ($resultado) {
    $fila = $resultado->fetch_assoc();
    $prod = new Producto($fila);
} else {
    $resultado = selectBD('SELECT * FROM productos_1 WHERE id="1"');
    $fila = $resultado->fetch_assoc();
    $prod = new Producto($fila);
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
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel='stylesheet' id='hestia_fonts-css' href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CRoboto+Slab%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.3.0' type='text/css' media='all' />
    <style>
        .producto {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        }

        .nombre {
            font-weight: bold;
        }

        .descripcion,
        .fecha-despacho {
            color: #999;
        }

        .puntuacion {
            color: #FF960B;
        }

        .opiniones {
            float: right;
        }

        .precio {
            display: inline-block;
            color: #f30240;
            font-size: 30px;
            line-height: .8;
            font-weight: 700;
        }

        td {
            padding: 10px;
        }

        .rojo {
            color: #f30240;
            font-weight: 400;
        }

        .foto {
            width: 100%;
            height: 100%;
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
                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-12">
                            <!-- Box Comment -->
                            <div class="box box-widget">
                                <div class="box-body">

                                    <table width="100%">
                                        <tr>
                                            <td width="45%">
                                                <img class="img-responsive pad foto" src="<?php echo $prod->imagen; ?>" alt="Photo">
                                            </td>
                                            <td>
                                                <p class="nombre"><?php echo $prod->nombre; ?></p>
                                                <p class="descripcion"><?php echo $prod->descripcion; ?></p>
                                                <div class="col-md-4" style="padding: 0px;"><span class="categoria">Categoria: <?php echo $prod->tipo; ?></span></div>
                                                <div class="col-md-3"><span class="puntuacion"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <?php echo "4." . $puntuacion; ?></span></div>
                                                <div class="col-md-5"><span class="opiniones"><?php echo $opiniones; ?> opiniones de los usuarios</span><br><br></div>

                                                <table id="info">
                                                    <tr>
                                                        <td class="tipo">Precio:</td>
                                                        <td class="precio">MXN$<?php echo $prod->precio; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tipo">Envío:</td>
                                                        <td class="envio"> <span class="rojo">MXN$211</span> a Mexico Vía Envío Apresurado
                                                            <p class="fecha-despacho">Fecha de despacho: <span class="rojo">Dec 21 - Dec 25</span>, Tiempo estimado de envío: <span class="rojo">4-9</span> días hábiles</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tipo">Color:</td>
                                                        <td class="colores">
                                                            <button type="button" class="btn btn-danger btn-flat">Rojo</button>
                                                            <button type="button" class="btn bg-purple btn-flat">Morado</button>
                                                            <button type="button" class="btn btn-success btn-flat">Verde</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tipo">Cantidad:</td>
                                                        <td>
                                                            <div class="input-group margin">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-danger" onclick="changeCantidad(<?php echo $prod->id . ", -1"; ?>);">-</button>
                                                                </div>
                                                                <form action="finalizarCompra.php" method="POST" id="formComprar">
                                                                    <input type="hidden" name="producto[]" value="<?php echo $prod->id; ?>">
                                                                    <input type="hidden" name="<?php echo $prod->id; ?>-nombre" value="<?php echo $prod->nombre; ?>">
                                                                    <input type="hidden" name="<?php echo $prod->id; ?>-descripcion" value="<?php echo $prod->descripcion; ?>">
                                                                    <input type="hidden" name="<?php echo $prod->id; ?>-precio" value="<?php echo $prod->precio; ?>">
                                                                    <input type="hidden" name="subtotal" value="0">
                                                                    <input type="hidden" name="promocion" value="0">
                                                                    <input type="hidden" name="total" value="0">
                                                                    <input type="number" class="form-control" id="<?php echo $prod->id; ?>-cantidad" name="<?php echo $prod->id; ?>-cantidad" value="<?php echo $prod->unidades; ?>" style="text-align: center;">
                                                                </form>

                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-danger" onclick="changeCantidad(<?php echo $prod->id . ", 1"; ?>);">+</button>
                                                                </div>
                                                            </div>
                                                            <div class="input-group margin">
                                                                <?php echo $prod->existencias; ?> unidades disponibles
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="col-md-6" style="padding:1px;"><button type="button" class="btn btn-block btn-danger btn-lg" onclick="addCarrito();">Añadir al carrito</button></div>
                                                            <div class="col-md-6" style="padding:1px;"><button type="button" class="btn btn-block btn-warning btn-lg" onclick="comprarAhora();">Comprar ahora</button></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <?php
                                                                                                                                                                                                                                                                                                                                    $_GET["categoria"] = "Celular";
                                                                                                                                                                                                                                                                                                                                    include("includes/listaArticulos.php"); ?>

                            <?php
                                                                                                                                                                                                                                                                                                                                    $_GET["categoria"] = "Laptop";
                                                                                                                                                                                                                                                                                                                                    include("includes/listaArticulos.php"); ?>

                        </div>
                        <!-- /.box -->
                    </div>
            </div>


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
    <script src="../dist/js/carrito.js"></script>

    <script>
        function changeCantidad(id, value) {
            var val = parseInt(document.getElementById(id + "-cantidad").value);
            var existencias = parseInt(<?php echo $prod->existencias; ?>);
            var precio = parseInt(<?php echo $prod->precio; ?>);
            if (val + value <= 0) {
                alertError("Necesitas tener mínimo 1 producto a pedir.");
            } else if (val + value > existencias) {
                alertError("Lo sentimos, solo quedan " + existencias + " existencias de este producto.");
            } else {
                val += value;
                document.getElementById(id + "-cantidad").value = val;
            }
        }

        function addCarrito() {
            var id = '<?php echo $prod->id; ?>';
            var imagen = '<?php echo $prod->imagen; ?>';
            var nombre = '<?php echo $prod->nombre; ?>';
            var precio = '<?php echo $prod->precio; ?>';
            var tipo = '<?php echo $prod->tipo; ?>';
            var descripcion = '<?php echo $prod->descripcion; ?>';
            var existencias = '<?php echo $prod->existencias; ?>';
            var Cantidad = parseInt(document.getElementById(id + "-cantidad").value);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //Regresará 1 si el producto se añadió perfectamente
                    if (this.responseText == "0") {
                        alertError("Ya has añadido este producto.");
                    } else {
                        actualizarCarrito();
                        alertSuccess("¡Producto agregado al carrito!");
                        setInterval(function() {
                            location.href = "carritoCompras.php";
                        }, 2000);
                    }
                }
            };

            //pasa por el metodo get a addArray.php
            xhttp.open("GET", "addArray.php?id=" + id + "&imagen=" + imagen + "&nombre=" + nombre + "&precio=" + precio + "&tipo=" + tipo + "&descripcion=" + descripcion + "&Cantidad=" + Cantidad + "&existencias=" + existencias, true);
            xhttp.send();

        }

        function comprarAhora() {
            //Solo permitir comprar si el usuario está logeueado.
            if (<?php echo isset($_SESSION["nombre"]) ? "true" : "false"; ?>) {
                var id = '<?php echo $prod->id; ?>';
                var precio = '<?php echo $prod->precio; ?>';
                var Cantidad = parseInt(document.getElementById(id + "-cantidad").value);
                $("#subtotal").val(parseInt(precio * Cantidad));
                $("#total").val($("#subtotal").val());
                $("#formComprar").submit();
            } else {
                alertError("Necesitas tener una sesión iniciada para poder comprar productos.");
            }

        }
    </script>
</body>

</html>