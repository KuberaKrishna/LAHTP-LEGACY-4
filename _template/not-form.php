 <form action="index.php" method="POST">
        <div class="c-companyLogo">
            <img class="companyLogo" src="icon/dp-icon.png" alt="company-logo">
            <p>Login to DAMN Poster</p>
        </div>
        <div class="username-container">
            <label class="uname-label" for="username">Username</label>
            <input id="username"  name="username" type="text" required maxlength="60">
        </div>
        <div class="userpassword-container">
            <label for="userpassword">Password</label>
            <input id="userpassword" name="userpassword" type="password" required minlength="8" maxlength="128">
        </div>
        <p class="red">Incorrect username or password, try again</p>
        <input class="btn" type="submit" value="Log in">
    </form>