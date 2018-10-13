  <header id="topheader">
      <div class="headcontainer">

        <a href="/index.php">
        <div id='logo'>
           <h1 style="display:none"><span class="L_TMD">TMD</span><span class="L_TOP"> Top</span><span class="L_ELECTRO">Electro.ge</span></h1> 

          <img src='/imgs/logo.png' width="200"> 

        </div>
        </a>

        <nav id="menu">
          <ul class="B_Arial">
            <li><a href="/" class="current">მთავარი გვერდი</a></li>
            <li><a href="/pages/products.php">პროდუქტი</a></li>
            <li><a href="/pages/us.php">ჩვენს შესახებ</a></li>
            <li><a href="/pages/contact.php">კონტაქტი</a></li>
          </ul>
        </nav>
        <?php

        if(isset($_SESSION['user'])){
          echo '<div id="dropdown">
            <span class="dropdown_sign"  onclick="dropdown()">&#9776;</span>
            <div id="myDropdown" class="dropdown_content" style="z-index:99">
              <a href="/pages/add.php">პროდუქტის დამატება</a>
              <a href="/pages/logout.php">გასვლა</a>
            </div>
          </div>';
        }
        else{
          echo '<div id="dropdown"><span id="login_sign"><a href="/pages/login.php">&#9899;</a></span></div>';
        }

        ?>
      </div>
    </header>
