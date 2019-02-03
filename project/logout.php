<?php
session_start();
session_unset();
session_destroy();

 /**
 * Author: Abdelali Azhari
 * 
 * Course: CS602 - Spring-2018
 * Project
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 * Logout.php
 *
 * Make sure all the sessions are destroyed when the user or the admin logout.
 */



// back to home page
header("location:index.php");
exit();
?>