
<!------------------------------------------------------------ HEADER Y NAV ------------------------------------------------------------>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--  -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <header class="main-header">
    <nav class="navbar navbar-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><b>TIENDA</b>LOCA</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">

                <!-- LINK DE INICIO -->
                    <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
                <!-- LINK DE TIENDA --> 
                    <li><a href="#">Tienda</a></li>
                <!-- LINK DE ACERCA DE --> 
                 <li><a href="#">Acerca De</a></li>
                <!-- CONTACTANOS -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactanos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"></a></li>

                            <!-- ESTADISTICAS -->
                            <li><a href="#">Estadisticas</a></li>
                            
                            <!-- POR AGREGAR -->
                            <li><a href="#">Pagina 2</a></li>   
                        </ul>
                    </li>
                </ul>

                            <!-- BUSQUEDA -->
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Buscar">
                    </div>
                </form>
            </div>
            
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">      

<!-- CARRITO DE COMPRAS -->

              <a class="nav-link" href="#">
              <i class="fas f07a fa-shopping-cart "></i>
                
              </a>
              
<!-- CARRITO DE COMPRAS FIN -->

<!------------------------------------ Usuario (LOGIN)----------------------------------------------->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Dios Maafs</span>
                        </a>
                        
                        <ul class="dropdown-menu">
                            <!-- Opciones del Perfil -->
                            <li class="user-header">
                                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    El buen maafs - Web Developer
                                <small>Miembro desde hace 2000 años</small>
                                </p>
                            </li>

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>

                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>