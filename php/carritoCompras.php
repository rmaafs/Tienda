<?php
require "Producto.php";//Añadí

$productos = [];

if(isset($_COOKIE['array'])){
    $productos = unserialize($_COOKIE['array'], ["allowed_classes" => true]);
}

/*$p = new Producto();
$p->id = 41;
$p->nombre = "Balon";
$p->descripcion = "Balón yabulani ajja";
$p->unidades = 1;
$p->precio = 700;
$p->imagen = 'https://www.tradesport.com/revcms_render_image.aspx?date=20091202&id=c5bfc6ce-b2ae-4d18-bcd5-9cba19baaf8b&mode=1&width=698&height=441';
$p->existencias = 3;
array_push($productos, $p);

$p = new Producto();
$p->id = 12412;
$p->nombre = "Celular";
$p->descripcion = "Celular motorola rojo";
$p->unidades = 1;
$p->precio = 3500;
$p->imagen = "https://resources.sears.com.mx/medios-plazavip/fotos/productos_sears1/original/2877971.jpg";
$p->existencias = 3;
array_push($productos, $p);

$p = new Producto();
$p->id = 55612;
$p->nombre = "Laptop";
$p->descripcion = "Laptop LENOVO blanca";
$p->unidades = 1;
$p->precio = 8300;
$p->imagen = 'https://ss628.liverpool.com.mx/xl/1073605675.jpg';
$p->existencias = 3;
array_push($productos, $p);*/

$subtotal = 0;
$promocion = 0;
$total = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Carrito de compras</title>
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

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <div class="box box-info">
                        <form action="finalizarCompra.php" method="POST" id="formCarrito">
                            <div class="box-header with-border">
                                <h3 class="box-title">Carrito de compras</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($productos as $p) { ?>
                                                <input type="hidden" name="producto[]" value="<?php echo $p->id; ?>">
                                                <input type="hidden" name="<?php echo $p->id; ?>-nombre" value="<?php echo $p->nombre; ?>">
                                                <input type="hidden" name="<?php echo $p->id; ?>-descripcion" value="<?php echo $p->descripcion; ?>">
                                                <input type="hidden" id="<?php echo $p->id; ?>-precio" name="<?php echo $p->id; ?>-precio" value="<?php echo $p->precio; ?>">
                                                <input type="hidden" id="<?php echo $p->id; ?>-existencias" value="<?php echo $p->existencias; ?>">
                                                <tr id="<?php echo $p->id; ?>-tr">
                                                    <td>
                                                        <!-- class="flat-red" -->
                                                        <input type="checkbox" name="check-tienda" value="<?php echo $p->id; ?>">
                                                    </td>
                                                    <td>
                                                        <ul class="products-list product-list-in-box">
                                                            <li class="item">
                                                                <div class="product-img">
                                                                    <img src="<?php echo $p->imagen; ?>" alt="Product Image">
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="javascript:void(0)" class="product-title"><?php echo $p->nombre; ?>
                                                                        <span class="product-description">
                                                                            <?php echo $p->descripcion; ?>
                                                                        </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="input-group margin">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-danger" onclick="changeCantidad(<?php echo $p->id . ", -1"; ?>);">-</button>
                                                            </div>
                                                            <input type="number" class="form-control" id="<?php echo $p->id; ?>-cantidad" name="<?php echo $p->id; ?>-cantidad" value="<?php echo $p->unidades; ?>" style="text-align: center;">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-danger" onclick="changeCantidad(<?php echo $p->id . ", 1"; ?>);">+</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        MXN$<?php echo $p->precio; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                $subtotal += $p->precio;
                                            }
                                            $total = $subtotal;
                                            ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" id="subtotal" name="subtotal" value="<?php echo $subtotal; ?>" />
                                    <input type="hidden" id="promocion" name="promocion" value="<?php echo $promocion; ?>" />
                                    <input type="hidden" id="total" name="total" value="<?php echo $total; ?>" />
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <input type="checkbox" onchange="seleccionarTodos(this);"> Seleccionar todo
                                <button type="button" class="btn btn-success">Seguir comprando</button>
                                <button type="button" class="btn btn-danger" onclick="borrarSeleccionados();">Borrar productos seleccionados</button>
                                <table class="col-sm-2 pull-right">
                                    <tr>
                                        <td></td>
                                        <td class="pull-right"></td>
                                    </tr>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="pull-right" id="txt-subtotal">
                                            MXN$<?php echo $subtotal; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Promoción</td>
                                        <td class="pull-right" id="txt-promocion">
                                            - MXN$<?php echo $promocion; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="pull-right" id="txt-total">
                                            MXN$<?php echo $total; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="button" class="btn btn-warning" onclick="$('#formCarrito').submit();">Finalizar compra</button></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                        <!-- /.box-footer -->
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
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script>
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })
    </script>

    <script>
        function changeCantidad(id, value) {
            var val = parseInt(document.getElementById(id + "-cantidad").value);
            var existencias = parseInt(document.getElementById(id + "-existencias").value);
            var precio = parseInt(document.getElementById(id + "-precio").value);
            if (val + value <= 0) {
                alert("Necesitas tener mínimo 1 producto a pedir.");
            } else if (val + value > existencias) {
                alert("Lo sentimos, solo quedan " + existencias + " existencias de este producto.");
            } else {
                val += value;
                document.getElementById(id + "-cantidad").value = val;
                var subtotal = parseInt(document.getElementById("subtotal").value);
                subtotal += value * precio;

                document.getElementById("subtotal").value = subtotal;
                document.getElementById("total").value = subtotal;
                document.getElementById("txt-subtotal").innerHTML = "MXN $" + subtotal;
                document.getElementById("txt-total").innerHTML = "MXN $" + subtotal;
            }
        }

        function seleccionarTodos(check) {
            var seleccionar = check.checked;
            for (var i in document.getElementsByName("check-tienda")) {
                var input = document.getElementsByName("check-tienda")[i].checked = seleccionar;
            }
        }

        function borrarSeleccionados() {
            var checks = [];
            var dineroTotal = parseInt(document.getElementById("subtotal").value);
            //Buscamos todos los checks activados y los guardamos
            for (var i in document.getElementsByName("check-tienda")) {
                var input = document.getElementsByName("check-tienda")[i];
                if (input.value != null && input.checked) {
                    checks.push(input.value);

                    var id = input.value;
                    var val = parseInt(document.getElementById(id + "-cantidad").value);
                    var precio = parseInt(document.getElementById(id + "-precio").value);
                    dineroTotal -= val * precio;
                }
            }
            //alert("Total: " + checks.length);
            if (checks.length == 0) {
                alert("No has seleccionado ningún producto.");
            } else {
                //Borramos todos los HTML de los ids a borrar.
                for (var i in checks) {
                    document.getElementById(checks[i] + "-tr").innerHTML = "";
                }
                document.getElementById("subtotal").value = dineroTotal;
                document.getElementById("total").value = dineroTotal;
                document.getElementById("txt-subtotal").innerHTML = "MXN $" + dineroTotal;
                document.getElementById("txt-total").innerHTML = "MXN $" + dineroTotal;
            }
        }
    </script>
</body>

</html>