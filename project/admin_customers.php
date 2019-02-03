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
  include('controller/get_customers.php');

  include('view/header.php');
  include_once('view/admin_show_customers_view.php');
  include('view/footer.php');
 }
else {
    include('index.php');
}
?>