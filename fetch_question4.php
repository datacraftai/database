<?php
include('config1.php');//including configuration file

?>
<?php

// get the q parameter from URL
$q =mysqli_real_escape_string($link, $_REQUEST["q"]);//escaping the special characters


$query ="select h.name horsename , r.name racename,
rs.finish position,rs.tm time 
from horse h,race r,runsin rs 
where rs.hid=h.horse_id and rs.rid=r.race_id and 
h.name='$q'";//storing sql query in the variable
/*executing the sql query and storing all records in variable*/

 $result = mysqli_query($link, $query);
       ?>
<!--html tag starts-->
<html>
<!--head tag starts-->

<head>
	<title>Displaying MySQL Data in HTML Table</title>
<!--style tag to style the table-->

	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family:"segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	<!--style tag ends-->

</style>
<!--head tag ends-->

</head>
<!--body tag starts-->

<body>
	<h1>Question 4</h1>
<!--table tag starts which have table header names and table row names indicated by th and tr respectively-->
	<table class="data-table">
		<caption class="title"><h2>Choose a horse name from a drop down and show all the races that horse has been in and what
position they finished in and what the time was</h2></caption>
		<thead>
			<tr>
			<th>Horse Name</th>
				<th>Race Name</th>
				
				<th>Position</th>
				<th>Time</th>
				
				</tr>
		</thead>
		<tbody>

<?php
/*while loop to display each record in the table */
while ($row = $result->fetch_assoc()) 
 {
   $hname = $row['horsename'];
    $rname = $row['racename'];
   $position = $row['position'];
    $time = $row['time'];
	
   

   
      echo '<tr>
	  <td>'.$row['horsename'].'</td>
					<td>'.$row['racename'].'</td>
					<td>'.$row['position'].'</td>
					<td>'.$row['time'].'</td>
					
					
				</tr>';

        

}
//php code ends
?>