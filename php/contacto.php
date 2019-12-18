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
                <section class="content">
                    <div class="box box-info" style="background-color: white">

                        <!--------------------------------------------------------------- INFO CONTACTO ------------------------------------------------------------->
                        <!-- Accordion  -->
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne" style="text-align:center;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h3 class="box-title"> <b>Información de contacto!</b></h3>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                    <div class="card-body">
                                        <p>Ofrece servicio en los siguientes casos:</p>
                                        <ul>
                                            <li>Reporte de tarjeta robada o extraviada.</li>
                                            <li>Obtención de Número de Cliente.</li>
                                            <li>Saldos y fechas de pago vía telefónica.</li>
                                            <li>Aclaración o duda general sobre el Estado de Cuenta.</li>
                                        </ul>

                                        <p>D.F. y Área Metropolitana: <a href="tel: 51303900">51-30-39-00</a></p>

                                        <p>Interior de la República: <a href="tel: 018009002123">01-800-900-2123</a></p>
                                        <h3>Atención a Clientes de Servicio Técnico</h3>
                                        <p>D.F. y Área Metropolitana: <a href="tel: 51303940">5130•3940</a></p>
                                        <p>Interior de la República: <a href="tel: 018003373277">01•800•33•CUACK (73277)</a></p>
                                        <h3>Atención exclusiva a compras por Internet</h3>
                                        <p>Brindamos servicio personalizado a nuestros Clientes de Internet para atender temas como:</p>
                                        <ul>
                                            <li>Asesoría para navegar en la página y realizar sus compras.</li>
                                            <li>Dudas, comentarios e información referentes a sus Compras realizadas por Internet.</li>
                                            <li>Asistencia con contraseñas y activación de cuentas del portal.</li>
                                            <li>Aclaración de pagos en Línea.</li>
                                        </ul>

                                        <p>Teléfono: D.F. y area Metropolitana <a href="tel: 01 55 53 45 16 06">(01 55) 53 45 16 06</a></p>

                                        <p>Interior de la Republica <a href="tel: 01 800 836 82 46">(01 800) 836 82 46</a></p>
                                        <p>Horario: Lunes a Viernes de 9:00 a 20:00 hrs, Sábado y Domingo de 11:00 a 20:00 hrs</p>
                                        <p>Correo electrónico: <a href="mailto: TiendaE.internet@gmail.com.mx">maafs.internet@gmail.com.mx</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion end -->

                    <div class="box-header with-border">


                        <!--------------------------------------------------------------- INFO CONTACTO ------------------------------------------------------------->


                        <!--------------------------------------------------------------- FORM ------------------------------------------------------------->


                        <div class="box-footer clearfix formS" style="display:block;">
                            <form action="enviarForm.php" method="post" style="text-align:center">
                                <h2>Contáctanos</h2><br>
                                <p>En caso de contar con algún otro comentario, duda o
                                    sugerencia puedes hacerla llegar vía electrónica en el siguiente formulario,
                                    seleccionando el área a la que va dirigida.</p>
                                <br>


                                <!-- FORMULARIO -->
                                <div>
                                    <fieldset style="width: 100%;">
                                        <dl>
                                            <dt><label>Area que desea contactar:</label></dt>
                                            <dd>
                                                <span class="select"><select>
                                                        <option value="">-No Seleccionado-</option>
                                                        <option value="BOLSA DE TRABAJO">BOLSA DE TRABAJO</option>
                                                        <option value="CREDITO">CREDITO</option>
                                                        <option value="INTERNET">INTERNET</option>
                                                        <option value="OPERACIONES">OPERACIONES</option>
                                                        <option value="MESA DE REGALOS">MESA DE REGALOS</option>
                                                        <option value="SERVICIO TECNICO">SERVICIO TECNICO</option>
                                                    </select></span></dd>
                                        </dl>
                                        <dl>
                                            <dt><label>Nombre:</label></dt>
                                            <dd>
                                                <input type="text" name="nombre" placeholder="Ingresa tu nombre" required=""></dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <label>Apellido Paterno:</label></dt>
                                            <dd>
                                                <input type="text" name="apellido" placeholder="Ingresa tu Apellido Paterno" required=""></dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <label>Apellido Materno:</label></dt>
                                            <dd>
                                                <input type="text" placeholder="Ingresa tu Apellido Materno" required=""></dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <label>Correo Electrónico:</label></dt>
                                            <dd>
                                                <input type="email" name="correo" placeholder="Ingresa tu Correo Electrónico" required=""></dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <label>Estado:</label></dt>
                                            <dd><span class="select">
                                                    <select name="estado">
                                                        <option value="">-No Seleccionado-</option>
                                                        <option value="Aguascalientes">Aguascalientes</option>
                                                        <option value="Baja California">Baja California</option>
                                                        <option value="Baja California Sur">Baja California Sur</option>
                                                        <option value="Campeche">Campeche</option>
                                                        <option value="Coahuila">Coahuila</option>
                                                        <option value="Colima">Colima</option>
                                                        <option value="Chiapas">Chiapas</option>
                                                        <option value="Chihuahua">Chihuahua</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Durango">Durango</option>
                                                        <option value="Guanajuato">Guanajuato</option>
                                                        <option value="Guerrero">Guerrero</option>
                                                        <option value="Hidalgo">Hidalgo</option>
                                                        <option value="Jalisco">Jalisco</option>
                                                        <option value="México">México</option>
                                                        <option value="Michoacán">Michoacán</option>
                                                        <option value="Morelos">Morelos</option>
                                                        <option value="Nayarit">Nayarit</option>
                                                        <option value="Nuevo León">Nuevo León</option>
                                                        <option value="Oaxaca">Oaxaca</option>
                                                        <option value="Puebla">Puebla</option>
                                                        <option value="Querétaro">Querétaro</option>
                                                        <option value="Quintana Roo">Quintana Roo</option>
                                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                                        <option value="Sinaloa">Sinaloa</option>
                                                        <option value="Sonora">Sonora</option>
                                                        <option value="Tabasco">Tabasco</option>
                                                        <option value="Tamaulipas">Tamaulipas</option>
                                                        <option value="Tlaxcala">Tlaxcala</option>
                                                        <option value="Veracruz">Veracruz</option>
                                                        <option value="Yucatán">Yucatán</option>
                                                        <option value="Zacatecas">Zacatecas</option>
                                                    </select>

                                                </span></dd>
                                        </dl>
                                        <dl>
                                            <dt><label>Código Postal:</label></dt>
                                            <dd>
                                                <input name="cp" type="text" placeholder="Ingresa tu C.P." required=""></dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                <label>Comentario:</label></dt>
                                            <dd>
                                                <textarea name="mensaje" placeholder="Ingresa un comentario.">
                                        </textarea></dd>
                                        </dl>
                                        <fleldset>
                                            <button type="submit">Enviar Mensaje</button>
                                            <br>
                                        </fleldset>
                                        <br>
                                    </fieldset>
                                </div>


                                <!-- FORMULARIO FIN-->

                            </form>

                            <!-- MAPA DE GOOGLE -->
                            <div class="box-header with-border;">
                                <div class="mapouter" style="padding:10px;">
                                    <div class="gmap_canvas"><iframe width="328" height="239" id="gmap_canvas" src="https://maps.google.com/maps?q=universidad%20autonoma%20de%20aguascalientes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 339px;
                                            width: 528px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 339px;
                                            width: 528px;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- MAPA DE GOOGLE FIN-->



                        </div>

                        <!-- OPCION DE REGISTRO-->

                        <div class="w3-container w3-hide-small" >
                            <div>
                                <div>
                                    <div>
                                        <h5>¡Regístrate a nuestro Newsletter!</h5>
                                    </div>
                                    <div>
                                        <form action="envior2.php" method="POST" enctype="multipart/form-data"></form>

                                        <input type="text" id="newsletter" name="correo" placeholder="Tu correo electrónico" style="color:black; box-sizing: border-box; height:30px; display: block;float: left;border: none; border-radius: 5px; margin-left: 10px;">
                                        <button type="submit" name="botonsub" href="#" onclick="" style="box-sizing: border-box;height: 40px; display: block;float: left;border: none; border-radius: 5px; margin-left: 10px; min-width: 50px;background: #fff!important; color: #000;">Suscribirse</button>
                                        <select name="archivo" require>
                        
                                            <option value="../dist/img/compu.png">Premio 1</option>
                                            <option value="../dist/img/icons.png">Premio 2</option>
                                            <option value="../dist/img/visa.png">Premio 3</option>
                                        </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- OPCION DE REGISTRO FIN-->


                        <!--------------------------------------------------------------- FORM ------------------------------------------------------------->


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