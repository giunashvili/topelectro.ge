<?php

session_start();

include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";


$sql = "SELECT * FROM products ORDER BY id DESC";

$result = $conn->query($sql);

$num_rows =  $result->num_rows;




?>



<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | სრულიად</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>


    <section id="allprods">
      <div class="container">

        <table>

          <tr>
                  <td><p>#</p></td>
                  <td></td>
                  <td><h3>დასახელება</h3></td>
                  <td><b>ფასი</b></td>
          </tr>

          <?php
            $postnum=1;
            while($myresult = $result->fetch_assoc()){
              echo "<tr>
                      <td><p>".$postnum++."</p></td>
                      <td><img src='".$myresult['img']."'></td>
                      <td><p>".$myresult['name']."</p></td>
                      <td><p>".$myresult['price']." GEL</p></td>
                  </tr>";
            }
          ?>
        </table>

      </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="/js/main.js"></script>


  </body>
</html>
