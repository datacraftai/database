<?php
include('config.php');//including the configuration file
?>
<!--html script starts-->

<html>
<!--html head starts-->

<head><h1>Assignment 10</h1>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <p id="demo"></p>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <p id="demo"></p>
<!--html head ends-->

</head>
<!--html body starts-->

<body>

<?php



/*selecting from mysql database and storing the results in variable query*/
$query ="SELECT  `horse`.`name`,`horse`.`sire`,`horse`.`dam` FROM `horse`";
/*executing the query using the database connection variaables*/
$result=$conn->query($query);
/*fetching all the records from the table*/
$allrecords=$result->fetchAll();
?>
<!--html script starts for styling the table-->

<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
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
	</style>
<!--style tag ends-->
<!--head tag ends-->

</head>
<!--body tag starts-->

<body>
	<h1>Question 1</h1>
<!--table creation using table tag-->
	<table class="data-table">
		<caption class="title"><h2>Show all of the horse names along with their sires and dams</h2></caption>
<!--table header tag starts-->
		<thead>
<!--table row tag starts-->
			<tr>
<!--table header name starts-->
				<th>Horse Name</th>
				<th>Sire</th>
				<th>Dam</th>
<!--table header name tag ends-->

				</tr>
<!--table row tag ends-->

		</thead>
<!--table header tag ends-->

		<tbody>
<!--table body tag starts-->


<?php
/*starting a foreach loop to display all records row-column in table*/
foreach($allrecords as $key => $row)
{
  echo '<tr>
					<td>'.$row['name'].'</td>
					<td>'.$row['sire'].'</td>
					<td>'.$row['dam'].'</td>
					
				</tr>';

}

?>
</body>
<!--body tag ends-->
<!--html tag ends-->
</html>
