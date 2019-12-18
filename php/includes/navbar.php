<?php
session_start();
?>
<!------------------------------------------------------------ HEADER Y NAV ------------------------------------------------------------>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!--  -->

<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<script src="https://kit.fontawesome.com/4328fe96d6.js" crossorigin="anonymous"></script>
<script src="../plugins/sweetalert/dist/sweetalert2.all.js"></script>
<script src="../dist/js/alertas.js"></script>
<header class="main-header">
    <nav class="navbar navbar-top"> <!-- aquí css -->
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><b>SMS</b>hop</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">

                    <!-- LINK DE INICIO -->
                    <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
                    <!-- LINK DE ACERCA DE -->
                    <li><a href="acercaDe.php">Acerca De</a></li>
                    <!-- CONTACTANOS -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactanos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"></a></li>

                            <!-- CONTACTO -->
                            <li><a href="contacto.php">Contacto</a></li>

                            <!-- ESTADISTICAS -->
                            <li><a href="ayuda.php">Ayuda</a></li>


                        </ul>
                    </li>
                    <?php 
                   
                    if ((isset($_SESSION['nombre'])&& $_SESSION['nombre'])=="Rodrigo") {
                        ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"></a></li>                           
                            <li><a href="AyBdeproductos.php">A o B productos</a></li>
                        </ul>
                    </li><?php } ?>
                </ul>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

            <!-- Liciados -->
            <li class="dropdown messages-menu" id="html-carrito-compras">
                <?php include "Access.php"; ?>
            </li>
            <!-- End Liciados -->
                    <!-- CARRITO DE COMPRAS -->
                    <li class="dropdown messages-menu" id="html-carrito-compras">
                        <?php include "iconCarritoCompras.php"; ?>
                    </li>
                    <!-- CARRITO DE COMPRAS FIN -->

                    <!------------------------------------ Usuario (LOGIN)----------------------------------------------->
                    <?php
                        //Si el usuario está logeado...
                        if (isset($_SESSION["nombre"])) { ?>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
                            </a>

                            <ul class="dropdown-menu">
                                <!-- Opciones del Perfil -->
                                <li class="user-header">
                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $_SESSION["nombre"] . " " . $_SESSION["apellidoPat"] . " " . $_SESSION["apellidoMat"]; ?> - Web Developer
                                        <small>Miembro desde 2019</small>
                                    </p>
                                </li>

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>

                            <div class="pull-right">
                                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    <?php
                                                    } else { ?>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                    <?php } ?>
                </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>