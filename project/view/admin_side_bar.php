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
<div class="topnav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">Products</a></li>
        <li><a href="admin_customers.php">Customers</a></li>
        <li><a href="admin_add_product.php">Add Product</a></li>
        <li style="float:right"> <a href="logout.php">Logout <?php echo $_SESSION['adminName'];?> (Administrator) </a></li>
</ul>
</div>