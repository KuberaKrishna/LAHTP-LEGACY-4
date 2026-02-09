<?php require '_libs/load.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="icon/dp-icon.png">
    <title>Welcome to &#393;AMN Poster</title>
</head>
<body>
    <div class="container">
    <?php
    if(isset($_SESSION['SessionValue']) === TRUE){
        echo "<h1>Welcome back $_SESSION[SessionValue], click <a href='http://localhost/PhpSession/index.php?logout'>here</a> to logout</h1>";
    } else {
        echo "<h1>Session expired, click <a href='http://localhost/PhpSession/index.php'>here</a> to try again</h1>";
    }
    ?>
    </div>
</body>
</html>