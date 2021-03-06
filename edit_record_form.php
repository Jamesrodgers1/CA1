<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Edit Product</h1>
        <form action="edit_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">
            <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" />
            <input type="hidden" name="record_id"
                   value="<?php echo $records['recordID']; ?>">

            <label>Category ID:</label>
            <input type="category_id" name="category_id"
                   value="<?php echo $records['categoryID']; ?>">
            <br>

            <label>Make:</label>
            <input type="input" name="make"
                   value="<?php echo $records['make']; ?>">
            <br>

            <label>Model:</label>
            <input type="input" name="model"
                   value="<?php echo $records['model']; ?>">
            <br>

            <label>Year:</label>
            <input type="input" name="year"
                   value="<?php echo $records['year']; ?>">
            <br>

            <label>Damage:</label>
            <input type="input" name="damage"
                   value="<?php echo $records['damage']; ?>">
            <br>

            <label>Seized:</label>
            <input type="input" name="seized"
                   value="<?php echo $records['seized']; ?>">
            <br>

            <label>Mileage:</label>
            <input type="input" name="mileage"
                   value="<?php echo $records['mileage']; ?>">
            <br>

            <label>Colour:</label>
            <input type="input" name="colour"
                   value="<?php echo $records['colour']; ?>">
            <br>

            <label>Usednew:</label>
            <input type="input" name="usednew"
                   value="<?php echo $records['usednew']; ?>">
            <br>

            <label>List Price:</label>
            <input type="input" name="price"
                   value="<?php echo $records['price']; ?>">
            <br>

            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>            
            <?php if ($records['image'] != "") { ?>
            <p><img src="image_uploads/<?php echo $records['image']; ?>" height="150" /></p>
            <?php } ?>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>