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
<div class="leftside-link">
<h2>REST Links</h2>

<button class="accordion">All Products</button>
<div class="panel">
  <ul>
    <li>
 <a href="rest.php?format=xml">XML format</a> </li>
 <li>
  <a href="rest.php?format=json">JSON format</a></li>
</ul>
</div>

<button class="accordion">Search by Name</button>
<div class="panel">
  <form action="rest.php" method="get" class="form-search-byname">
    <input type="radio" name="format" value="json" checked> JSON
  <input type="radio" name="format" value="xml"> XML<br/><br/>
    <input type="text" id="search-byname" name="search_byname" placeholder="Search for..." required>
    <input type="submit" value="go" id="submit">
</form>
</div>

<button class="accordion">Price</button>
<div class="panel">
  <form action="rest.php" method="get" class="form-search-byname">
    <input type="radio" name="format" value="json" checked> JSON
    <input type="radio" name="format" value="xml"> XML<br/><br/>
    <input type="hidden" id="search-byprice" name="search_byprice" value="price">
    <input type="number" step="any" id="min_price" name="min_price" placeholder="Min" required>
    <input type="number" step="any" id="max_price" name="max_price" placeholder="Max" required><br/>
    <input type="submit" value="go" id="submit">
</form>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</div>
