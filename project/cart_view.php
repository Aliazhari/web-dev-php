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

include_once('view/header.php');
include_once('view/sidebar.php') ?>
<main>
    <aside>
        <nav>
            <?php include_once('view/left_side_menu.php'); ?>
    </nav>
</aside>
<section>
    <h1>Your Cart</h1>
 <?php   

 if (!isset($_SESSION['cart'])) {  ?>

       <p>There are no products in your cart.</p>

<?php }

else {

?>

<div id="cart-view">

  <table>
    <?php
   include_once('model/products_db.php');
   $totoal = 0;
    foreach ($_SESSION['cart'] as $id => $quantity)  {
        $product = ProductDB::getProductByID($id);
        $image = $product['productPicture'];
        $itemPrice = $product['productPrice'] * $quantity;
        $total = $total + $itemPrice;
    ?>
    <tr>
      <td>
        <h3><?php echo $product['productName']; ?></h3>
        <p><?php echo $product['productDescription']; ?> </p>
        <ul>
          <li><strong>Price per unit:</strong> $<?php echo $product['productPrice']; ?></li>
          <li><strong>Quantity:</strong> <?php echo $quantity; ?></li>
          <li><strong>Price:</strong> <span class="price">
            <?php echo '$'.$itemPrice; ?></span></li>
         </li>
        </ul>
        
      </td>
      <td>
        <img src="<?php echo  $image; ?>" width="132" height="157" />
      </td>
    </tr>
      <?php }; ?>
      <tr>
          <td>
            <p>Total Amount: $<?echo $total; ?></p>
               <a href="order.php" class="button">Order Now</a>
          </td>
          <td></td>
      </tr>
      </table>
    </div> <?php } ?>
</section>
</main>
<?php include 'view/footer.php'; ?>