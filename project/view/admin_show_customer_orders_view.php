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
<div id="order-main">
    <br>
    <Br>
    <?php
        if (count($orders) == 0) {
            echo "There are no orders for this customer";
        }
        else { ?>
    <table>
        
        <th>ID</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Clothing</th>
        <th>Qty</th>
        <th>Price</th>
        <th></th>
        
        <?php
        include_once('./model/orders_db.php');
        foreach ($orders as $order) {
        $orderItems = OrderDB::getOrderItems($order['orderID']);?>
        <tr>
            <th colspan="6">Order #: <?php echo $order['orderID']. " made on " . $order['orderDate'];?> 
            
        </th>
         <th><a href="admin_delete_order.php?order=<?php echo $order['orderID'];?>">Delete</a>
        </th>

        </tr>
        <?php foreach ($orderItems as $orderItem) { ?>
        
        <tr>
            <td><?echo $orderItem['productID'];?></td>
            <td><?echo $orderItem['productName'];?></td>
            <td><?echo $orderItem['brandName'];?></td>
            <td><?echo $orderItem['clothingName'];?></td>
            <td><?echo $orderItem['quantity'];?></td>
            <td>$<?echo $orderItem['price'];?></td>
            <td><a href="admin_edit_order.php?order=<?php echo $orderItem['orderID']. "&product=".$orderItem['productID'];?>">Update</a></td>
            
        </tr>
        <?php
        }
        } ?>
    </table>
    <?php } ?>
    
</div>