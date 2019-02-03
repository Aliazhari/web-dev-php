<?php 
/**
 * Author: Abdelali Azhari
 * File:   get_orders.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets all orders from the database
include_once('./model/orders_db.php');
$orders = OrderDB::getOrders($_SESSION['customerID']);

 ?>