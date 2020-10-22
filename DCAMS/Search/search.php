






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


<div class="ltable">
														<form action="" method="post" style="text-align:center;"></br>
									<input type="Text/Number" name="name"  required><br>
								
									<input type="submit" name="submit" value="SEARCH by speciality"/></form>
									</div>
									
									
<?php
 if(isset($_POST['submit'])){
    $con= new mysqli("localhost","root","","appointmentmanaging");
    $name = $_POST['name'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM appointment
    WHERE doctorSpecialization LIKE '%{$name}%'");
	if ($result->num_rows > 0) {
    echo "<table align=center><tr><th> ID</th><th>doctorSpecialization</th><th>consultancyFees</th><th>appointmentDate</th><th>appointmentTime</th><th>appointmentDay</th></tr>";
    // output data of each row

while ($row = mysqli_fetch_array($result))
{
    echo "<tr><td>" .$row["id"]."</td><td>".$row["doctorSpecialization"]."</td><td>".$row["consultancyFees"]."</td><td>".$row["appointmentDate"]."</td><td>".$row["appointmentTime"]."</td><td>".$row["appointmentDay"]."</td></tr>";
}
 echo "</table>";
}
else {
    echo "No results Found";
}
    mysqli_close($con);
	
 }
    ?>


</center>
<a href="records.php"></a>
	
	</div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	<div class="footer">
					Copyright © 2017 Diagnostice Center Appointment Management System. All rights reserved.</br>
<h3>Developed by- Md.Haider Ali Hridoy </br> Mehruj Akter</h3>
					</div>
			
			
			
			</div>


</body>
</html>