<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   get_brands.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets all items from an order from the database

$orderItems = OrderDB::getOrderItems($order['orderID']);

 ?>