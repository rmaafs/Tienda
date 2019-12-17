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

    <style>
        .formS {
            background: lightblue;
            color: black;
        }
    </style>

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
                <section class="content" style="margin-top:4%;">
                <h1>
                    Estadísticas de Productos
                </h1>
                    <div class="box box-info" style="background-color: white">
                    <small>Grafica de estadisticas de los productos en Stock</small>
                        <div id='canvas-container' style='width: 50%;'>
                            <canvas id='chart' width='500' height='350' style="margin-left:50%;"></canvas>
                        </div>

                    </div>
                </section>

            </div>

        </div>
        <?php include "includes/footer.php" ?>
    </div>
    <!-- ./wrapper -->


    <script src='..\dist\js\Chart.bundle.min.js'></script>
    <script src='..\dist\js\jquery-3.2.1.js'></script>
    <script type='text/ecmascript'>
        $(document).ready(function() {
            var datos = {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [ //datos iniciales de la grafica
                            <?php require 'datos.php'; ?>

                        ],
                        backgroundColor: [
                            '#FB744A',
                            '#46BFBD',
                            '#FDB45C',
                            '#949FB1',
                            '#37E115',
                            '#E115DD',
                            '#E1E015',
                        ],

                    }],
                    labels: [
                        <?php require 'datos2.php'; ?>



                    ]
                },
                options: {
                    responsive: true,
                }

            };
            var canvas = document.getElementById('chart').getContext('2d');
            window.pie = new Chart(canvas, datos);
            /*setInterval(function() {
                datos.data.datasets.splice(0);
                var newData= {
                    backgroundColor: [
                            '#FB744A',
                            '#46BFBD',
                            '#FDB45C',
                            '#949FB1',
                            '#4D5360',
                            
                        
                    ],
                    data: [
                        getRandom(), getRandom(), getRandom(), getRandom(),getRandom()//aqui va la data de base de datos 
                    ]//la cual se actualizara
                };
                datos.data.datasets.push(newData);
                window.pie.update();
            },5000);*/


        });
    </script>

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