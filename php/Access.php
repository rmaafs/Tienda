<!-- LINKS -->

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
    <?php include "includes/chat.php" ?>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Link de tabla css -->
    <link rel="stylesheet" href="../dist/css/productostabla.css">
    <!-- Extra styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../dist/js/carrito.js"></script>


<!-- LINKS END -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fas fa-blind" style="font-size:150%;"></i>
</a>


<ul class="dropdown-menu" style="border:3px solid lightblue;">
    <input type="hidden">
    <li class="header" style="text-align:center;">Introducir Modificaciones</li>
    <li>
        <ul class="menu">
            <li>
                <br>
                <div>
                    <p style="text-align:center;">Tipo:
                        <button onclick="Light();" value="Light">Claro</button>
                        <button onclick="Dark();" value="Dark">Oscuro</button>
                </div>

                <br>

                <div>
                    <p style="text-align:center;">Tamaño de Letra:
                        <button onclick="Big();" value="big">Grande</button>
                        <button onclick="Small();" value="small">Chico</button>
                </div>

            </li>
        </ul>
    </li>
    <hr>
    <li class="footer"><a>Opciones Especiales</a></li>
</ul>

<script>
    function Dark() {
        document.getElementById("content-wrapper").style.background-color("#323232");
    }
</script>