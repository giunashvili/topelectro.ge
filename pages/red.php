<?php
session_start();

if(!isset($_SESSION['user']))
  header("location:/index.php");

if(!isset($_GET['id']))
  header("location:products.php");

  include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";


$post_id = $_GET['id'];

$postSql = "SELECT * FROM products WHERE id = {$post_id}";

$result = $conn->query($postSql);

if(!$result->num_rows)
  header("location:products.php");

$rows = $result->fetch_assoc();

$getName = $rows['name'];
$getImg = $rows['img'];
$getContent = $rows['content'];
$getPrice = $rows['price'];
$getCat = $rows['categories'];


?>

<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | რედაქტირება </title>

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
          <?php
          if(isset($_GET['message'])){
            echo "<p style='color:red; font-size:150% ' >".$_GET['message']."</p>";
          }

          ?>
          <form action="red_complete.php" method="POST" enctype="multipart/form-data" id="addNewProduct">
            <input type="text" name="name" value="<?php echo $getName; ?>" >

            <input type="file" name="fileToUpload">
            <input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
            <select name="cat">
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

            <textarea name="content"><?php echo $getContent; ?></textarea>

            <input type="text" name="price" value="<?php echo $getPrice; ?>">

            <input type="submit" name="submit" value="რედაქტირება">


          </form>

      <br style="clear:both">
      <br>
      <br>
    </div>
    </div>
  </section>



    <script>
    var cat = '<?php echo $getCat; ?>';

    var opts = document.getElementsByTagName('option');
    var myOpt;
    for(var i=0;i< opts.length ; i++){
      if(opts[i].getAttribute("value")==cat){
        myOpt = opts[i];
        break;
      }
    }

    myOpt.setAttribute("selected","selected");

    </script>

    <script src="/js/red.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>



  </body>
</html>
