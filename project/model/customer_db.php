<?php
 /**
 * Author: Abdelali Azhari
 * File:   customer_db.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */



include_once('database.php');

class CustomerDB {

/**
 * [isValidCustomerLogin description]
 * @param  [type]  $email    [description]
 * @param  [type]  $password [description]
 * @return boolean           [description]
 */
	public static function isValidCustomerLogin($email, $password) {
        // connect to the database
        $db = Database::getDB();

        $query = 'SELECT * FROM customers
              WHERE emailAddress = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
	}


/**
 * [getCustomers description]
 * @return [type] [description]
 */
    public static function getCustomers() {
          // connect to the database
        $db = Database::getDB();

        try {
        $query = 'SELECT * FROM customers 
                  ORDER BY customerID';
        $statement = $db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll();
        $statement->closeCursor();
        
        return $customers;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }

}


    /**
     * [getCustomerByEmail description]
     * @param  [type] $email [description]
     * @return [type]        [description]
     */
	public static function getCustomerByEmail ($email) {
		
    $db = Database::getDB();

    $query = 'SELECT * FROM customers WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}
}

?>