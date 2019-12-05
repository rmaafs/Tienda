
<!-- CONEXION A LA BASE DE DATOS -->

<?php
  
    $servidor = 'localhost';
    $cuenta = 'root';
    $password = '';
    $bd = 'productos';
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
    <?php include "includes/chat.php"?>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    

    <!------------------------------------------------------------ LINKS FIN ------------------------------------------------------------>

    <style>
        table ,td,tr{
            border: 1px solid black;
            padding: 7px;
            color: black:
            border-collapse=collapse;
            
        }

        @media screen and (max-width: 600px) {
       table {
           width:100%;
       }
       thead {
           display: none;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background: #f0f0f0;
           font-weight:bold;
           font-size:1.3em;
       }
       tbody td {
           display: block;
           text-align:center;
       }
       tbody td:before {
           content: attr(data-th);
           display: block;
           text-align:center;
       }
}
    </style>


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
                        Tienda ---
                        <small>Aqui va el lema</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Layout</a></li>
                        <li class="active">Top Navigation</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<!------------------------------------------------------- DATOS DE PRODUCTOS ------------------------------------------------------->

                    <div class="box box-info" style="padding:10px;">
                    <h4><p>Algunos de nuestros productos</p></h4>
                        <table>
                                <?php 
                                $sql="SELECT * from productos_1";
                                $result=mysqli_query($conexion,$sql);

                                while($mostrar=mysqli_fetch_array($result)){
                                ?>    

                                <tr>
                                    <td><?php echo $mostrar['id'] ?></td>
                                    <td>Imagen</td>
                                    <td><?php echo $mostrar['nombre'] ?></td>
                                    <td>$<?php echo $mostrar['precio'] ?></td>
                                    <td><?php echo $mostrar['tipo'] ?></td>
                                    <td><?php echo $mostrar['descripcion'] ?></td></td>
                                    <td><button name="botonCarrito" href="#" onclick="" style="border-radius: 5px; background: lightblue; color: #000;">Agregar al Carrito</button></td>
                                    
                                </tr>
                                
                                
                            <?php 
                            }
                            
                            ?>
                        </table>

                            
                    </div>
<!------------------------------------------------------- DATOS DE PRODUCTOS FIN ------------------------------------------------------->

                    
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Blank Box</h3>
                        </div>
                        <div class="box-body">
                            The great content goes here
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

        <?php include "includes/footer.php"?>

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