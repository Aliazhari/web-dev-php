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


include ('util/util.php');
require_once('model/products_db.php');
include_once('view/header.php');
 include_once('view/sidebar.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$quantity = filter_input(INPUT_POST, 'quantity');
	$id = filter_input(INPUT_POST, 'id');
	$_SESSION['cart'][$id] = $quantity;
	ProductDB::updateQuantity($id, (int) $quantity);
	$products = ProductDB::getAllProducts();
    include_once('view/products_result.php');
}
else {
$product_id = filter_input(INPUT_GET, 'id');
$product = ProductDB::getProductByID ($product_id);
include_once('view/add_to_cart_view.php');
}
include_once('view/footer.php');


?>

