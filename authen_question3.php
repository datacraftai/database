<?php
include_once "config1.php";//include configuration file

if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL
$race_id=$_POST['race_id'];
echo $race_id;
     
    //Delete Query of SQL
    $stmt1="Delete from runsin where rid=$race_id;";
    $stmt = "Delete from race where race_id=$race_id; ";
echo $stmt1;
echo $stmt;
    $result1 = mysqli_query($link, $stmt1);
    $result = mysqli_query($link, $stmt);

//checking the correction of query and then echoing the success and failure of php script
    if ((!$result)&&(!result1))
 {
        echo "<script type='text/javascript'>alert('Query is wrong')</script>";
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Deletion Successful");';
       echo 'window.location="index.php";';//redirecting to main page
        echo '</script>';    
}
}
?>