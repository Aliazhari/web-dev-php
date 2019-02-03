<?php
 /**
 * Author: Abdelali Azhari
 * File:   update_order.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that update the order 
if ($_SESSION['admin']) {
	include('./model/orders_db.php');
	OrderDB::updateOrder((int) $orderID, (int) $productID, (int) $quantity);
}

?>