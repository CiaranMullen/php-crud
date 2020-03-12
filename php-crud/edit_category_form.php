<?php
require('database.php');
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM category
          WHERE categoryID = :category_id';
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$category = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!DOCTYPE html>

<html id="particles-js">
<script src="./particles.js"></script>
<script src="js/app.js"></script>

<div class="panel" style="display: block;">

<!-- the head section -->
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="sass/main.css">
</head>
<!-- the body section -->
<body>
<?php include './includes/header.php';?>

    <main>
        <h1>Edit category</h1>
        <form action="edit_category.php" method="post" enctype="multipart/form-data"
              id="add_category_form">
            <input type="hidden" name="original_image" value="<?php echo $category['image']; ?>" />
            <input type="hidden" name="category_id"
                   value="<?php echo $category['categoryID']; ?>">
            <label>Category ID:</label>
            <input type="category_id" name="category_id"
                   value="<?php echo $category['categoryID']; ?>">
            <br>
            <label>Subscribers:</label>
            <input type="input" name="subs"
                   value="<?php echo $category['subs']; ?>">
            <br>
            <label>Name:</label>
            <input type="input" name="name"
                   value="<?php echo $category['name']; ?>">
            <br>
            <label>dob:</label>
            <input type="date" name="dob"
                   value="<?php echo $category['dob']; ?>">
            <br>
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>
            <?php if ($category['image'] != "") { ?>
            <p><img src="image_uploads/<?php echo $category['image']; ?>" height="150" /></p>
            <?php } ?>
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            <br>
        </form>
    </main>
    <?php include './includes/footer.php';?>

</body>
</div>
</html>