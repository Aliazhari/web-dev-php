<?php
 
 /**
 * Author: Abdelali Azhari
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

$categories = ProductDB::getCategories();
$brands = ProductDB::getBrands();
$clothings = ProductDB::getClothings();
$products = ProductDB::getAllProducts();
?>

<main>
    <?php
   // include_once('admin_menu_view.php'); 
      include_once('admin_side_bar.php'); 
    ?>
    <div class="error">
        <strong>Error occured: </strong>
        <?php echo $error_message; ?>
    </div>
    <div class="info_message">
        <strong>Error occured: </strong>
        <?php echo $error_message; ?>
    </div>
    <div class="message">
        <strong><?php echo $message; ?></strong>
    </div>
    <div id="result">
        <?php
        // include_once('admin_add_product_view.php');
        include_once('view/display_products_view.php');
        ?>
        
        
    </div>
    
</main>