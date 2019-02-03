<?php
/**
 *
 * Author: Ali Azhari
 * File:   index.php
 *
 * 2018
 */

 ?>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Triko</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">HOME</a></li>
        <li><a href="clearance.php">CLEARANCE</a></li>
        <li><a href="deals.php">DEALS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP BY DEPARTMENT
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="shop.php?dept=women">WOMEN</a></li>
            <li><a href="shop.php?dept=men">MEN</a></li>
            <li><a href="shop.php?dept=kids">KIDS</a></li>
              <li><a href="shop.php?dept=shoes">SHOES</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
      <?php if ($_SESSION['shopping_cart'] > 0) { ?>
      <li><a href="checkout.php"><img src="../images/checkout_icon.png"  alt="Checkout" width="20" height="20"/><span"></span>0</a></li>
    <?php } ?>
    </ul>
    </div>
  </div>
</nav>



 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
       include_once('controller/get_main_images.php');
       $active = "active";
      foreach ($main_images as $image) {

        $alt = $image['alt'];
        $image_name = $image['name'];
        $path = "./" . $image['path']. "/". $image_name;
        $description = $image['description'];

        ?>

        <div class="item <?php echo $active;?>">
          <div class="carousel-caption">
            <h3><?php echo $description;?></h3>
            <p class="discounted"></p>
          </div>
          <img src="<?php echo $path;?>" alt="<?php echo $alt;?>" width="1200" height="700">

        </div>

        <?php
        $active = "";
      }


       ?>
  <!--    <div class="item active">
        <div class="carousel-caption">
          <h3>ONLINE & IN STORE</h3>
          <p class="discounted">25% - 75%</p>
        </div>
        <img src="../images/index_show_1.jpg" alt="New York" width="1200" height="700">

      </div>

      <div class="item">
        <img src="../images/index_show_2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SALE & CLEARANCE</h3>
          <p class="discounted">25% - 75%</p>
        </div>
      </div>

      <div class="item">
        <img src="../images/index_show_3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SHOES & ACCESSORIES</h3>
          <p class="discounted">SHOP NOW</p>
        </div>
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
