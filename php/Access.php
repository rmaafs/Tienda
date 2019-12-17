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
    <i class="fas fa-blind" style="font-size:150%;" id="tam5"></i>
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
                        <button onclick="Light();" value="Light" style="background: whitesmoke; color:black;">Claro</button>
                        <button onclick="Dark();" value="Dark" style="background: #636363; color:white;">Oscuro</button>
                </div>

                <br>

                <div>
                    <p style="text-align:center;">Tamaño de Letra:
                        <br>
                        <button onclick="Big();" value="big" style="background: #0077ff; color:whitesmoke;">Grande</button>
                        <button onclick="Normal();" value="normal" style="background: #2582EE; color:whitesmoke;">Normal</button>
                        <button onclick="Small();" value="small" style="background: #0077ff; color:whitesmoke;">Chico</button>
                </div>

            </li>
        </ul>
    </li>
    <hr>
    <li class="footer"><a>Opciones Especiales</a></li>
</ul>

<script>
    function Dark() {
        document.getElementById("acc").style.background= "#323232";
    }

    function Light(){
        document.getElementById("acc").style.background= "#3C8DBC";
    }

    function Big(){
        document.getElementById("tam").style.fontSize = "300%";
        document.getElementById("tam1").style.fontSize = "300%";
        document.getElementById("tam2").style.fontSize = "300%";
        document.getElementById("tam3").style.fontSize = "300%";
        document.getElementById("tam4").style.fontSize = "300%";
        document.getElementById("tam5").style.fontSize = "250%";

    }

    function Normal(){
        document.getElementById("tam").style.fontSize = "200%";
        document.getElementById("tam1").style.fontSize = "200%";
        document.getElementById("tam2").style.fontSize = "200%";
        document.getElementById("tam3").style.fontSize = "200%";
        document.getElementById("tam4").style.fontSize = "200%";
        document.getElementById("tam5").style.fontSize = "150%";
    }

    function Small(){
        document.getElementById("tam").style.fontSize = "100%";
        document.getElementById("tam1").style.fontSize = "100%";
        document.getElementById("tam2").style.fontSize = "100%";
        document.getElementById("tam3").style.fontSize = "100%";
        document.getElementById("tam4").style.fontSize = "100%";
        document.getElementById("tam5").style.fontSize = "100%";
    }
</script>