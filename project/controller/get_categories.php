<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   get_categories.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets all categories from the database
if ($_SESSION['admin']) {
	include_once('./model/products_db.php');
	$categories = ProductDB::getCategories();
}

?>