<?php
session_start();

if(isset($_POST['getData'])){
  include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";

  $start = $_POST['start'];
  $limit = $_POST['limit'];
  $response="";
  $cat = "";

  if(isset($_POST['cat'])){
    $cat = $_POST['cat'];
    if($cat=="all")
      $limitSql = "SELECT * FROM products ORDER BY id DESC LIMIT {$start},{$limit}";
    else
      $limitSql = "SELECT * FROM products WHERE categories='{$cat}' ORDER BY id DESC LIMIT {$start},{$limit}";
  }
  else{
    $searchKey = $_POST['searchKey'];
    if(empty($searchKey))
      exit("<script>window.location.replace('/pages/search.php')</script>");
    $limitSql = "SELECT * FROM products WHERE name LIKE '%{$searchKey}%' ORDER BY id DESC LIMIT {$start},{$limit}";

    if($start==0){
      $number = $conn->query("SELECT * FROM products WHERE name LIKE '%{$searchKey}%'")->num_rows;
      $response.= "<p style='font-size:150%' class='B_Arial'>მოიძებნა სულ <span style='color:red'>{$number}</span> ჩანაწერი</p><hr>";
      }
    }

  $result = $conn->query($limitSql);

  if(empty($cat) && !$start && !$result->num_rows)
    exit("<p style='font-size:150%;color:red'>მსგავსი ჩანაწერი ვერ მოიძებნა</p>");
  else if(!$start && !$result->num_rows)
    exit("<p style='font-size:150%'>ამ კატეგორიაში ჩანაწერი ჯერ არ დამატებულა</p>");

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $response.= "<a href='/pages/product.php?id=".$row['id']. "'>
          <div class='product'>
          <img src=".$row['img']. ">
            <h1>".$row['name']."</h1>
            </a>
            <hr>

            <div style='position:relative'>
            <h2>".$row['price']." GEL</h2>";

          if(isset($_SESSION['user'])){
              $response.= "<div class='products_dropdown'>
              <span class='click_dropdown' onclick='openDrowdown(this)'>&#9776;</span>
              <div class='products_dropdown_content'>
              <a href='red.php?id=".$row['id']."'>რედაქტირება</a>
              <a style='cursor:pointer' data-id='del.php?id=".$row['id']."' onclick='del(this)'>წაშლა</a>
              </div>
              </div>";
            }


      $response.= "</div></div>";
    }

    exit($response);
  }

  exit('reachedMax');
}
else{
  header("location:/index.php");
}

 ?>
