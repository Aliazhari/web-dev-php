<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   /model/course_db.php
 * 
 * Course: CS602 - Spring-2018
 * Project 
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 *
 * *****************************
 *
 */

// include both database.php for connection and class 
include_once('database.php');

class ProductDB {
   
    public static function getAllProducts() {
        // connect to the database
        $db = Database::getDB();

        try {
       
        $query = 'SELECT * FROM products p 
                  INNER JOIN categories c ON p.productCategory = c.categoryID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  
                  ORDER BY productID';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        
        return $products;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}

public static function getProductByID($product_id) {
   $db = Database::getDB();
    $query = 'SELECT * FROM products p 
                  INNER JOIN categories c ON p.productCategory = c.categoryID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  WHERE p.productID LIKE :id
                  ORDER BY productID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $product_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       // display_db_error($error_message);
    }
}

    public static function getCategories() {
        // connect to the database
        $db = Database::getDB();

        try {
       
        $query = 'SELECT * FROM categories ORDER BY categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();
        
        return $categories;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}
public static function getBrands() {
        // connect to the database
        $db = Database::getDB();

        try {
       
        $query = 'SELECT * FROM brands ORDER BY brandID';
        $statement = $db->prepare($query);
        $statement->execute();
        $brands = $statement->fetchAll();
        $statement->closeCursor();
        
        return $brands;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}

public static function getClothings() {
        // connect to the database
        $db = Database::getDB();

        try {
       
        $query = 'SELECT * FROM clothing ORDER BY clothingID';
        $statement = $db->prepare($query);
        $statement->execute();
        $clothings = $statement->fetchAll();
        $statement->closeCursor();
        
        return $clothings;

        } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    }
}


    /**
     * [getCourse method that get course from the database and returns it as an object]
     * @param  [type] $course_id [course ID]
     * @return [type]            [course]
     */
    public static function getProductsByName($name) {

        // echo $course_id;
        $db = Database::getDB();
        $query = 'SELECT * FROM products p 
                  INNER JOIN categories c ON p.productCategory = c.categoryID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  WHERE p.productName LIKE :name
                  ORDER BY productID';
                 // WHERE p.productName LIKE :name'; 
        try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', "%$name%");
        // $statement->bindValue(1, "%PHP%", PDO::PARAM_STR);
        //$statement->execute(array("%PHP%"));
       $statement->execute();    
        $products = $statement->fetchAll();
        $statement->closeCursor();  
     
        return $products;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
     //   display_db_error($error_message);
    }

    }


    public static function getProductsByDescription($description) {
  

        $db = Database::getDB();

        $query = 'SELECT * FROM products p 
                  INNER JOIN categories c ON p.productCategory = c.categoryID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  WHERE p.productDescription LIKE :description
                  ORDER BY productID';
                 // WHERE p.productName LIKE :name'; 
        try {
        $statement = $db->prepare($query);
        $statement->bindValue(':description', "%$description%");
        // $statement->bindValue(1, "%PHP%", PDO::PARAM_STR);
        //$statement->execute(array("%PHP%"));
       $statement->execute();    
        $products = $statement->fetchAll();
        $statement->closeCursor();  
     
        return $products;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
     //   display_db_error($error_message);
    }
    
    }

    public static function getProductsByPrice($min, $max) {

        // echo $course_id;
        $db = Database::getDB();
  
        $query = 'SELECT * FROM products p 
                  INNER JOIN categories c ON p.productCategory = c.categoryID 
                  INNER JOIN brands b ON p.productBrand = b.brandID 
                  INNER JOIN clothing g ON p.productClothing = g.clothingID 
                  WHERE p.productPrice >= :min AND p.productPrice <= :max';
                 // WHERE p.productName LIKE :name'; 
        try {
        $statement = $db->prepare($query);
       $statement->bindValue(':min', $min);
      $statement->bindValue(':max', $max);
        $statement->execute();    
        $products = $statement->fetchAll();
        $statement->closeCursor();  
     
        return $products;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
     //   display_db_error($error_message);
    }
    
    }


   
    /**
     * [addCourse method that adds a course in the database table sk_courses
     * returns true if success and false when it fails]
     * @param [type] $course_id   [course ID]
     * @param [type] $course_name [course name]
     * @return [type]            [success]
     */
    public static function addProduct($name, $category, $brand, 
                                      $clothing, $quantity, $price, 
                                      $description, $picture) {
      
        $db = Database::getDB();

        $query = 'INSERT INTO products
                     (productName, productCategory, productBrand, 
                      productClothing, productQuantity, productPrice, 
                      productDescription, productPicture) VALUES 
                     (:name, :category, :brand, 
                      :clothing, :quantity, :price, 
                      :description, :picture)';
       try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':category', $category);
        $statement->bindValue(':brand', $brand);
        $statement->bindValue(':clothing', $clothing);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':picture', $picture);
        $success = $statement->execute();
        $statement->closeCursor();
        $product_id = $db->lastInsertId();
        return $product_id;
        } catch (PDOException $e) {
          return 0;
       
     }

    }

    public static function updateQuantity($product_id, $quantity) {
   
    $db = Database::getDB();

    $query = 'UPDATE products SET productQuantity = productQuantity - :quantity 
              WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       // display_db_error($error_message);
    }
}

public static function getProductQuantity($product_id) {
   $db = Database::getDB();
    $query = '
        SELECT * FROM products
        WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $product = $statement->fetch();
        $quantity = $product['productQuantity'];
        $statement->closeCursor();
        return $quantity;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        // display_db_error($error_message);
    }
}

public static function getProductPrice($product_id) {
   $db = Database::getDB();
    $query = '
        SELECT * FROM products
        WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $product = $statement->fetch();
        $price = $product['productPrice'];
        $statement->closeCursor();
        return $price;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        // display_db_error($error_message);
    }
}

public static function deleteProduct($product_id) {
   $db = Database::getDB();

    $query = 'DELETE FROM products WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       // display_db_error($error_message);
    }
}

/**
 * [updateProduct description]
 * @param  [type] $id          [description]
 * @param  [type] $name        [description]
 * @param  [type] $category    [description]
 * @param  [type] $brand       [description]
 * @param  [type] $clothing    [description]
 * @param  [type] $quantity    [description]
 * @param  [type] $price       [description]
 * @param  [type] $description [description]
 * @return [type]              [description]
 */
public static function updateProduct($id, $name, $category, $brand,
                        $clothing, $quantity, $price, $description) {

      $db = Database::getDB();

    $query = '
        UPDATE products
        SET productName = :name,
            productCategory = :category,
            productBrand = :brand,
            productClothing = :clothing,
            productQuantity = :quantity,
            productPrice = :price,
            productDescription = :description
           
        WHERE productID = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':category', $category);
        $statement->bindValue(':brand', $brand);
        $statement->bindValue(':clothing', $clothing);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
       // display_db_error($error_message);
    }
}

}
?>