<?php
 /**
 * Author: Abdelali Azhari
 * File:   add_to_cart_view.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

// the main body for the page that adds to the shopping cart
?>
<main>
	<aside>
		
		<nav>
			<?php include_once('view/left_side_menu.php'); ?>
		</nav>
	</aside>
	<section>
		<div id="add-to-cart-view">
			<table>
				<tr>
					<td>
						<h3><?php echo $product['productName'];?></h3>
						<p><?php echo $product['productDescription']; ?> 
						</p>
						<p> Price: $<?php echo $product['productPrice']; ?> </p>
						<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="add_product_form" class="add-product-form" name="add_product_form">
							<br>
							<label>Quantity: </label>
							<select name="quantity">
								<option value="1">1</option>
								<?php 
								$quantity = $product['productQuantity'];
								for ($i = 2; $i <= $quantity; $i++ )  {

									?>
								<option value="<?php echo $i; ?>">
									<?php echo $i; ?>
								</option>
								<?php } ?>
							</select>
							<input type="hidden" name="id" value="<?php echo $product['productID']; ?>">
							<input type="hidden" name="price" value="<?php echo $product['productPrice']; ?>">
							<br><br>
							<input type="submit" value="Add to Cart" id="submit">

						</form>
					</td>
				
				<td> <img src="<?php echo $product['productPicture'];?>" id="product-picture"/></td>
			</tr>
		</table>
	</div>
</section>
</main>