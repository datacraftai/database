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
<!--html fieldset tag starts-->

<fieldset class="fieldset-auto-width">

<div align="center" style="background:#ff6666">

    <h3>Add new Race</h3>
<!--html form tag starts-->

<form action="authen_question2.php" method="POST">
<!--html fieldset tag starts-->
    <fieldset>
<!--html legend tag starts-->
        <legend><b>Race Details</legend>
<!--html table tag starts-->
        <table>
            <tr>
                <td>Race ID*: </td>
                <td><input type="text" name="raceid" readonly disabled="disabled"></td>
            </tr>
            <tr>
                <td>Race Name*: </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Distance*: </td>
                <td><input type="text" name="sire" required></td>
            </tr>
<!--html table tag ends-->
        </table>
<!--html fieldset tag ends-->
    </fieldset>
   <!--html form tag ends-->
</form>
 <br><button onclick="myFunction()">Cancel</button>
<button onclick="myhorse()">Add Race</button>
<script>
    function myFunction() {
        confirm("Are you sure you want to cancel?");
         window.location.href = "index.php";
    }
function myhorse(){
  confirm("Race added successfully");
 window.location.href = "index.php";
}

<!--html script tag ends-->
   </script>
<!--html form tag ends-->
</form>
<!--html body tag ends-->
</body>
<!--html tag ends-->
</html>