<!DOCTYPE html>
<html>
<head>
	<title> Submission</title>
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
			text-decoration: underline;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: underline;
		}
		
		.form{
			border: 5px #000000;
			border-style: double;
			border-radius: 12px;
			width: 620px;
			font-weight: bold;
			font-family:"Times New Roman";
		}
	
		.div2{
			background-color:#1f1f14;
			font-style: italic;
			font-size: 16px;
			font-weight:bold;
			opacity:0.8;
		}

		.btn{
		background-color: #555555;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 1px;
		cursor: pointer;
		border-radius: 5px 5px 5px 5px;
		}
		
	</style>
	
</head>

	<body>
		<div class="header1 ">

			<div class="col-1">
			<a href="Employee.php"><img src="Employee/employee.png" style="height:30%;width:30%"></a>
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
			<a href="CompanyMaintenanceSystem.php">LOGOUT</a>
			</div>
			
			<div class="col-1">
			</div>
		<div>
		
	<div class="div1 col-12 ">
	<div class="img col-6">
	<img src="Employee/staff.jpg" style="width:100%;height:320px;border-radius: 25px 25px 25px 25px;" >
	</div>
		
	<div class="form col-6">
	<h1> Submission</h1>

	<form action="upload.php" method="post"  enctype="multipart/form-data">
	
  Task ID:<br><br>
   <input type="text" name="t_id"  placeholder="Enter the Task ID"size="80" required>
  <br>
  <br>
  Submission Subject:<br><br>
  <input type="text" name="subject"  placeholder="Enter the Submission Subject"size="80" required>
  <br>
  <br>
  Upload File:<br><br>
  <input type="file" name="file" placeholder="Upload the Submission File" required >
  <br>
  <br>
      <button type="submit" name="submit" class="btn">Submit</button>
  	  <button type="reset" name="reset" class="btn">reset</button>
</form> 




	</div>
	</div>
</body>
</html>