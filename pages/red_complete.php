<?php
session_start();

if(!isset($_SESSION['user']))
  header("location:/index.php");
else{
  include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";

  if(!empty($_POST['submit'])){
      $error = "";
      $post_id = $_POST['post_id'];
      $post_name = $_POST['name'];
      $post_img = "";
      $post_cat = $_POST['cat'];
      $post_content = $_POST['content'];
      $post_price = $_POST['price'];
      if(empty($_FILES['fileToUpload']['name'])){
        $post_img = $conn->query("SELECT img FROM products WHERE id = '{$post_id}'")->fetch_assoc();
        $post_img = $post_img['img'];
      }
      else{
        $img_name = $_FILES['fileToUpload']['name'];
        $img_temp_name = $_FILES['fileToUpload']['tmp_name'];
        $img_error = $_FILES['fileToUpload']['error'];
        $root = $_SERVER['DOCUMENT_ROOT'];
        $img_ext = strtolower($img_name);
        $img_ext = explode(".",$img_ext);
        $img_ext = end($img_ext);
        $post_img = '/imgs/product/'.uniqid("",true).'.'.$img_ext;
        $img_dir = $root.$post_img;

        if(!move_uploaded_file($img_temp_name,$img_dir))
          $img_error=1;
      }

      if($post_id != "" && $post_name != "" && $post_img != "" && $post_cat != "" && $post_content != ""){

        $update_sql = "UPDATE products SET img='{$post_img}', name ='{$post_name}', content='{$post_content}', price='{$post_price}', categories = '{$post_cat}' WHERE id='{$post_id}'";
        if($conn->query($update_sql))
          header("location:product.php?id={$post_id}");
        else
          die("ჩანაწერის შეცვლა ვერ განხორციელდა");
      }
      else{
        header("location:red.php?id={$post_id}&message=გთხოვთ შეავსოთ ყველა საჭირო ველი");
      }
  }

  else
    header("location:products.php");

}


?>
