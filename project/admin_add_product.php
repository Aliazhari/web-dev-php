<?php
session_start();
 /**
 * Author: Abdelali Azhari
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */


if ($_SESSION['admin']) {
     include('view/header.php');
  include('view/admin_side_bar.php');
  include('controller/get_categories.php');
  include('controller/get_brands.php');
  include('controller/get_clothings.php');
  include_once('view/admin_add_product_view.php');

   include('view/footer.php');
 }
else {
    include('index.php');
}
?>