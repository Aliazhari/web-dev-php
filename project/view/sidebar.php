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
require_once('model/products_db.php');
$categories = ProductDB::getCategories();
$brands = ProductDB::getBrands();
$clothings = ProductDB::getClothings();
?>
<div class="topnav">
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        
            <?php if (isset($_SESSION['customer']))  { ?>
            <li><a href="orders.php">Orders</a></li>
            <?php } ?>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Search</a>
            <div class="dropdown-content">
                <a href="search.php?search=by_name">By Name</a>
                <a href="search.php?search=by_description">By Description</a>
                
            </div>
        </li>
        
        
        <li style="float:right"><a href="cart_view.php">Shopping Cart</a></li>
        <?php if (isset($_SESSION['customer']))  { ?>
        <li style="float:right"> <a href="logout.php">Logout <?php echo $_SESSION['customerName'];?></a></li>
        <?php } else { ?>
        <li class="dropdown" style="float:right"> <a href="javascript:void(0)" class="dropbtn">Login</a>
        <div class="dropdown-content">
            <a href="login.php">Customer</a>
            <a href="login.php?admin=admin">Administrator</a>
        </div>
    </li>
    
    <?php } ?>
</ul>
</div>