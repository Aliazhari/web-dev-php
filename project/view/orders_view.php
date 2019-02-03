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
    <aside>
        <!-- display a list of courses -->
        
        <nav>
            <?php include_once('view/left_side_menu.php'); ?>
    </nav>
</aside>
<section>
    <div id="order-main">

        <?php
            include('controller/get_orders.php');?>
            <table>
            
<?php
            foreach($orders as $order) {
            	include_once('controller/get_order_items.php'); ?>
            	<tr>
    				<th colspan="6">Order #: <?php echo $order['orderID']. " made on " . $order['orderDate'];?></th>
    			</tr>
            	<?php foreach ($orderItems as $orderItem) { ?>
            	 
            	<tr>
            	<td><?echo $orderItem['productID'];?></td>
            	<td><?echo $orderItem['productName'];?></td>
            	<td><?echo $orderItem['brandName'];?></td>
            	<td><?echo $orderItem['clothingName'];?></td>
            	<td><?echo $orderItem['quantity'];?></td>
            	<td><?echo $orderItem['price'];?></td>
            
            	</tr> 
            	<?php
            }
        } ?>
            </table>
        
    </div>
</section>
</main>