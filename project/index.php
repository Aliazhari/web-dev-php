<?php 
session_start();
/**
 *
 * Author: Abdelali Azhari
 * File:   index.php
 * 
 * Course: CS602 - Spring-2018
 * project 
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

include 'util/util.php';
include_once('view/header.php');
require_once('model/products_db.php');
if (isset($_SESSION['admin'])) {
   
  include_once('view/admin_index_view.php');
  include_once('view/footer.php');
  exit();
}


$products = ProductDB::getAllProducts();
$categories = ProductDB::getCategories();
$brands = ProductDB::getBrands();
$clothings = ProductDB::getClothings();



// Show the header and main body and foother of the this page
include_once 'view/sidebar.php';
include_once 'view/index_view.php';
include_once 'view/footer.php'; 

?>

