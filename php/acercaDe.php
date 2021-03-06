<!--CHAT-->
<?php include "includes/chat.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Acerca de Nosotros</title>
    <?php include "favicon.php" ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4328fe96d6.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins-->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <section class="content">
                    <div class="box box-info">
                    <!-- Accordion  -->
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h3 class="box-title"> <b>Acerca de Nosotros</b></h3>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                    <div class="card-body">
                                        <p>Somos una empresa centrada en el cliente y éste es la prioridad en cualquiera de sus estrategias.
                                            Misión, visión y valores confirman que toda acción, todo empleado y
                                            todo producto del catálogo debe contribuir a garantizar la satisfacción de los consumidores.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box box-info">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <h3 class="box-title"><b>Vision</b></h3>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                        <div class="card-body">
                                            <p>Nuestra misión es “ser la empresa más centrada en el cliente del mundo, donde los
                                                clientes pueden descubrir cualquier cosa que puedan querer comprar online, y comprometerse
                                                a ofrecer los precios más bajos posibles”.</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="box box-info">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <h3 class="box-title"><b>Mision</b></h3>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                                <div class="card-body">
                                                    <p>Nuestra misión es “aprovechar la tecnología y la
                                                        experiencia de nuestros empleados para ofrecer a los consumidores
                                                        la mejor experiencia de compra en internet”</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="box box-info">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingFour">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                                <h3 class="box-title"><b>Objetivo de la compañía </b></h3>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                                        <div class="card-body">
                                                            <p>
                                                                • Identificar los componentes de un modelo de negocio de Comercio Electrónico
                                                                <br>
                                                                • Describir los modelos de negocio B2C y B2B más significativos
                                                                <br>
                                                                • Reconocer modelos de negocios emergentes en otras áreas del Comercio Electrónico
                                                                <br>
                                                                • Entender cómo las características del Comercio Electrónico impactan en las industrias y las fuerzas del mercado
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
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
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js"></script>

</body>

</html>