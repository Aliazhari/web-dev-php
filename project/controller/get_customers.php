<?php 
/**
 *
 * Author: Abdelali Azhari
 * File:   get_customers.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// controller that gets all customers from the database
// 
if ($_SESSION['admin']) {
include_once('./model/customer_db.php');
$customers = CustomerDB::getCustomers();

}
 ?>