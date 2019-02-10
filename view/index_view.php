<?php
/**
 *
 * Author: Ali Azhari
 * File:   index.php
 *
 * 2018
 */

 ?>



 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php
       include_once('controller/get_main_images.php');
      $length = count($main_images);
      $active = "active";
      for($i = 0; $i < $length ; $i++) {
      ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
      <?php
      $active = "";
    }
       ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php

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
