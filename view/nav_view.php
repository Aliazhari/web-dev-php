<?php
/**
 *
 * Author: Ali Azhari
 * File:   nav_view.php
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
     <li><a href="checkout.php"><img src="../images/checkout_icon.png"  alt="Checkout" width="20" height="20"/><span"></span><?php echo $_SESSION['shopping_cart'];?></a></li>
   <?php } ?>
   </ul>
   </div>
 </div>
</nav>
