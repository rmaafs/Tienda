<?php

require 'mysql.php';

$message = '';
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$ape_pat = isset($_POST['ape_pat']) ? $_POST['ape_pat'] : "";
$ape_mat = isset($_POST['ape_mat']) ? $_POST['ape_mat'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  if ($_POST['password'] == $_POST['confirm_password']) {

    $password = openssl_encrypt($_POST['password'],"AES-128-ECB", "123");

    $sql = "INSERT INTO login (usuario, con, nombre, apellidoPat, apellidoMat, email, estado, intentos) ";
    $sql .= "VALUES('$usuario', '$password', '$nombre', '$ape_pat', '$ape_mat', '$email', '1', '0')";
    if (insertDB($sql)) {
      header('Location: login.php?s=1');
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  } else {
    $message = 'Las contrasenas no coinciden';
  }
}
?>
<!--CHAT-->
<?php include "includes/chat.php" ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SignUp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body style="background: #EFEFEF;">

  <?php require 'includes/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>SignUp</h1>
  <span>o <a href="login.php">Login</a></span>

  <form action="signup.php" method="POST">
    <input name="usuario" type="text" placeholder="Usuario" required value="<?php echo $usuario;?>">
    <input name="email" type="text" placeholder="Email" required value="<?php echo $email;?>">
    <input name="password" type="password" placeholder="Contraseña" required>
    <input name="confirm_password" type="password" placeholder="Confirmar Contraseña" required>
    <input name="nombre" type="text" placeholder="Nombre" required value="<?php echo $nombre;?>">
    <input name="ape_pat" type="text" placeholder="Apellido Paterno" required value="<?php echo $ape_pat;?>">
    <input name="ape_mat" type="text" placeholder="Apellido Materno" required value="<?php echo $ape_mat;?>">
    <input type="submit" value="Enviar">
  </form>

  <script src="https://kit.fontawesome.com/4328fe96d6.js" crossorigin="anonymous"></script>
  <footer class="main-footer" style="background: #323232; color: gray;">


    <!-- REDES -->
    <div class="box-tools pull-left">
        <a href="https://www.facebook.com/SMShopMX/" target="_blank"><i class="fab f099 fa-facebook" style="color: white; font-size:200%;"></i></a></li>
        <a href="https://www.instagram.com/smshopags/" target="_blank"><i class="fab fa-instagram" style="color: white; font-size:200%;"></i></a></li>
        <a href="https://www.youtube.com/channel/UChs_TB71WUFcNx-O7lmLAVg" target="_blank"><i class="fab fa-youtube" style="color: white; font-size:200%;"></i></a></li>
        <a href="https://twitter.com/SMShopMX" target="_blank"><i class="fab fa-twitter" style="color: white; font-size:200%;"></i></a></li>




    </div>
    <!-- REDES FIN -->


    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 4.0.0
        </div>
        <strong>Copyright &copy; 2016-2019 <a style="color: white;" href="contacto.php">SMShop RESERVED</a>.</strong> Todos los derechos reservados.
    </div>


    <!-- /.container -->
</footer>

</body>

</html>