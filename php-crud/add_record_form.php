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
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="./sass/main.css">
</head>
<!-- the body section -->
<body>
<?php include './includes/header.php';?>


    <main>
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

<<<<<<< HEAD
            <label>Subscribers:</label>
            <input type="input" name="subs">
            <br>

            <label>Name:</label>
            <input type="input" name="name" required>
            <br>

            <label>dob:</label>
            <input type="date" name="dob">
=======
            <label>Most Viewed Video</label>
            <input type="input" name="name">
            <br>

            <label>Name:</label>
            <input type="input" name="code">
            <br>

            <label>Subscribers:</label>
            <input type="input" name="price">
>>>>>>> parent of 386f376... Revert "changed sebgates code for category to youtube info"
            <br>

            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="Add Record">
            <br>
        </form>
        <p><a href="index.php">Homepage</a></p>
    </main>
    <?php include './includes/footer.php';?>

</body>
</html>