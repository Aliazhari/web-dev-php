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

// 
// a controller to get orders by ID from the database
if ($_SESSION['admin']) {
include_once('./model/orders_db.php');
$orders = OrderDB::getOrders($id);
}
 ?>