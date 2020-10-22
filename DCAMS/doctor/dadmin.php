






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


<div class="area">

<center>





<form action="" method="post">
<h1> Admin Login </h1>
<hr/>
<table>
 <tr><td>username: </td><td><input type="text" name="name"required></td></tr>
<tr><td>password:</td><td> <input type="password" name="password"required></td></tr>
<tr><td> </td> <td><input type="submit" name ="submit" value="submit"></td></tr>
</table>


</form>


<?php 



	

	
			  if(isset($_POST['submit'])){
						  
						
					$password=$_POST['password'];	
						
                    if( $password==1234)
					{
						
						echo "you are welcome";
						header("Location: doctorsview1.php");
						
					}
					
					else
					{
						echo"<span style='color:red;'><h2> Username or Password is Incorrect </h2></span>";
					}
					
					
						
					
	

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