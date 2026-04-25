# <center>PRESENTING MY LAHTP LEGACY - 4 Importance of PHP Sessions</center>
## EDUCATIONAL PURPOSES ONLY
## What does this website do?
* This website is a login page for DAMN Poster.
## Recommended Way to Clone
* `git clone https://github.com/KuberaKrishna/LAHTP-LEGACY-4.git PhpSession` — don’t change the default name ('PhpSession'); otherwise, it may not work properly.
## Read this before executing on Linux:
* Move the configuration folder to `/var/www/` (due to file permissions).
* Works perfectly on macOS and Windows.
## Setting Up Database Environment for macOS
* To create a user in Adminer, use `sql/adminer-user.sql`
* To create a database in Adminer, use `sql/adminer-sql.sql`
## Setting Up Database Environment for Windows
* Download Adminer for Windows from the official website `https://www.adminer.org/`.
* Place the downloaded .php file in the htdocs folder and run it in your browser.
* Change the MySQL root password in XAMPP using the Shell:
 - `mysql -u root` (the default password might be either empty or ‘root’). Change the password if this doesn’t work.
 - `ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';`. -- for example :)
* To create a user in Adminer, use `sql/adminer-user.sql`
* To create a database in Adminer, use `sql/adminer-sql-windows.sql`
## SQLi and XSS?
* This website is considered safe from SQL injection (SQLi) and cross-site scripting (XSS). It uses prepared statements to prevent SQL injection and sanitizes input.
* This website was tested using a legal tool called SQLMap.
* The password hashing method used is `PASSWORD_BCRYPT` with a cost factor of 9.
### List of Users You Can Log In As
- Alan Palker
- Adam
- Ben Tennyson
- Bhomas Tangalter
- Bijoy
- Bob
- Cactus Jack
- Kevin
- Lendrick Kumar
- Ninja
- Paul
- Sony Moore
- Willem Dafoe
* The password for all users is `123456789`.