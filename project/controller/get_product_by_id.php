<?php 
 /**
 * Author: Abdelali Azhari
 * File:   get_product_by_id.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets a product by its id from the database
// and also get all categories, brands and clothings to be used in the view
include_once('./model/products_db.php');
$product= ProductDB::getproductByID($id);
$categories= ProductDB::getCategories();
$brands= ProductDB::getBrands();
$clothings= ProductDB::getClothings();

 ?>