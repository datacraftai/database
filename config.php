
<?php
$servername = "courses";//db server name
$username = "z1836412";//db username
$password = "1989Aug22";//db pasword

try {
    $conn = new PDO("mysql:host=$servername;dbname=z1836412", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
//error message for connection failure    
echo "Connection failed: " . $e->getMessage();

    }
?>
