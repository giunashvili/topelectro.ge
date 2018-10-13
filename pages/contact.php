
<?php
session_start();

$err;

if(isset($_POST['name'])){
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $msg = $_POST['message'];

  if($name != "" && $mail != "" && $msg != ""){

    $msg = "გამომგზავნი: {$name} "."\r\n\r\n\r\n" . $msg."\r\n\r\n\r\n"."FROM: ".$mail;
    
	if(mail("top.elektro@mail.ru","TOPELECTRO MESSAGE",$msg))
      		$err = '<p style="color:green;margin:10px;"> მეილი წარმატებით გაიგზავნა </p>';
    	else
      		$err = '<p  style="color:red;margin:10px;"> მეილი ვერ გაიგზავნა</p>';
  }
  else 
    $err = '<p style="color:red;margin:10px;">შეავსეთ ყველა ტექსტური ველი</p>';
}

 ?>

<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | კონტაქტი</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>

    <section id="contact">
      <div class="cat_container">
	<?php echo $err; ?>
        <h1 class="Glaho">დ ა გ ვ ი კ ა ვ შ ი რ დ ი თ</h1>
        <form action="#" method = 'post'>
          <input type="text" name="name" placeholder="შეიყვანეთ თქვენი სახელი">
          <input type="text" name="mail" placeholder="შეიყვანეთ თქვენი მეილი">
          <textarea name="message" placeholder="დაგვიკავშირდით..."></textarea>
          <button>გაგზავნა</button>
        </form>
      </div>
    </section>

    <?php include "../php/sections/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/contact.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>
