<!DOCTYPE html>
<!--html tag starts-->
<html xmlns="http://www.w3.org/1999/xhtml">
<!--html head tag starts-->
<head><h1><img src="" alt="" width="50" height="50">Assignment 11</h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <p id="demo"></p>
<!--html head tag ends-->
</head>
<!--html body tag starts-->
<body>
<h2></h2>
<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
</style>
<fieldset class="fieldset-auto-width">

<div align="center" style="background:#ff6666">

    <h3>Add New Horse</h3>
<!--html form tag starts-->
<form action="authen_question1.php" method="POST">
<!--html fieldset tag starts-->
    <fieldset>
<!--html legend tag starts-->
        <legend><b>Horse Details</legend>
<!--html table tag starts-->
        <table>
            <tr>
                <td>Horse ID*: </td>
                <td><input type="text" name="horseid" readonly disabled="disabled"></td>
            </tr>
            <tr>
                <td>Horse Name*: </td>
                <td><input type="text" name="name" maxlength="25" autofocus required></td>
            </tr>
            <tr>
                <td>Sire*: </td>
                <td><input type="text" name="sire" maxlength="25" required></td>
            </tr>
            <tr>
                <td>Dam*: </td>
                <td><input type="text" name="dam" maxlength="25" required></td>
            </tr>
<!--html table tag ends-->
        </table>
<!--html fieldset tag ends-->
    </fieldset>
<!--html form tag ends-->
</form>
 <br>
<button onclick="myFunction()">Cancel</button>
<button onclick="myhorse()">Add Horse</button>
<!--script tag starts-->
<script>
    function myFunction() {
        confirm("Are you sure you want to cancel?");
         window.location.href = "index.php";
    }
function myhorse(){
  confirm("Horse added successfully");
 window.location.href = "index.php";
}
<!--script tag ends-->
   </script>
<!--html body tag ends-->
</body>
<!--html tag ends-->
</html>