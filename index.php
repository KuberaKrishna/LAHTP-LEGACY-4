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
                // TESTING SQLi
                // $userName = $_POST['username']; //incorrect implementation, cause SQLi
                // $userPassword = $_POST['userpassword'];// incorrect implementation, cause SQLi
                $result = User::login($userName, $userPassword);
                if($result == TRUE){
                    header("Location: http://localhost/PhpSession/login.php");
                }
            }
        } else {

    ?>
    <form action="index.php" method="POST">
        <div class="c-companyLogo">
            <img class="companyLogo" src="icon/dp-icon.png" alt="company-logo">
            <p>Login to &#393;AMN Poster</p>
        </div>
        <div class="username-container">
            <label class="uname-label" for="username">Username</label>
            <input id="username"  name="username" type="text" required maxlength="60">
        </div>
        <div class="userpassword-container">
            <label for="userpassword">Password</label>
            <input id="userpassword" name="userpassword" type="password" required minlength="8" maxlength="128">
        </div>
        <input class="btn" type="submit" value="Log in">
    </form>
<footer>
    <ul>
        <li><a href="#terms">Terms</a></li>
        <li><a href="#privacy">Privacy</a></li>
        <li><a href="#contact">Contact &#393;AMNPoster Support</a></li>
        <li><a href="#docs">Docs</a></li>
        <li><a href="#jobs">Jobs</a></li>
    </ul>
</footer>
<?php } ?>
</body>
</html>