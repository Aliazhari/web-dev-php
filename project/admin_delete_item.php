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
  $itemID= filter_input(INPUT_GET, 'order');
  include('controller/delete_item.php');
  $message = "Order Item #: ". $itemID . " has been deleted";
}
include('admin_customers.php');

?>