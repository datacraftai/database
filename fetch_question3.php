<?php
include('config1.php');//include configuration file
?>
<?php
// get the q parameter from URL
$q =$_REQUEST["q"];//escaping the special characters
//selecting the query 
$query = " select race_id,name,distance from race where race_id='$q'";
$result = mysqli_query($link, $query);
$count = mysqli_num_rows($result);
//printing results using while loop
while ($row = $result->fetch_assoc()) {
    $_SESSION = $row['race_id'];
    $race_id = $row['race_id'];
    $name = $row['name'];
    $distance = $row['distance'];
}

?>
<html>
<!--html tag starts-->
<!--html body tag starts-->

<body>
<!--html form tag starts-->

<form method="post" action="authen_question3.php">
<!--html fieldset tag starts-->

<fieldset class="fieldset-auto-width"> 
<!--html table tag starts-->

    <table>
        <tr>
            <td>Race ID:</td>
            <td>
                <input type="text" name="race_id" id="race_id" value="<?php echo $race_id ?>" />
            </td>
        <tr>
            <td>Race Name:</td>
            <td>
                <input type="text" name="name" id="name" value="<?php echo $name ?>" />
            </td>
        </tr>
        <tr>
            <td>Distance:</td>
            <td>
                <input type="text" name="distance" id="distance" value="<?php echo $distance ?>"/>
            </td>
        </tr>
<!--html table tag end-->
    </table>
    <br><button onclick="myFunction()">Cancel</button>
    <input type="submit" name="submit" value="Delete Race" >

<!--html form tag end-->

</form>
<!--html script tag starts-->

<script>
    function myFunction() {
        confirm("Are you sure you want to cancel?");
 window.location.href = "index.php";

    }
<!--html script tag ends-->

</script>
<!--html body tag ends-->

</body>
<!--html tag ends-->

</html>