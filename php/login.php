<?php
setcookie("user", '', time() - 1, '/');
setcookie("pass", '', time() - 1, '/');

$clave_sitio = "6Ld_FsgUAAAAADTFqLw1vGWxK5TNWYPh6nFOhnSY";

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Login</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="hold-transition login-page" style="background-color: #000230">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php" style="color: #FFF"><b>SMS</b>hop</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">La tienda mas innovadora del mundo</p>

            <form action="conecLogin.php" method="post" id="formLogin" onsubmit="return false;">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" name="user" id="user1">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="pass" class="form-control" placeholder="Contraseña" name="passwd" id="passwd1">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <center>
                    <div class="g-recaptcha" data-sitekey="<?php echo $clave_sitio; ?>"></div>
                </center><br>
                <div class="row">
                    <div class="col-xs-7">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="chbx" id="chbx"> Recordarme
                            </label>
                        </div>
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
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-info btn-block btn-flat" onclick="window.location.href = 'FormCorreo2.php'">Olvide mi olvidarContraseña</button>
                </div>
            </div>
            
            <div class="col-xs-12 text-center">
                <!--<a onclick="olvidarContraseña();"><br>Olvidé mi contraseña</a><br>-->
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
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script>
        <?php
                                                            if (isset($_GET["s"]) && $_GET["s"] == "1") {
                                                                echo "alertSuccess('Usuario registrado con éxito.');";
                                                            } else if (isset($_GET["s"]) && $_GET["s"] == "2") {
                                                                echo "alertSuccess('Contraseña cambiada con éxito.');";
                                                            }
        ?>

        function verificar() {
            if (document.getElementsByName("user")[0].value.length == 0) {
                alertError("El dato Usuario no puede estar vacío.");
            } else if (document.getElementsByName("passwd")[0].value.length == 0) {
                alertError("El dato Contraseña no puede estar vacío.");
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

        function olvidarContraseña() {
            swal({
                header(location("FormCorreo2.php"));
                title: "Escribe tu nombre de usuario",
                content: "input",
                buttons: {
                    cancel: true,
                    confirm: "Confirmar"
                }
            }).then(val2 => {
                if (val2) {
                    $.post('olvidarContrasena.php', {
                        user: val2
                    }, function(resp) {
                        if (resp == "false") {
                            alertError("Este usuario no existe.");
                            return false;
                        } else {
                            alertSuccess("Correo enviado a " + resp);
                        }
                    });
                }
            });
        }
    </script>
</body>

</html>