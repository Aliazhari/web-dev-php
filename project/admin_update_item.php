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
  $orderID= filter_input(INPUT_POST, 'order_id');
  $productID= filter_input(INPUT_POST, 'product_id');
  $quantity= filter_input(INPUT_POST, 'product_quantity');
  include('controller/update_order.php');
  $message = "Order #: ". $orderID . " has been updated";
}
include('admin_customers.php');

?>