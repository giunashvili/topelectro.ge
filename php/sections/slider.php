<section id="slider" class="Boxo">
  <div class="container">

    <div id="slider-container">


      <div class="slide">
        <img src="./imgs/slider/1.jpg">
      </div>

      <div class="slide">
        <img src="./imgs/slider/2.png">
      </div>


      <div class="slide">
        <img src="./imgs/slider/3.png">
      </div>


      <div class="slide">
        <img src="./imgs/slider/4.jpg">
      </div>

      <a class="prev" onclick="changeImage(--initialImg)">&#10094;</a>
      <a class="next" onclick="changeImage(++initialImg)">&#10095;</a>

      <div id="dots">
        <span class="dot active_dot" onclick="changeImage(1)"></span>
        <span class="dot" onclick="changeImage(2)"></span>
        <span class="dot" onclick="changeImage(3)"></span>
        <span class="dot" onclick="changeImage(4)"></span>
      </div>


    </div>

  </div>
</section>
