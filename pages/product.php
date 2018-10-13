<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";


$id = $_GET['id'];

if(!$id)
  header("Location:/pages/products.php");

$sql = "SELECT * FROM products WHERE id='$id'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>



<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | პროდუქტი </title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>
    <?php include "../php/sections/cat_menu.php"; ?>
    <section id="full_story">
      <div class="cat_container">



        <img src="<?php echo $row['img']; ?>">
        <?php
        if(isset($_SESSION['user']))
          echo '<div id="product_dropdown">
            <span onclick="showMe()">&#9776;</span>
              <div id="product_dropdown_content_container">
                <div id="product_dropdown_content">
                  <a href="red.php?id='.$row['id'].'">რედაქტირება</a>
                  <a style="cursor:pointer" data-id="del.php?id='.$row['id'].'" onclick="del(this)">წაშლა</a>
                </div>
              </div>
          </div>';
        ?>


        <h1 class="B_Arial"><?php echo $row['name'] ?></h1>
          <article>
            <p class="B_Arial">
                <?php echo $row['content']; ?>
            </p>
          </article>
        <div id="prod_phone" >
          <h2 class="B_Arial" ><?php echo $row['price']; ?> GEL</h2>
          <h1 class="Glaho" style="width:60% ; float:left" > &#9742; +995 568-77-86-37</h1>
          <h1 class="Glaho" style="width:60% ; float:left; margin-top:-23px" > &#9742; +995 568-77-86-27</h1>
        </div>
      </div>
    </section>
    <?php include "../php/sections/footer.php"; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/product.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
