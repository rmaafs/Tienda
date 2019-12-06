<?php

$server = '34.94.76.156';
$username = 'tienda';
$password = 'curiosoXD';
$database = 'tienda';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Conexión Fallida: ' . $e->getMessage());
}

?>
