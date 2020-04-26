<?php
// Get the user data
$name = $name = filter_input(INPUT_POST, 'name');
// Validate inputs
if ($name == null) {
    $error = "Invalid user data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');
    // Add the record to the database
    $query = "INSERT INTO users (username)
              VALUES (:name)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
    // Display the Category List page
    include('user_list.php');
}
?>