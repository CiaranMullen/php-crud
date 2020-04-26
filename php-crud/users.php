<?php



    require_once('database.php');
    // Get all categories
    $query = 'SELECT * FROM users
              ORDER BY id';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();
?>
<!DOCTYPE html>
<html id="particles-js">
<script src="./particles.js"></script>
<script src="js/app.js"></script>


<div class="panel" style="display: block;">

<!-- the head section -->
<head>
<?php include './includes/title.php';?>
    <link rel="stylesheet" type="text/css" href="./sass/main.css">
</head>

<?php include './includes/header.php';?>
 
    <main>
    <h1>Users</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Password</th>
        </tr>
        <!-- Retrieve data as an associative array and output as a foreach loop  -->
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['password']; ?></td>
                
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    
    <p><a href="index.php">Homepage</a></p>
    </main>
    <?php include './includes/footer.php';?>

        </div>
</html>