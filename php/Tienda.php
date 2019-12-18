
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
    <title><?php include "titlePrefix.php"; ?>Conctacto</title>
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
    <!-- Extra styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<!--CHAT-->
<?php include "includes/chat.php" ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <h1 style="text-align:center;">¡Bienvenidos a la Tienda de SMShop!</h1>
                <section class="content">
                    <div class="box box-info" style="background-color: white">
                        
                        <?php
                            $_GET["categoria"] = "Celular";
                            include("includes/listaArticulos.php"); 
                        ?>
                        
                        <?php
                        $_GET["categoria"] = "Laptop";
                        include("includes/listaArticulos.php"); 
                        ?>
                            
                    </div>

                </section>    
            </div>

        </div>
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