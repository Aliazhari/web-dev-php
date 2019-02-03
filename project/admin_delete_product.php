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
  include('controller/delete_product.php');
}
include('index.php');

?>
