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
	$orderID = filter_input(INPUT_GET, 'order');
  	$productID = filter_input(INPUT_GET, 'product');
    include('controller/get_item.php');
  	include('view/header.php');
  	include_once('view/admin_edit_item_view.php');
   	include('view/footer.php');
 }

?>