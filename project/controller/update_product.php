<?php
 /**
 * Author: Abdelali Azhari
 * File:   update_product.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that updates the product from the database
if ($_SESSION['admin']) {

$id = 	filter_input(INPUT_POST, 'product_id');
$name = 	filter_input(INPUT_POST, 'product_name');
$category = 	filter_input(INPUT_POST, 'product_category', FILTER_VALIDATE_INT);
$brand = 	filter_input(INPUT_POST, 'product_brand', FILTER_VALIDATE_INT);
$clothing = 	filter_input(INPUT_POST, 'product_clothing', FILTER_VALIDATE_INT);
$quantity = filter_input(INPUT_POST, 'product_quantity', FILTER_VALIDATE_INT);
$price = 	filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);
$description = 	filter_input(INPUT_POST, 'product_description');

require_once('./model/products_db.php');
ProductDB::updateProduct($id, $name, (int) $category, (int) $brand, (int) $clothing, 
						(int) $quantity, (float) $price, $description);
$message = "Product has been updated successfully";
}


