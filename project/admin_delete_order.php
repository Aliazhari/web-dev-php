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
  $orderID= filter_input(INPUT_GET, 'order');
  include('controller/delete_order.php');
  $message = "Order #: ". $orderID . " has been deleted";
}
include('admin_customers.php');

?>