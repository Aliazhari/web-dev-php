<?php
/**
 *
 * Author: Ali Azhari
 * File:   /model/database.php
 *
 * *****************************
 *
 * This is a class Database that makes a c
 * onnection to the database and returns it
 */

class Database {

    // properties for connection
    private static $dsn = 'mysql:host=localhost;dbname=triko_db';
    private static $username = 'triko';
    private static $password = '1025Maxi';
    private static $db;

    // Make the constructor private to avoid making direcct object from outside
    private function __construct() {}

    /**
    * [getDB connect to the databasse and returns it if success, otherwise show error page]
    * @return [type] [description]
    */
    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            }
            catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('./errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
