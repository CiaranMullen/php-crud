<?php
require('database.php');
$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$record = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="sass/main.css">



<!-- the head section -->
<html id="particles-js">

<!-- scripts -->
<script src="./particles.js"></script>
<script src="js/app.js"></script>

<div class="panel" style="display: block;">
<head>
<?php include './includes/title.php';?>
</head>
<!-- the body section -->
<?php include './includes/header.php';?>

    <main>
        <h1>about YouTube</h1>
     <p1>YouTube is an American video-sharing platform headquartered in San Bruno, California. 
         Three former PayPal employees—Chad Hurley, Steve Chen, and Jawed Karim—created the service in February 2005.
          Google bought the site in November 2006 for US$1.65 billion; YouTube now operates as one of Google's subsidiaries.</p1>
    </main>
    <?php include './includes/footer.php';?>

            
</div>
</html>