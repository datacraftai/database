<?php 
/*This statement is including the database conguration file */
include('config.php');
?>
<!DOCTYPE html>
<!--html script starts-->
<html xmlns="http://www.w3.org/1999/xhtml">
<!--html head starts shows the name of the page-->
<head><h1>Assignment 10</h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--html title -->
    <title> Assignment 10</title>
	<!--css file for styling the html and php pages-->
    <link rel="stylesheet" type="text/css" href="style2.css">
    <p id="demo"></p>
    </head>
	<!--html head ends-->
	<!--html body starts-->
<body>
<!--style type is css for this as we are including css file-->
<style type="text/css">
    .fieldset-auto-width {
        display: inline-block;
    }
</style>
<!--style block ends-->
<!--fieldset starts-->
<fieldset class="fieldset-auto-width">
    <h3>Name: Ankita Upadhyay</h3>
<h3>zID: z1836412</h3>
<h3>Assignment: 10</h3>
<h3>Due Date:Nov,20th 2017</h3>



<!--creating tabbed field for each question-->
    <div class="tab" style="background:#ffe5e5">
<!--creating button corresponding to each question -->
        <button class="tablinks" onclick="openQuestion1(event, 'Question1')"><h2>Question1</h2></button>
        <button class="tablinks" onclick="openQuestion2(event, 'Question2')"><h2>Question2</h2></button>
        <button class="tablinks" onclick="openQuestion3(event, 'Question3')"><h2>Question3</h2></button>
        <button class="tablinks" onclick="openQuestion4(event, 'Question4')"><h2>Question4</h2></button>
    </div>
<!--naming each button  -->
    <div id="Question1" class="tabcontent">
        <h3>Question1</h3>
        <p>Question1</p>
    </div>

    <div id="Question2" class="tabcontent">
        <h3>Question2</h3>
        <p>Question2</p>
    </div>
    <div id="Question3" class="tabcontent">
        <h3>Question3</h3>
        <p>Question3</p>
    </div>
    <div id="Question4" class="tabcontent">
        <h3>Question4</h3>
        <p>Question4</p>
    </div>
	<!--writing a script for onclick event of each button. each button onclick will navigate to a new page to show results -->
        <script>
		
        function openQuestion1(event, q1) {
            window.location.href ="question1.php";
        }
        function openQuestion2(event, q2) {
            window.location.href ="question2.php";
        }
        function openQuestion3(event, q3) {
            window.location.href ="question3.php";
        }
        function openQuestion4(event, q4) {
            window.location.href ="question4.php";
        }

    </script>

<!--script ends -->
</body>
<!--html body ends-->
</html>