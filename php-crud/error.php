
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="sass/main.css">
<html>


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

<!-- the body section -->
<body>
    <header><h1>PHP CRUD</h1></header>
    <main>
        <h2 class="top">Error</h2>
        <p><?php echo $error; ?></p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> PHP CRUD, Inc.</p>
    </footer>
</body>
</div>
</html>