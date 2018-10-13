<?php
$servername = "127.0.0.1";
$username = "topelect_usr";
$password = "rame12345";
$db_name = "topelect_ro";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error)
  die($conn->connect_error);

mysqli_set_charset($conn,"utf8");
?>
