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
            <h1>Update Product</h1>
            <form action="admin_update_product.php" method="post" id="edit_product_form" name="edit_product_ajax">
                <table id="edit-product-table">
                    <tr>
                        <td>
                            <br>
                            <label>Name:</label>
                            <input type="text" name="product_name"
                            value="<?php echo htmlspecialchars($product['productName']); ?>" required>
                            <br>
                            
                            <label>Category: (<?php echo htmlspecialchars($product['categoryName']); ?>) </label>
                            <select name="product_category">
                                <option value="0">--Choose a category--</option>
                                <?php foreach ($categories as $category) : ?>
                                <option value="<?php echo $category['categoryID']; ?>" <?php echo  $product['productCategory'] == $category['categoryID']? "selected":"";?>>
                                    <?php echo htmlspecialchars($category['categoryName']); ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <label>Brand:  (<?php echo htmlspecialchars($product['brandName']); ?> </label>
                            <select name="product_brand">
                                <option value="0">--Choose Brand--</option>
                                <?php foreach ($brands as $brand) : ?>
                                <option value="<?php echo $brand['brandID']; ?>" <?php echo  $product['productBrand'] == $brand['brandID']? "selected":"";?>>
                                    <?php echo htmlspecialchars($brand['brandName']); ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <label>Clothing:  (<?php echo htmlspecialchars($product['clothingName']); ?></label>
                            <select name="product_clothing">
                                <option value="0">--Choose Type--</option>
                                <?php foreach ($clothings as $clothing) : ?>
                                <option value="<?php echo $clothing['clothingID']; ?>" <?php echo  $product['productClothing'] == $clothing['clothingID']? "selected":"";?>>
                                    <?php echo htmlspecialchars($clothing['clothingName']); ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <label>Quantity:</label>
                            <input type="text" name="product_quantity"
                            value="<?php echo htmlspecialchars($product['productQuantity']); ?>" required>
                            <br>
                            <label>Price:</label>
                            <input type="text" name="product_price"
                            value=" <?php echo htmlspecialchars($product['productPrice']); ?>" required
                            size="20">
                            <br>
                            <label>Description:</label>
                            <textarea name="product_description" rows="10"
                            cols="50" required><?php echo htmlspecialchars($product['productDescription']); ?></textarea>
                            
                            <br/>
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['productID']); ?>">
                            <label>&nbsp;</label>
                            <input type="submit" value="Update Product" class="admin-update--button">
                            
                            <br/>
                        </td>
                        <td> <img src="<?php echo htmlspecialchars($product['productPicture']); ?>"id="show-picture1"/></td>
                    </tr>
                </table>
                
            </form>
            
        </div>
        
        
    </div>
    
</main>