<?php

session_start();

if(!isset($_SESSION['user']))
  header("location:/index.php");

include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";

if(!isset($_GET['id']))
  header("location:products.php");

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id='{$id}'";


$imgSql = "SELECT img FROM products WHERE id='{$id}'";

$imgRes = $conn->query($imgSql);
$imgRes = $imgRes->fetch_assoc();
$imgRes = $imgRes['img'];

if($conn->query($sql)){
  unlink($_SERVER['DOCUMENT_ROOT'].$imgRes);
  header("location:products.php");
}
else
  die("ჩანაწერის წაშლისას შეცდომა წარმოიშვა");

 ?>
