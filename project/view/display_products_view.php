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
<div id="display-products-view">
  <table>
    <?php
    foreach ($products as $product) :
    $image = $product['productPicture'];
    ?>
    <tr>
      <td>
        <h3><?php echo $product['productName']; ?></h3>
        <p><?php echo $product['productDescription']; ?> </p>
        <ul>
          
          <li><strong>Category:</strong> <?php echo $product['categoryName']; ?></li>
          <li><strong>Brand:</strong> <?php echo $product['brandName']; ?></li>
          <li><strong>Clothing:</strong> <?php echo $product['clothingName']; ?></li>
          <li><strong>Price:</strong> <span class="price"><?php echo '$'.$product['productPrice']; ?></span></li>
          <?php if (isset($_SESSION['admin'])) { ?>
          <li><strong>In Stock:</strong> <?php echo $product['productQuantity']; } ?></li>
          <li><strong>Product ID:</strong> <?php echo $product['productID']; ?></li>
        </ul>
        <?php if (isset($_SESSION['admin'])) { ?>
        <a href="admin_delete_product.php?id=<?php echo $product['productID'];?>" class="button delete-button">Delete</a>
        <a href="admin_edit_product.php?id=<?php echo $product['productID'];?>" class="button update-button">Update</a>
        <?php } else { ?>
        <a href="add_to_cart.php?id=<?php echo $product['productID'];?>" class="button">Add to Cart</a>
        <?php } ?>
      </td>
      <td>
        <img src="<?php echo  $image; ?>" width="132" height="157" />
      </td>
    </tr>
      <?php endforeach; ?>
      </table>
    </div>