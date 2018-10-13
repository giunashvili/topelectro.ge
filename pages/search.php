<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";

  if(!isset($_GET['result']))
    header("Location:/pages/products.php");

 ?>


<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | ძიება </title>

    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>
    <?php include "../php/sections/cat_menu.php"; ?>


  <section id="products" class="Nateli">
    <div class="cat_container">
      <div id="search_products">
        <form action="search.php">
        <input type="text" name="result" placeholder="შენთვის სასურველი პროდუქტი">
        <input type="submit" value="ძიება">
      </form>
      </div>
    </div>

    <div class="cat_container">
      <div class="products_container">
<!-- ძიების შედეგები -->
    </div>
    <br style='clear:both;'>
    <br>
  </div>

  <script>
    var searchKey = '<?php echo $_GET["result"]; ?>';
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/search.js"></script>



</body>

</html>
