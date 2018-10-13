<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>

    <?php include "../php/sections/head.php"; ?>

    <title>TOPELEKTRO.GE | ჩვენს შესახებ </title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
  </head>
  <body>
    <?php include "../php/sections/header.php"; ?>

    <section id="us">
      <div class="cat_container">
        <h1> <span id="us_qart" onclick="geoGetsClicket()"> ქართ</span> | <span id="us_rus" onclick="rusGetsClicked()">РУС</span> | <span id="us_eng" onclick="engGetsClicked()">ENG</span> </h1>

          <div class="about">
            <p class="B_Arial" style="font-size:150%"> კომპანია  ,,TOP ELEKTRO’’  დაარსდა  2016  წლის იანვარში.
              ,,TOP ELEKTRO’’ -ს საქმიანობას წარმოადგენს დაბალი და მაღალი ძაბვის ელექტროსამონტაჟო და გამანაწილებელი  პროდუქციის დისტრიბუცია საქართველოს ბაზარზე. ჩვენ ვამარაგებთ ყველა სამშენებლო ჰიპერმარკეტებს - დომინო,გორგია,ბრიკორამა. აგრეთვე 1000ზე მეტ სამშენებლო მაღაზიას ქვეყნის მაშტაბით.
              ,,TOP ELEKTRO’’-ს მომწოდებელია ,,TDM ELECTRIC’’-ი. 12 000 დასახელების ასორტიმენტით.
              ,,TOP ELEKTRO’’ გთავაზობთ უმაღლესი ხარისხის ნებისმიერი ტიპის ელექტროტექნიკურ პროდუქციას.
              ,,TOP ELEKTRO’’-ს  მთავირი დევიზი: ხარისხი, მისაღები ფასები, კმაყოფილი მომხმარებელი.
            </p>
          </div>

          <div class="about">
              <p style="font-size:150%"> The Company "TOP ELEKTRO" was founded in January, 2016.
                The activities of TOP ELEKTRO are the distribution of low and high voltage electrical and distribution products on the Georgian market. We supply all construction hypermarkets - Domino, Gorgia, Bricorama. Also, more than 1000 construction shops across the country.
                "TOP ELEKTRO" is supplied by "TDM ELECTRIC". 12 000 denominations.
                TOP ELEKTRO offers the highest quality of any type of electrical products.
                The main motto of "TOP ELEKTRO" is: quality, acceptable prices, satisfied customer.
              </p>
          </div>

          <div class="about">
              <p style="font-size:150%"> Компания «TOP ELEKTRO» была основана в январе 2016 года.
                Деятельность TOP ELEKTRO -  Модульная оборудования ниского и високого напряжение. на грузинском рынке  мы поставляем продукию во всех строительных гипермаркетов - Domino, Gorgia, Bricorama. Кроме етого, мы снабжаем более 1000 строительных магазинов по всей стране.
                «TOP ELEKTRO» реализует продуксию  «TDM ELECTRIC». С выше 12 000 наименований.
                TOP ELEKTRO предлагает высокое качество любого типа электро продукции.
                Основной девиз «TOP ELEKTRO»: качество, приемлемые цены, довольные клиенти.
              </p>
          </div>

      </div>
    </section>

    <?php include "../php/sections/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/about_us.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>
