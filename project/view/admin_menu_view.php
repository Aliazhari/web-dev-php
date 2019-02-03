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


?>
<div id="menu_container">
    <div class="welcome_message"><?php echo "Welcome " . $_SESSION['admin_name']. " (Administrator)"; ?>
        <span class="logout"><a href="logout.php">Logout</a></span>
    </div>
    <div id="admin_block">
        <div class="admin_btn all-products">Show Products</div>
        <div class="admin_btn add-product">Add a Product</div>
        <div class="admin_btn add-category">Add a Category</div>
        <div class="admin_btn add-brand">Add a Brand</div>
        <div class="admin_btn update-product">Show Customers</div>
        <div class="admin_btn delete-product">Delete a Product</div>
        <div class="admin_btn search-product">Search</div>
        <div class="clear"></div>
    </div>
   
    
    
</div>