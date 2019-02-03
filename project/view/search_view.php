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
$search_by = filter_input(INPUT_GET, 'search');
if ($search_by == "by_name") {
$page_header = "Search by Name";
$input_name = "search_byname";
$input_id = "search-byname";
}
elseif  ($search_by == "by_description") {
$page_header = "Search by Description";
$input_name = "search_bydescription";
$input_id = "search-bydescription";
}
?>
<main>
    <div id="search-form" class="search-fom">
       
            <form action="products.php" method="get" class="form-search-view">
                 <h3><?php echo $page_header; ?></h3>
                <input type="hidden"  name="search" value="<?php echo $input_name;?>" >
                <input type="text" id="<?php echo $input_id;?>" name="<?php echo $input_name;?>" placeholder="Search for..." required>
                 <input type="submit" value="go" id="submit">
</form>
        </div>
    </main>
    <?php
   
    ?>