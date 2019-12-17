<?php
$envio = rand(100, 500);
$prods = $_POST["producto"];
$subtotal = $_POST["subtotal"];
$promocion = $_POST["promocion"];
$total = $subtotal + ($subtotal * 16 / 100);
?>
<!--CHAT-->
<?php include "includes/chat.php" ?>
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
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> ¡Ya mero terminas!
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Producto</th>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Precio unitario</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($prods as $prod) { ?>
                                        <tr>
                                            <td><?php echo $_POST[$prod . "-cantidad"]; ?></td>
                                            <td><?php echo $_POST[$prod . "-nombre"]; ?></td>
                                            <td><?php echo $prod; ?></td>
                                            <td><?php echo $_POST[$prod . "-descripcion"]; ?></td>
                                            <td><?php echo $_POST[$prod . "-precio"]; ?></td>
                                            <td><?php echo $_POST[$prod . "-precio"] * $_POST[$prod . "-cantidad"]; ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Payment Methods:</p>
                            <img src="../dist/img/credit/visa.png" alt="Visa" onclick="tarjeta('VISA');" style="cursor: pointer;">
                            <img src="../dist/img/credit/mastercard.png" alt="Mastercard" onclick="tarjeta('Mastercard')" style="cursor: pointer;">
                            <img src="../dist/img/credit/american-express.png" alt="American Express" onclick="tarjeta('American Express')" style="cursor: pointer;">
                            <img src="../img/oxxo.png" alt="Paypal" style="float: right; cursor: pointer;" onclick="oxxo();">

                            <div id="modo-tarjeta">
                                <div class="form-group">
                                    <label id="tarjeta" style="width: 100%;">VISA</label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="width: 100%;">Titular de la tarjeta</label>
                                    <input type="text" class="form-control" id="titular-tarjeta" placeholder="Rodrigo Maafs Atilano">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="width: 100%;">Número de tarjeta</label>
                                    <input type="text" class="form-control" id="numero-tarjeta" placeholder="0496 1252 51252">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="width: 100%;">Fecha de vencimiento</label>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder="Mes">
                                        </div>
                                        <div class="col-xs-1">
                                            /
                                        </div>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder="Año">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" placeholder="Código">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="modo-oxxo" style="display: none;">
                                <div class="form-group">
                                    <label id="tarjeta" style="width: 100%;">Has seleccionado tipo de pago en OXXO</label>
                                    Tu código de pago: 8251912
                                </div>
                            </div>

                            <br><br>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <legend>¿A donde llegará tu pedido?</legend>
                                <div class="form-group">
                                    <label for="nombre-completo" style="width: 100%;">Nombre completo</label>
                                    <input type="text" class="form-control" name="nombre-completo" id="nombre-completo" placeholder="Rodrigo Maafs Atilano">
                                </div>

                                <div class="form-group">
                                    <label for="correo" style="width: 100%;">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                                </div>

                                <div class="form-group">
                                    <label for="direccion" style="width: 100%;">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Calle, número, colonia">
                                </div>

                                <div class="form-group">
                                    <label for="ciudad" style="width: 100%;">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Aguascalientes">
                                </div>

                                <div class="form-group">
                                    <label style="width: 100%;">Selecciona tu país</label>
                                    <select class="form-control select2" style="width: 100%;" onchange="cambiarPais(this);" name="pais" id="pais">
                                        <option value="MX" selected="selected">México</option>
                                        <option value="USA">Estados Unidos</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="codigo-postal" style="width: 100%;">Código Postal</label>
                                    <input type="number" class="form-control" name="codigo-postal" id="codigo-postal" placeholder="00000">
                                </div>

                                <div class="form-group">
                                    <label for="telefono" style="width: 100%;">Número telefónico</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="475-108-0851">
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                                <input type="hidden" id="subtotal" name="subtotal" value="<?php echo $subtotal; ?>" />
                                <input type="hidden" id="promocion" name="promocion" value="<?php echo $promocion; ?>" />
                                <input type="hidden" id="total" name="total" value="<?php echo $total; ?>" />
                                <input type="hidden" id="impuesto" name="impuesto" value="9.3" />
                                <input type="hidden" id="envio" name="envio" value="<?php echo $envio; ?>" />

                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>MXS $<?php echo $subtotal; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Impuestos (<span id="impuestos">16</span>%)</th>
                                        <td>MXS $<span id="total-impuestos"><?php echo ($subtotal * 16 / 100); ?></span></td>
                                    </tr>
                                    <tr>
                                        <th>Envío:</th>
                                        <td>MXS $<?php echo $envio; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Descuento (Cupón) <label type="text" id="total-descuento">0</label>%:</th>
                                        <td>MXS $<span id="total-promocion"><?php echo $promocion; ?></span></td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>MXS $<span id="total-total"><?php echo $total + $envio - $promocion; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->


                        <div class="col-md-6" style="padding-top:20px;">
                            <legend>Cupones de descuento</legend>
                            <div class="input-group">
                                <input type="text" name="cupon1" id="cupon1" placeholder="Cupon 1" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-flat" onclick="verificarCupon(document.getElementById('cupon1'), this);">Canjear</button>
                                </span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="cupon2" id="cupon2" placeholder="Cupon 2" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-flat" onclick="verificarCupon(document.getElementById('cupon2'), this);">Canjear</button>
                                </span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="cupon3" id="cupon3" placeholder="Cupon 3" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-flat" onclick="verificarCupon(document.getElementById('cupon3'), this);">Canjear</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="carritoCompras.php" class="btn btn-default"><i class="fa fa-print"></i> Regresar</a>
                            <button type="button" class="btn btn-success pull-right" onclick="confirmarCompra();"><i class="fa fa-credit-card"></i> Confirmar compra
                            </button>
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

    <script>
        function verificarCupon(input, btn) {
            //Si el botón dice quitar, mejor ejecutamos la función para quitar cupón
            if (btn.innerHTML == "Quitar") {
                quitarCupon(input, btn);
                return;
            }

            if (input.value == "") {
                alertError("Por favor ingresa un cupón");
                return;
            }

            $.get("buscarCupon.php?cupon=" + input.value, function(data, status) {
                if (data == "false") {
                    alertError("Lo sentimos, este cupón no existe o está caducado");
                } else if (data == "duplicate") {
                    alertError("Este cupón ya lo estas utilizando");
                } else {
                    var json = JSON.parse(data);
                    alertSuccess("¡Cupón compatible!");
                    btn.innerHTML = "Quitar";
                    btn.classList.remove("btn-success");
                    btn.classList.add("btn-danger");
                    input.disabled = true;
                    $("#total-descuento").html(parseInt(parseInt($("#total-descuento").html()) + parseInt(json.descuento)));
                    refreshPrecios();
                    
                }
            });
        }

        function quitarCupon(input, btn) {
            $.get("quitarCupon.php?cupon=" + input.value, function(data, status) {
                if (data != "false") {
                    alertSuccess("Cupon removido con éxito");
                    btn.innerHTML = "Canjear";
                    btn.classList.add("btn-success");
                    btn.classList.remove("btn-danger");
                    input.disabled = false;
                    $("#total-descuento").html(parseInt(parseInt($("#total-descuento").html()) - parseInt(data)));
                    refreshPrecios();
                }
            });
        }

        function refreshPrecios() {

            cambiarPais(document.getElementById("pais").value);


            var descuento = parseInt($("#total-descuento").html());
            var total = parseInt($("#total-total").html());
            var descontado = parseInt( descuento * total / 100 );
            
            $("#total-promocion").html(descontado);
            $("#total-total").html(parseInt(total - descontado));
        }

        function cambiarPais(select) {
            var impuesto = "16"; //Impuesto para MX
            if (select.value == "USA") {
                impuesto = "4";
            }

            var envio = <?php echo $envio; ?>;
            $("#impuesto").value = impuesto;
            $("#impuestos").html(impuesto);
            $("#total-impuestos").html($("#subtotal").val() * impuesto / 100);
            document.getElementById("total").value = parseInt($("#subtotal").val()) + parseInt($("#total-impuestos").html());
            $("#total-total").html(parseInt($("#total").val()) + parseInt(envio));
        }

        function tarjeta(texto) {
            $("#tarjeta").html(texto);
            $("#modo-oxxo").hide();
            $("#modo-tarjeta").show();
        }

        function oxxo() {
            $("#modo-tarjeta").hide();
            $("#modo-oxxo").show();
        }

        function confirmarCompra() {
            //Solo permitir comprar si el usuario está logeueado.
            if (<?php echo isset($_SESSION["nombre"]) ? "true" : "false"; ?>) {
                //Comprar...
            } else {
                alertError("Necesitas tener una sesión iniciada para poder comprar productos.");
            }
        }
    </script>
</body>

</html>