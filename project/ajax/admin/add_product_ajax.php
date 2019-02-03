<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   add_product_ajax.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */


// This is to respond to an ajax call it is used only when an administrator tries to add a product
// to stay in the same page to add more products without refreshinng the whole page
// 
// This send sends back json.
// 
header('Content-type: application/json');

// if (!isset($_SESSION['admin'])) {
$name = 	filter_input(INPUT_POST, 'product_name');
if ($name == null || $name == false) {
	echo json_encode(array("success" => false, "message" =>"Name of the product is Invalid"));
    exit();
}


$category = 	filter_input(INPUT_POST, 'product_category', FILTER_VALIDATE_INT);
if ($category == null || $category == false || $category == 0) {
	echo json_encode(array("success" => false, "message" =>"Category of the product is Invalid"));
    exit();
}
$brand = 	filter_input(INPUT_POST, 'product_brand', FILTER_VALIDATE_INT);
if ($brand == null || $brand == false || $brand == 0) {
	echo json_encode(array("success" => false, "message" =>"Brand of the product is Invalid"));
    exit();
}
$clothing = 	filter_input(INPUT_POST, 'product_clothing', FILTER_VALIDATE_INT);
if ($clothing == null || $clothing == false || $clothing == 0) {
	echo json_encode(array("success" => false, "message" =>"Clothing of the product is Invalid"));
    exit();
}
$quantity = filter_input(INPUT_POST, 'product_quantity', FILTER_VALIDATE_INT);
if ($quantity == null || $quantity == false) {
	echo json_encode(array("success" => false, "message" =>"Quantity of the product is Invalid"));
    exit();
}
$price = 	filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);
if ($price == null || $price == false) {
	echo json_encode(array("success" => false, "message" =>"Price of the product is Invalid"));
    exit();
}
$description = 	filter_input(INPUT_POST, 'product_description');
if ($description == null || $description == false) {
	echo json_encode(array("success" => false, "message" =>"Description of the product is Invalid"));
    exit();
}
$picture = 	filter_input(INPUT_POST, 'product_picture');
if ($picture == null || $picture == false) {
	echo json_encode(array("success" => false, "message" =>"Picture of the product is Invalid"));
    exit();
}

$clothing_array = array('1' => 'men', '2' => 'women', '3' => 'kids');

$picture = 'images/products/'. $clothing_array[$clothing].'/'. $picture;
// if all data was satinized and valid then add it to the database
require_once('../../model/products_db.php');
if (ProductDB::addProduct($name, (int) $category, (int) $brand, (int) $clothing, 
						(int) $quantity, (float) $price, $description, $picture) == 0) {
	$array = array("success" => false, "message" => "Error occured, please try again later");
	echo json_encode($array);
    exit();
}


// Send message to the client
$array = array("success" => true, "message" => "The product '" . $name. "' has been added successfully");
echo json_encode($array);


 ?>