<?php
/**
*
* Author: Abdelali Azhari
* File:   /errors/database_error.php
*
* Course: CS602 - Spring-2018
* Project-
*
* Professor: Suresh Kalathur
* Facilitator:  Laura Davis
*
* *****************************
*
* This page is shown when there is an error with the database
* without showing the error message to the visitor.
*/

include './view/header.php'; ?>
<main>
	<h1>Error:</h1>
	<p class="first_paragraph">There was an error reaching
	this page</p>
	
	<p class="last_paragraph">Please try again later!!</p>
</main>
<?php include './view/footer.php'; ?>