<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   add_pget_products.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

//
// controller to get all products
if ($_SESSION['admin']) {
include_once('./model/products_db.php');
$products = ProductDB::getAllProducts();
}
 ?>