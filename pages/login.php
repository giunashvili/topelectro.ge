<?php
session_start();

include $_SERVER['DOCUMENT_ROOT']."/php/sections/connection.php";

if(isset($_POST['logout'])){
  header("location:/pages/logout.php");
}

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username=="" or $password==""){
    echo "<script>alert('ლოგინის/პაროლის  ველი ცარიელია დარჩენილი');</script>";
    echo "<script>window.location.replace('/pages/login.php')</script>";
  }


      $proveSql = "SELECT * FROM users WHERE username='{$username}' and password='{$password}' ";

      $result = $conn->query($proveSql);

      if($result->num_rows){
        $_SESSION['user']=$username;
        header("Location:/index.php");
      }
      else{
        echo "<script>alert('არასწორი  ლოგინი/პაროლი')</script>";
        echo "<script>window.location.replace('/pages/login.php')</script>";
      }

}

?>


<html>
<head>
  <title>შესვლა!</title>
  <link rel="stylesheet" href="/style/main.css">
  <link rel="stylesheet" href="/style/fonts.css">
</head>
<body>
  <form id="login_form" method="post" action="#" class="login">

    <?php
      if(!isset($_SESSION['user'])){
        echo '<input type="text" name="username" placeholder="ლოგინი">
        <input type="password" name="password" placeholder="პაროლი">
        <input type="submit" name="submit" value="შესვლა">';
      }
      else{
        echo '<input type="submit" style="margin:auto" name="logout" value="გამოსვლა">';
      }
     ?>
  </form>
</body>
</html>
