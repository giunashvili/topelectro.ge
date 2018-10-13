<?php

session_start();

if(!isset($_SESSION['user']))
  header("location:/index.php");

include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";



  $error='style="background-color: rgba(255, 0, 0, 0.4)"';
  $succsess = $nameError = $catError = $contentError = $priceError = $imageError = "";

if(isset($_POST['submit'])){


  if(isset($_FILES['fileToUpload'])){
    $imgName = $_FILES['fileToUpload']['name'];
    $imgTmpDir = $_FILES['fileToUpload']['tmp_name'];
    $imgError = $_FILES['fileToUpload']['error'];
    $imgSize = $_FILES['fileToUpload']['size'];
    $fileExt = explode(".",$imgName);
    $fileActualExt = strtolower(end($fileExt));

    $fileNameNew = uniqid("",true);

    $root_dir = $_SERVER['DOCUMENT_ROOT'];
    $fileDest = $root_dir."/imgs/product/".$fileNameNew.".".$fileActualExt;

    $imgDest = "/imgs/product/".$fileNameNew.".".$fileActualExt;

    if($imgError !== 0)
      $imageError = $error;
  }

  $post_name = $_POST['name'];
  $post_cat = $_POST['cat'];
  $post_content = $_POST['content'];
  $post_price = $_POST['price'];

  if($post_name == "")
    $nameError = $error;

  if($post_content == "")
    $contentError = $error;


  if($post_cat == "def")
    $catError = $error;


    if( $nameError == "" && $catError == "" && $contentError == "" && $imageError == "" ){

      move_uploaded_file($imgTmpDir,$fileDest);

      $newSql = "INSERT INTO products (img,name,content,price,categories) VALUES('{$imgDest}','{$post_name}','{$post_content}','{$post_price}', '{$post_cat}' )";


      if($conn->query($newSql)){
        echo '<script>alert("პროდუქტი წარმატებით დაემატა")</script>';
        echo '<script>window.location.replace("/pages/products.php")</script>';
      }
      else {
        die('პროდუქტის დამატება ვერ განხორციელდა');
      }

    }


}

?>





<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | პროდუქტის დამატება</title>

    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>
    <?php include "../php/sections/cat_menu.php"; ?>


  <section id="products" class="Nateli">

    <div class="cat_container">


        <div class="products_container">
          <?php echo $succsess; ?>
          <form action="#" method="POST" enctype="multipart/form-data" id="addNewProduct">
            <input type="text" name="name" placeholder="პროდუქტის დასახელება" <?php echo $nameError; ?>>

            <input type="file" name="fileToUpload" <?php echo $imageError; ?>>

            <select name="cat" <?php echo $catError; ?>>
              <option value="def">კატეგორია</option>
              <option value="avtomaturi_amomrtvelebi">ავტომატური ამომრთველები</option>
              <option value="brebi">ბრები</option>
              <option value="naturebi">ნათურები</option>
              <option value="elektrosadenebi">ელექტროსადენები</option>
              <option value="dzalovani_rozetebi">ძალოვანი როზეტები</option>
              <option value="aksesuarebi_elektrokaradebistvis">აქსესუარები ელექტროკარადებისთვის</option>
              <option value="karadebi_korpusebi">კარადები და კორპუსები</option>
              <option value="samontajo_naketobebi">სამონტაჟო ნაკეთობები</option>
              <option value="sazomi_khelsawyoebi">საზომი ხელსაწყოები</option>
              <option value="khelsawyoebi_da_datsviti_sashualebebi">ხელსაწყოები და დაცვითი საშუალებები</option>
              <option value="damagrdzeleblebi">დამაგრძელებლები</option>
              <option value="dzravis_maregulireblebi">ძრავის მარეგულირებლები</option>
              <option value="sipebi">სიპები</option>
              <option value="avtomatizireba_da_martva">ავტომატიზირება და მართვა</option>
              <option value="rozetebi_da_chamrtvelebi">როზეტები და ჩამრთველები</option>
              <option value="elektrosamontajo_naketobebi">ელექტროსამონტაჟო ნაკეთობები</option>
              <option value="zarebi_da_elementebi">ზარები და ელემენტები</option>
              <option value="ventilatsia_da_gamatboblebi">ვენტილაცია და გამათბობლები</option>
              <option value="reaktiuli_simdzlavris_kompensatsia">რეაქტიული სიმძლავრის კომპენსაცია</option>
              <option value="mekhamridi_da_damitseba">მეხამრიდი და დამიწება</option>
              <option value="eko_seria">ეკო სერია</option>

            <textarea name="content" placeholder="პროდუქტის აღწერა" <?php echo $contentError; ?>></textarea>

            <input type="text" name="price" placeholder="ფასი">

            <input type="submit" name="submit" value="დამატება" >


          </form>

      <br style="clear:both">
      <br>
      <br>
    </div>
    </div>
  </section>


    <script src="/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/add.js"></script>
  </body>
</html>
