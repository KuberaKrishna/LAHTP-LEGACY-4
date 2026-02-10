<?php require_once '_libs/load.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="icon/dp-icon.png">
    <title>&#393;AMN Poster | Login</title>
</head>
<body>
    <?php
            if(isset($_GET['logout'])){
                session_destroy();
            }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            if(isset($_POST['username']) && isset($_POST['userpassword'])){
                $conn = Database::getConnection();
                $userName = $conn->real_escape_string(htmlentities(trim($_POST['username'])));
                $userPassword = $conn->real_escape_string(htmlentities(trim($_POST['userpassword'])));
                // TESTING SQLi, incorrect implementation, cause SQLi and XSS
                // $userName = $_POST['username']; //incorrect implementation, cause SQLi
                // $userPassword = $_POST['userpassword'];// incorrect implementation, cause SQLi
                $result = User::login($userName, $userPassword);
                if(!empty($result)){
                    header("Location: http://localhost/PhpSession/login.php");
                } else { 
                   loadTemplate('not-form');
                   loadTemplate('login-footer');
                }
            }
        } else {
            loadTemplate('form');
            loadTemplate('login-footer');
 } ?>
</body>
</html>