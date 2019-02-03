<?php
 /**
 * Author: Abdelali Azhari
 * File:   admin_add_product_view.php
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */


?>
<div id="add-product-view" class="form-view">

    <h1>Add Product</h1>
    <div class="error">
        <strong>Error occured: </strong>
        <?php echo $error_message; ?>
    </div>
    <div class="info_message">
        <strong>Error occured: </strong>
        <?php echo $error_message; ?>
    </div>
    <form action="index.php" method="post" id="add_product_form" class="prevent-form" name="add_product_ajax">

     <table id="add-product-table">
        <tr>
            <td>
                <br>
        <label>Name:</label>
        <input type="text" name="product_name"
               value="<?php echo htmlspecialchars($product['productName']); ?>" required>
        <br>
    

        <label>Category: </label>
        <select name="product_category">
            <option value="0">--Choose a category--</option>
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo htmlspecialchars($category['categoryName']); ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Brand: </label>
        <select name="product_brand">
            <option value="0">--Choose Brand--</option>
        <?php foreach ($brands as $brand) : ?>
            <option value="<?php echo $brand['brandID']; ?>">
                <?php echo htmlspecialchars($brand['brandName']); ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Clothing: </label>
        <select name="product_clothing">
            <option value="0">--Choose Type--</option>
        <?php foreach ($clothings as $clothing) : ?>
            <option value="<?php echo $clothing['clothingID']; ?>">
                <?php echo htmlspecialchars($clothing['clothingName']); ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Quantity:</label>
        <input type="text" name="product_quantity"
               value="" required>
        <br>

        <label>Price:</label>
        <input type="text" name="product_price" 
               value="" required 
               size="20">
        <br>


        <label>Description:</label>
        <textarea name="product_description" rows="10"
                  cols="50" required></textarea>
        <br>

        <label>Select image to upload:</label>
       <input type="file" name="file" id="picture_file" accept="image/*" onchange="loadFile(event)" required>
        <input type="hidden" name="product_picture" id="product_picture" value="" required>
        <br/>

        <label>&nbsp;</label>
       <!-- <input type="submit" value="Add Product" class="admin-submit-button"> -->
       <button class="admin-submit-button">Add Product</button> 
        <br/>
        </td>
        <td> <img id="show-picture"/></td>
        </tr>
    </table>

        
    </form>
    

</div>