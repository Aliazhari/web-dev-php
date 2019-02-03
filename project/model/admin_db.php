<?php
 /**
 * Author: Abdelali Azhari
 * File:   admin_db.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// database for admin

include_once('database.php');

class AdminDB {

/**
 * [isValidAdminLogin description]
 * @param  [type]  $email    [description]
 * @param  [type]  $password [description]
 * @return boolean           [description]
 */
	public static function isValidAdminLogin($email, $password) {
        // connect to the database
        $db = Database::getDB();

        $query = 'SELECT * FROM administrators
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
 * [getAdminByEmail description]
 * @param  [type] $email [description]
 * @return [type]        [description]
 */
	function getAdminByEmail ($email) {
		
    $db = Database::getDB();

    $query = 'SELECT * FROM administrators WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $admin = $statement->fetch();
    $statement->closeCursor();
    return $admin;
}
}

?>