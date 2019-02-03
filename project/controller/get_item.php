<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   get_items.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets an item from an order from the database
include_once('./model/orders_db.php');
if ($_SESSION['admin']) {
$orderItem = OrderDB::getOrderItem($orderID, $productID);
}

 ?>