<?php
include('config1.php');//including configuration file

?>
<!--html tag starts-->
<html>
<!--head tag starts-->

<head><h1>Assignment 10</h1>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <p id="demo"></p>
<!--script tag starts-->

    <script>
<!--function showUser which passes the chosen dopdown option to fetch_question3.php to pass the value in the where caluse-->
        function showUser(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_question4.php?q=" + str, true);
                xmlhttp.send();
            }
        }
<!--script tag ends-->


    </script>
<!--head tag ends-->

</head>
<!--body tag starts-->

<body>
<!--html form starts-->

<form>
<!--html fieldset starts-->

<fieldset>
<!--labels the name of the dropdownlist-->
    <label>Select Horse Name</label>
<!--drop down select option starts,here we select option for the dropdown from the mysql database dynamically-->

    <select name="distance" onchange="showUser(this.value)">
        <option>Select Horse Name</option>
        <?php
        $query = 'select name from horse;';
       $result = mysqli_query($link, $query);
        $count = mysqli_num_rows($result);
/*displaying all distinct records for the option*/

        while ($row = $result->fetch_assoc()) {
            echo "<option >" . $row['name'] . "</option>";
        }
        ?>
    </select>
<!--dropdown select tag closed-->

<!--fieldset tag closed-->

</fieldset>
<!--html form closed-->

</form>

<div id="txtHint"><b></b></div>
<!--html tag ends-->

</html>