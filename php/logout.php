<?php
  session_start();

  session_unset();

  session_destroy();

  setcookie('colorFondo', $colorFondo, time() - 1, "/");
  setcookie('tamanoLetra', $tamanoLetra, time() - 1, "/");

  header('Location: login.php');
?>
