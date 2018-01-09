<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'courses');//db server name
define('DB_USERNAME', 'z1836412');//db username
define('DB_PASSWORD', '1989Aug22');//db password
define('DB_NAME', 'z1836412');//db name


/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>