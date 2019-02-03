<?
/**
 *
 * Author: Abdelali Azhari
 * File:   delete_order.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller to delete an order from the database
if ($_SESSION['admin']) {
	include('./model/orders_db.php');
	OrderDB::deleteOrder($orderID);
	OrderDB::deleteOrderItems($orderID);
}

?>