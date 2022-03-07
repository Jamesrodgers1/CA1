<!-- (A) SEARCH FORM -->
<form method="post" action="form.php">
  <h1>SEARCH FOR MAKE</h1>
  <input type="text" name="search" required/>
  <input type="submit" value="Search"/>
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR MAKE
  require "search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
  }} else { echo "No results found"; }
}
?>

<table>
<tr>
<th>Image</th>
<th>Make</th>
<th>Model</th>
<th>Year</th>
<th>Damage</th>
<th>Seized</th>
<th>Mileage</th>
<th>Colour</th>
<th>Usednew</th>
<th>Price</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<tr>
<td><img src="image_uploads/<?php echo $r['image']; ?>" width="100px" height="100px" /></td>
<td><?php echo $r['make']; ?></td>
<td><?php echo $r['model']; ?></td>
<td class="right"><?php echo $r['year']; ?></td>
<td><?php echo $r['damage']; ?></td>
<td><?php echo $r['seized']; ?></td>
<td><?php echo $r['mileage']; ?></td>
<td><?php echo $r['colour']; ?></td>
<td><?php echo $r['usednew']; ?></td>
<td class="right"><?php echo $r['price']; ?></td>

</tr>
</table>