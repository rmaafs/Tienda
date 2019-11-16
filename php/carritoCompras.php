<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
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
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="flat-red" checked>
                                            </td>
                                            <td>
                                                <ul class="products-list product-list-in-box">
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="https://gloimg.gbtcdn.com/soa/gb/pdm-product-pic/Electronic/2019/06/15/goods_img_big-v2/20190615135808_49891.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Xiaomi Mi Band 4 Pulsera Inteligente ( Versión China ) - Negro 4
                                                                <span class="product-description">
                                                                    5ATM Impermeable / Pantalla AMOLED / Monitor de Ritmo Cardíaco
                                                                </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="input-group margin">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-danger">-</button>
                                                    </div>
                                                    <input type="number" class="form-control" value="1" style="text-align: center;">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-danger">+</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                MXN$3259.80
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <input type="checkbox" class="flat-red" checked> Seleccionar todo
                            <button type="button" class="btn btn-success">Seguir comprando</button>
                            <table class="col-sm-2 pull-right">
                                <tr>
                                    <td></td>
                                    <td class="pull-right"></td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="pull-right">MXN$3259.80</td>
                                </tr>
                                <tr>
                                    <td>Promoción</td>
                                    <td class="pull-right">- MXN$0.00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="pull-right">MXN$3259.80</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="button" class="btn btn-warning">Finalizar compra</button></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </section>

                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.18
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
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
</body>

</html>