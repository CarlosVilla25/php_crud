<?php

$password = "";
$user = "root";
$nameDB = "crud";

try {
  $db = new PDO("mysql:host=localhost:3307;dbname=crud", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
  echo "Problema con la conexion: " . $e->getMessage();
}
