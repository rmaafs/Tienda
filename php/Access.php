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
    <i class="fas fa-blind" id="tam5"></i>
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
    <?php
    $tamanoTexto = isset($_SESSION['tamanoLetra']) ? $_SESSION['tamanoLetra'] : "100%";
    $colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : "#3C8DBC";//
    ?>
    document.getElementById("tam").style.fontSize = "<?php echo $tamanoTexto; ?>";
    document.getElementById("tam1").style.fontSize = "<?php echo $tamanoTexto; ?>";
    document.getElementById("tam2").style.fontSize = "<?php echo $tamanoTexto; ?>";
    document.getElementById("tam3").style.fontSize = "<?php echo $tamanoTexto; ?>";
    document.getElementById("tam5").style.fontSize = "<?php echo $tamanoTexto; ?>";
    document.getElementById("acc").style.background = "<?php echo $colorFondo; ?>";





    function Dark() {
        cambiarFondo("#323232");
    }

    function Light() {
        cambiarFondo("#3C8DBC");
    }

    function Big() {
        cambiarLetra("300%");
    }

    function Normal() {
        cambiarLetra("200%");
    }

    function Small() {
        cambiarLetra("100%");//
    }

    function cambiarFondo(color) {
        if (!isEnSession()) return;
        document.getElementById("acc").style.background = color;
        actualizarCookies();
    }

    function cambiarLetra(size) {
        if (!isEnSession()) return;
        document.getElementById("tam").style.fontSize = size;
        document.getElementById("tam1").style.fontSize = size;
        document.getElementById("tam2").style.fontSize = size;
        document.getElementById("tam3").style.fontSize = size;
        document.getElementById("tam5").style.fontSize = size;
        actualizarCookies();
    }

    function isEnSession() {
        var bol = <?php echo isset($_SESSION['usuario']) ? "true" : "false" ;?>;
        if (!bol) {
            alertError("Necesitas estar logueado para poder editar la configuración.");
        }
        return bol
    }

    function actualizarCookies() {
        var hex = rgb2hex(document.getElementById("acc").style.background);
        $.post('actualizarAcc.php', {
            colorFondo: hex,
            tamanoLetra: document.getElementById("tam").style.fontSize
        }, function(resp) {
            if (resp != "true") {
                alertError("Algo salió mal :" + resp + ".");
                return false;
            }
        });
    }

    var hexDigits = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f");

    //Function to convert rgb color to hex format
    function rgb2hex(rgb) {
        rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    function hex(x) {
        return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
    }
</script>