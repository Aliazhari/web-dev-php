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
  $id= filter_input(INPUT_GET, 'id');
  include('controller/get_product_by_id.php');
  include('view/header.php');
  include_once('view/admin_edit_product_view.php');

   include('view/footer.php');
 }
else {
    include('index.php');
}
?>