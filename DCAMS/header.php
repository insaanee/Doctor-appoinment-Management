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
						<h1>Diagunatic doctor appointment management system</h1>
						</div>
						</div>
						<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="doctor/doctorsview.php">Doctors</a>
      <a href="paitent/paitentview.php">Patient</a>
	  <a href="appointment/appointmentview.php">Appointment</a>
	  <a href="specilization/doctorspecilizationview.php">Doctor Specilization</a>
	  <a href="abvaility/doctorsabvailabilityview.php">Doctors Abvailability</a>

    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
	  <a href="search/search.php">Search Apointment</a>
      <a href="search/searchdoctor.php">Search Doctors Abvailability</a>
     
    </div>
  </li>
</ul>