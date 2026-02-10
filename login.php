<?php require '_libs/load.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="icon/dp-icon.png">
    <title>&#393;AMN Poster - Website</title>
</head>
<body>
    <?php
    if(isset($_SESSION['SessionKey']) === TRUE){
        echo "<div class=puff-in-center>";
        loadTemplate('header');
        loadTemplate('main');
        echo "</div>";
    } else {
       header("Location: http://localhost/PhpSession/index.php");
    }
    loadTemplate('footer');
    ?>
</body>
</html>