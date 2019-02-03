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
   // include_once('admin_menu_view.php'); 
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
    <div class="message">
        <strong><?php echo $message; ?></strong>
    </div>
    <div id="display-customers-view">
  <h3>Customers</h3>
  <table>
    <?php foreach($customers as $customer) {

    ?>
  <tr>
    <td><?php echo $customer['customerID'];?></td>
    <td><?php echo $customer['firstName'];?></td>
    <td><?php echo $customer['lastName'];?></td>
    <td><?php echo $customer['emailAddress'];?></td>
    <td><a href="admin_show_customer_orders.php?id=<?php echo $customer['customerID'];?>">show Orders</a></td>
    

  </tr>
  <?php } 
   $message = "";
  ?>
  </table>
  </div>
    
</main>


