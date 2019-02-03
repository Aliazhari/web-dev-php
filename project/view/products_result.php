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

include './util/util.php';
include_once('header.php');
include_once 'sidebar.php';
?>
<main>
	<aside>
		<nav> <?php include_once('left_side_menu.php'); ?> </nav>
	</aside>
	<section>
		<?php include_once('display_products_view.php'); ?>
	</section>
</main>
<?php
include_once('footer.php');
?>