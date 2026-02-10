<header>
    <nav>
        <h1 class="company-name"><a href="login.php">DAMN Poster</a></h1>
        <div class="mid-section">
            <form>
                <input name="PosterName" type="text" placeholder="Enter poster name" readonly>
                <button disabled>Search</button>
            </form>
        </div>
        <ul class="access">
            <li><a href="#cart"><img class="cart" src="Icon/cart-plus.svg"></a></li>
            <h4 class="username"><?=$_SESSION['SessionKey'];?></h4>
            <li><a class="logout" href="http://localhost/PhpSession/index.php?logout">Logout</a></li>
        </ul>
    </nav>
</header>
