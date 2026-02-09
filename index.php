<?php require_once '_libs/load.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="icon/dp-icon.png">
    <title>&#393;AMN Poster</title>
</head>
<body>
    <form action="index.html" method="POST">
        <div class="c-companyLogo">
            <img class="companyLogo" src="icon/dp-icon.png" alt="company-logo">
            <p>Login to &#393;AMN Poster</p>
        </div>
        <div class="username-container">
            <label class="uname-label" for="username">Username</label>
            <input id="username"  name="username" type="text" required>
        </div>
        <div class="userpassword-container">
            <label for="userpassword">Password</label>
            <input id="userpassword" name="userpassword" type="password" required>
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
</body>
</html>