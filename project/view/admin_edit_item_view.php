 <?php
 /**
 * Author: Abdelali Azhari
 * File:   admin_edit_item.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */

?>
<main>
    <?php
    
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
    <div id="result">
        <div id="edit-product-view" class="form-view">
            <h1>Update Order</h1>
            <form action="admin_update_item.php" method="post" id="edit_product_form" name="edit_product_ajax">
                <table id="edit-product-table">
                    <tr>
                        <td>
                            <br>
                            <h3><?php echo $orderItem[0]['productName']; ?></h3>
                            <br>
                            <srong>Price: </srong>$<?php echo $orderItem[0]['productPrice']; ?> <br><br>
                            <strong>Brand: </strong><?php echo $orderItem[0]['brandName']; ?> <br><br>
                            <strong>Clothing: </strong><?php echo $orderItem[0]['clothingName']; ?> <br><br>

                            
                            <label>Quantity:</label>
                            <input type="text" name="product_quantity"
                            value="<?php echo htmlspecialchars($orderItem[0]['quantity']); ?>" required>
                            <br>
                            
                            <br/>
                            <input type="hidden" name="order_id" value="<?php echo $orderID; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $productID; ?>">
                            <label>&nbsp;</label>
                            <input type="submit" value="Update Item" class="admin-update--button">
                            
                            <br/>
                        </td>
                        <td> <img src="<?php echo htmlspecialchars($orderItem[0]['productPicture']); ?>"id="show-picture1"/></td>
                    </tr>
                </table>
                
            </form>
            
        </div>
        
        
    </div>
    
</main>