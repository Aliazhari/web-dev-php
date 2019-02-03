<?php 
session_start();
/**
 *
 * Author: Abdelali Azhari
 * File:   products.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */


// include both models
// course_db.php is the model for manipulating the table sk_courses
// student_db.php is the model for manipulating the table sk_students
require_once('model/products_db.php');

// variable to be concatinated with json/xml
$header = 'Content-type: application/';

// read both inputs from GET format and action 
// and convert them to lowecase to make comparison easier
$format = strtolower(filter_input(INPUT_GET, 'format'));
$search = strtolower(filter_input(INPUT_GET, 'search'));

//  add header if format is either json or xml
//  concatenate $format (xml or json) with the variable $header
if ($format == 'xml' || $format == 'json') {
	header($header . $format);
	require_once('rest/products.php');
}




if  ($search == null || $search== false) {
	$products = ProductDB::getAllProducts();
		if ($format == 'json') {  
			
			echo  Products::toJson($products);
			exit();
		}
		elseif ($format == 'xml') {
	    	echo Products::toXml($products);
	    	exit();
		}
			
		else {
			include('view/products_result.php');
  			exit();
		}
}


 elseif ($search == 'search_byname') {
 	$by_name = filter_input(INPUT_GET, 'search_byname');
 	$products = ProductDB::getProductsByName($by_name);
 	include('view/products_result.php');
    exit();

 }
  elseif ($search == 'search_bydescription') {
 	$by_description = filter_input(INPUT_GET, 'search_bydescription');
 	$products = ProductDB::getProductsByDescription($by_description);
 	include('view/products_result.php');
    exit();

 }

?>


