<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   delete_product.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller to delete a product from the database
if ($_SESSION['admin']) {
	include('./model/products_db.php');
	ProductDB::deleteProduct($id);
}

?>