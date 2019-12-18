<?php
require "mysql.php";
$key = $_GET["key"];
$user = "";
$resultado = selectBD('SELECT usuario FROM recuperar WHERE id = "' . $key . '" ');
if ($resultado) {
    $fila = $resultado -> fetch_assoc();
    $user = $fila["usuario"];
} else {
    header("Location: login.php");
}
?>
<html>
<!-- Chat -->
<?php include "includes/chat.php" ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Recuperar Contraseña</title>
    <?php include "favicon.php" ?>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background-color: #000230">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html" style="color: #FFF"><b>SMS</b>hop</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Recuperar cuenta</p>

            <form action="changePasswd.php" method="post" id="formLogin" onsubmit="return false;">
            <input type="hidden" name="key" value="<?php echo $key;?>">
                <div class="form-group has-feedback">
                    <input type="pass" class="form-control" placeholder="Nueva contraseña" name="passwd" id="user1">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="pass" class="form-control" placeholder="Repetir contraseña" name="passwd1" id="passwd1">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-7">
                    </div>
                    <div class="col-xs-5">
                        <button type="submit" id="btnLogin" class="btn btn-info btn-block btn-flat" onclick="verificar()">Ingresar</button>
                    </div>
                </div>
            </form>

            <br>
            <div class='col-xs-12 text-center'>
                <b>¿No estas registrado?</b>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-info btn-block btn-flat" onclick="window.location.href = 'signup.php'">¡Regístrate!</button>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script src="../plugins/sweetalert/dist/sweetalert2.all.js"></script>
    <script src="../dist/js/alertas.js"></script>
    </script>
    <script>
        function verificar() {
            if (document.getElementsByName("passwd")[0].value.length == 0) {
                alertError("La contraseña no puede ser incorrecta.");
            } else if (document.getElementsByName("passwd1")[0].value.length == 0) {
                alertError("Por favor ingresa de nuevo la contraseña.");
            } else if (document.getElementsByName("passwd")[0].value != document.getElementsByName("passwd1")[0].value) {
                alertError("Las contraseñas no coinciden.");
            } else {
                send();
            }
        }

        function send() {
            var x = document.getElementById('user1').value;
            console.log(x);
            var y = document.getElementById('passwd1').value;
            console.log(y);
            document.getElementById("formLogin").submit();
        }
    </script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>