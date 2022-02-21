<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Make:</label>
            <input type="input" name="make">
            <br>

            <label>Model:</label>
            <input type="input" name="model">
            <br>  
            
            <label>Year:</label>
            <input type="input" name="year">
            <br>  

            <label>Damage:</label>
            <input type="input" name="damage">
            <br>  

            <label>Seized:</label>
            <input type="input" name="seized">
            <br>
            
            <label>Mileage:</label>
            <input type="input" name="mileage">
            <br>  

            <label>Colour:</label>
            <input type="input" name="colour">
            <br>  

            <label>Usednew:</label>
            <input type="input" name="usednew">
            <br>  

            <label>Price:</label>
            <input type="input" name="price">
            <br>  
            
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Record">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>