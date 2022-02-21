<?php
// Get the category data
$make = $make = filter_input(INPUT_POST, 'make');

// Validate inputs
if ($make == null) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database
    $query = "INSERT INTO categories (categoryName)
              VALUES (:make)";
    $statement = $db->prepare($query);
    $statement->bindValue(':make', $make);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php');
}
?>