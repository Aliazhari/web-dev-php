<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   /model/orders_db.php
 * 
 * Course: CS602 - Spring-2018
 * Aproject 
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 *
 * *****************************
 *
 * This is a class CourseDB
 */

// include both database.php for connection and class 
include_once('database.php');

class OrderDB {

    // connect to the database
   
public static function addOrder($customerID) {

    $db = Database::getDB();

    $query = 'INSERT INTO orders (customerID)  VALUES (:customer_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customerID);
    
    $statement->execute();
    $order_id = $db->lastInsertId();
    $statement->closeCursor();
    return $order_id;
}

public static function addOrderItem($orderID, $productID, $quantity, $price) {

    $db = Database::getDB();

    $query = 'INSERT INTO order_items (orderID, productID, quantity, price)  VALUES (:order_id, :product_id, :quantity, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $orderID);
    $statement->bindValue(':product_id', $productID);
    $statement->bindValue(':quantity', $quantity);
    $statement->bindValue(':price', $price);
    $statement->execute();	
    $statement->closeCursor();
}

public static function getOrders($customerID) {
        // connect to the database
    $db = Database::getDB();
    try {  
    $query = 'SELECT * FROM orders WHERE customerID = :customer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customerID);
    $statement->execute();
    $orders = $statement->fetchAll();
    $statement->closeCursor();
  
    return $orders;

    } 
    catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}


public static function getOrderItems($orderID) {
        // connect to the database
    $db = Database::getDB();	
    try {  

    	$query = 'SELECT * FROM order_items o 
                  INNER JOIN products p ON o.productID = p.productID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  WHERE  o.orderID = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $orderID);
    $statement->execute();
    $orderItems = $statement->fetchAll();
    $statement->closeCursor();
        
    return $orderItems;

    } 
    catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}

public static function getOrderItem($orderID, $productID) {
        // connect to the database
    $db = Database::getDB();	
    try {  

    	$query = 'SELECT * FROM order_items o 
                  INNER JOIN products p ON o.productID = p.productID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing c ON p.productClothing = c.clothingID 
                  WHERE  ((o.productID = :product_id) AND (o.orderID = :order_id))';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $orderID);
    $statement->bindValue(':product_id', $productID);
    $statement->execute();
    $orderItem = $statement->fetchAll();
    $statement->closeCursor();
    return $orderItem;

    } 
    catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}
public static function deleteOrder($order_id) {
   
   $db = Database::getDB();	

    $query = 'DELETE FROM orders WHERE orderID = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->execute();
    $statement->closeCursor();
}

public static function deleteOrderItems($order_id) {
   
   $db = Database::getDB();	

    $query = 'DELETE FROM order_items WHERE orderID = :order_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->execute();
    $statement->closeCursor();
}

public static function updateOrder($orderID, $productID, $quantity) {
 
      $db = Database::getDB();
    $query = 'UPDATE order_items
        				SET quantity = :quantity
        WHERE productID = :product_id AND orderID = :order_id';
    try {
        $statement = $db->prepare($query);
       
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':product_id', $productID);
        $statement->bindValue(':order_id', $orderID);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       // display_db_error($error_message);
    }
}

}
?>