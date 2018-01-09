<?php
include_once "config1.php";//include configuration file
if (isset($_POST['name'])) 
{ 
// Fetching variables of the form which travels in URL
//using mysqli_real_escape_string to escape special characters
    $name=mysqli_real_escape_string($link,$_POST['name']);
    $distance = mysqli_real_escape_string($link,$_POST['sire']);
    //Insert Query of SQL
    $stmt = "insert into `race` (`name`, `distance`) values ('$name', '$distance')";
    $result = mysqli_query($link, $stmt);
    if (!$result) 
    {
        echo "<script type='text/javascript'>alert('Invalid Query')</script>";
    } else {
        echo '<script type="text/javascript">'; 
              echo 'window.location="index.php";';//redirecting to main page
        echo '</script>';     }
}
?>