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
    
<html id="particles-js">

<!-- the head section -->
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="./sass/main.css">
</head>

<!-- the body section -->
<!-- scripts -->
<script src="./particles.js"></script>
<script src="js/app.js"></script>

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
            <label>Name:</label>
            <input type="input" name="name" required>
            <br>
            <label>Subscribers:</label>
            <input type="input" name="subs">
            <br>

            <label>dob:</label>
            <input type="date" name="dob">
           
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