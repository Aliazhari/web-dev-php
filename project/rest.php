<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   rest.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */


require_once('model/products_db.php');
require_once('rest/products.php');

// variable to be concatinated with json/xml
$header = 'Content-type: application/';

// read both inputs from GET format and action 
// and convert them to lowecase to make comparison easier
$format = strtolower(filter_input(INPUT_GET, 'format'));
$search = strtolower(filter_input(INPUT_GET, 'search'));

//  add header if format is either json or xml
//  concatenate $format (xml or json) with the variable $header
if ($format == 'xml' || $format == 'json') 
	header($header . $format);
	
if ($_GET['search_byname']) {
	$keyword = filter_input(INPUT_GET, 'search_byname');
	$products = ProductDB::getProductsByName($keyword);

}
elseif ($_GET['search_byprice']) {
	$min_price = filter_input(INPUT_GET, 'min_price');
	$max_price = filter_input(INPUT_GET, 'max_price');
	$products = ProductDB::getProductsByPrice($min_price, $max_price);
	
}
else {
	$products = ProductDB::getAllProducts();
}

if ($format == 'json') 
	echo  Products::toJson($products);
else echo Products::toXml($products);




?>


