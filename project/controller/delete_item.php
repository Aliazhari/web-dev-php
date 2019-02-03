<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   delete_item.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */
// controller to delete an item from the database
if ($_SESSION['admin']) {
	include('./model/orders_db.php');
	OrderDB::deleteItem($itemID);
}

?>