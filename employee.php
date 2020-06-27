<?php
session_start();
//You have to remove this session User_Name set
if (isset($_SESSION['User_Name'])) {
$User_Name=$_SESSION['User_Name'];
}
else{
  header("Location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Employee </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>

		* {
			box-sizing: border-box;
		}
		.row::after {
			content: "";
			clear: both;
			display: table;
			}
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.header {
			color: #ffffff;
			padding: 15px;
			font-size:25px;
		}
		
		a:link {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:visited {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:hover {
			color:black;
			background-color: transparent;
			text-decoration: none;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: underline;
		}
		
		
		.Activity ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.Activity li {
			padding: 8px;
			margin-bottom: 7px;
			font-size:25px;
			background-color:#adad85;
			color:#f2f2f2;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
		
		.para{
			font-size:5px;
			color: #000000;
			font-weight:bold;
			font-size:15px;
			text-align:center;
			background-color:#c2c2a3;
			border-radius: 0px 0px 0px 0px;
		}
		.footer{
			background-color:#7a7a52;
		}
		
		.footer ul {
					list-style-type: none;
					margin: 0;
					padding: 0;
				}
				
				.footer li {
					padding: 8px;
					margin-bottom: 7px;
					color: black;
					align:right;
					}
		.div2{
			background-color:#999966;
			font-style: italic;
			font-size: 14px;
			color:black;
			font-weight:bold;
			opacity:0.7;
		}

		.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
		
	</style>
</head>

<body>

	<div class="header1">

			<div class="col-1">
			</div>

			<div class="col-2" align="center" >
			<a href="mydetail.php">MY DETAILS </a>
			</div>
			<div class="col-2" align="center">
			<a href="leaveapplication.php">LEAVE APPLICATION</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="task.php">TASK </a>
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout"><b>Log Out</b></button></a>
			</div>
			
			<div class="col-1">
			</div>
	</div>
	
	<div class="Image ">
		<img src="Employee/rawpixel-659474-unsplash.jpg" style="width:100%;height:500px;border-radius: 25px 25px 0px 0px;"> <br>
	</div>
	
	<div class="para col-12">
	<h1> GET IN TOUCH</h1>
	</div>
	
	<div class="row">
		<div class="Activity col-3">
		<ul>
			<li> <a href="submission.php" class="a2"> Submission </a> </li>
			<li> <a href="message.php" class="a2"> Message </a> </li>
			<li> <img src="Employee/images.jpg" style="width:100%"> </li>
		</ul>
		</div>	
		
		<div class ="img col-4">
		<img src="Employee/People-at-Work.jpg" style="width:100%;height:340px;">
		</div>
		
		<div class ="galender col-5">
		<img src="Employee/shutterstock_267308147.png" style="width:100%;height:340px;">
		</div>
	</div>
	
	<div class="div2 col-12 ">
		<h1>LIFE IS NOT A PROBLEM TO BE SOLVED BUT A REALITY TO BE EXPERIENCED </h1>
	</div>
	
	<div class="footer col-12">
		<div class="col-4 footer" align="center">
			<table>
				<tr style="height:50px">
				<td>
				<img src="Header & Footer/62516.png" style="height:5%;width:5%">
				No 12, Ridgeway place Colombo 04
				</td>
				</tr>
					
				<tr style="height:70px">
				<td>
				<img src="Header & Footer/img_286083.png" style="height:5%;width:5%">
				011-2547658
				</td>
				</tr>
					
				<tr>
				<td>
				<img src="Header & Footer/email.png" style="height:5%;width:5%">
				www.cameraxis@gmail.com
				</td>
				</tr>
			</table>
		</div>
			
		<div class="col-4 footer" align="center-left">
			<a href="https://www.facebook.com/cameraxis/"><img src="Header & Footer/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Header & Footer/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
			<a href="https://plus.google.com/+Cameraxis"><img src="Header & Footer/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://twitter.com/cameraxis"><img src="Header & Footer/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
		</div>
			
		<div class="col-4 footer" align="center" style="height:200px">
			<a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Header & Footer/map.png" style="height:100%;width:80%"></a>
		</div>

	</div>
</body>
</html>