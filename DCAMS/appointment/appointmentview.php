






<html>
<head>
<link rel="stylesheet" type="text/css" href="prodstyle.css">
<link rel="stylesheet" type="text/css" href="mainstyle.css">
<style>

.header{
	
	height:85px;
	width:100%;
	background-color:#444;
	color:#fff;
	border-bottom:2px solid red;
	margin-top:0px;
	text-align:center;
	
}
.area{
	height:350px;
	width:100%;
	background-color:#dbdbdb;
	text-align:center;
}
.footer{
	
	height:85px;
	width:100%;
	background-color:#444;
	color:#fff;
	border-bottom:2px solid red;
	margin-top:0px;
	text-align:center;
	
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

h1{
	text-align: center;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #dbdbdb;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #858585}

.dropdown:hover .dropdown-content {
    display: block;
}
article {
    margin-left: 0px;
    border-left: 1px solid gray;
    padding: 0em;
    overflow: hidden;
}
</style>
</head>

<body>
			<div class="wrapper">
			
					<div class="header">
					<div class="mainnav">
						<h1>Diagnostice Center Appointment Management System</h1>
						
						</div>
						</div>
<h1>View Records</h1>

<div class="area">

<center>

<?php
// connect to the database
include('connect-db.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM appointment ORDER BY id"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr><th>ID</th><th>Doctor Specialization</th><th>Doctor Id</th><th>Paitent Id</th><th>Consultancy Fees</th><th>Appointment Date</th><th>Appointment Time</th><th>Appointment Day</th><th>Posting Date</th><th>Updation Date</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->doctorSpecialization . "</td>";
echo "<td>" . $row->doctorId . "</td>";
echo "<td>" . $row->paitentId . "</td>";
echo "<td>" . $row->consultancyFees . "</td>";
echo "<td>" . $row->appointmentDate . "</td>";
echo "<td>" . $row->appointmentTime . "</td>";
echo "<td>" . $row->appointmentDay . "</td>";
echo "<td>" . $row->postingDate . "</td>";
echo "<td>" . $row->updationDate . "</td>";
echo "<td><a href='dadmin.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='dadmin.php?id=" . $row->id . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>

</center>
<a href="records.php">Add New Record</a>
	
	</div>
	
	</div>
	
	
	
	
	
	<div class="footer">
					Copyright © 2017 Diagnostice Center Appointment Management System. All rights reserved.</br>
<h3>Developed by- Md.Haider Ali Hridoy </br> Mehruj Akter</h3>
					</div>
			
			
			
			</div>


</body>
</html>