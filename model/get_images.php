<?php
 /**
 * Author: Abdelali Azhari
 * File:   main_images_db.php
 *
 *
 */



include_once('database.php');

class Main_Images_DB {


    public static function get_main_images() {
          // connect to the database
        $db = Database::getDB();

        try {
        $query = 'SELECT * FROM main_images_tb
                  ORDER BY id';
        $statement = $db->prepare($query);
        $statement->execute();
        $main_images = $statement->fetchAll();
        $statement->closeCursor();

        return $main_images;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }

}

}

?>
