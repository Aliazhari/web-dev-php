<?php
 session_start();
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

 unset($_SESSION['order']);
 if (!isset($_SESSION['customerID'])) {
 	$_SESSION['order'] = true;
    include ('login.php');
    exit();
 }
include_once('view/header.php');
include_once('view/sidebar.php');
 include_once('model/products_db.php');
 include_once('model/orders_db.php');
 $total = 0;
  $orderID = OrderDB::addOrder($_SESSION['customerID']);
  if (!isset($_SESSION['cart'])) {
  	include ('index.php');
    exit();
}
 foreach ($_SESSION['cart'] as $id => $quantity)  {
 	// $product = ProductDB::getProductByID($id);
 	$price = ProductDB::getProductPrice($id);
 	$priceItem = $price * $quantity;
 	OrderDB::addOrderItem($orderID, $id, $quantity, $priceItem);
 }

unset($_SESSION['cart'])

 ?>
<main>
	<aside>
		<nav> <?php include_once('view/left_side_menu.php'); ?> </nav>
	</aside>
	<section>
		<p>Thank you for shopping with us.</p>
	</section>
</main> 
<?php
include_once('view/footer.php');

 ?>

