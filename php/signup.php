<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    if($_POST['password'] == $_POST['confirm_password']){
      $sql = "INSERT INTO users (email, password, id) VALUES (:email, :password, :id)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':email', $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':id',$_POST['id']);
    }
    
    if ($stmt->execute()) {
      $message = 'Usuario creado satisfactoriamente';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>o <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="id" type="number" placeholder="id" required>
      <input name="email" type="text" placeholder="Email" required>
      <input name="password" type="password" placeholder="Password" required>
      <input name="confirm_password" type="password" placeholder="Confirmar Password" required>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
