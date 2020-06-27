<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Leave Status </title>
	<meta charset="utf-8">
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
	
	.form{
		border: 5px #000000;
		border-style: double;
		border-radius: 12px;
		width: 620px;
		font-weight: bold5
		font-family:"Times New Roman";
	}
	
	.button {
		background-color:#555555; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 10px 100px;
		cursor: pointer;
		border-radius: 25px 25px 25px 25px;
		
	}
	input[type=text],input[type=number], input[type=date] {
						width: 50%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 25%;
						background-color: gray;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
					}

					input[type=submit]:hover {
						background-color: black;
					}
					textarea{
						width: 70%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
		.footer{
			background-color:#aaaa55;
		}

		.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}

	body{
			/*background-image: url("Administrator/admin2.png");
			opacity:0.8;*/
			background-color:#cecdce;
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
			text-decoration: none;
		}

	</style>
</head>
<body>
	<div class="header1 ">

			<div class="col-1">
			<a href="employee.php"><img src="Employee/employee.png" style="height:30%;width:30%"></a>
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
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
			
			<div class="col-1">
			</div>
		<div>
	
	<div class="col-12 ">
	<h1> Leave Approval Status </h1>
	<form  action="leavestatus.php" method="POST">
		<label for="Employee_Id">Employee Id</label>
	
    <input type="number" id="Employee_Id" name="Employee_Id" required> 
    
    <input type="submit" name="submit" value="View Details">

	
	</form> 
</div>
<div class="row col-12">
	<div class="col-2">
		
	</div>
	
	<?php
  if(isset($_POST["submit"])){
		$Employee_Id =  $_POST['Employee_Id'];		
		$query = "SELECT * from apply_leave WHERE Employee_Id = '$Employee_Id'";
		$sqldata=mysqli_query($connect, $query)or die('error getting');
		echo "<div class='col-8'>";
		echo "<form action='leavestatus.php' method='POST'>";

			while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
				echo "Employee Id";
				echo "<input type='text' name='Employee_Id' value=".$row['Employee_Id']."  readonly>";
	
				echo "Employee Name";
				echo "<input type='text' name='Employee_Name' value=".$row['Employee_Name']." readonly>";
				
				echo "Leave Type";
				echo "<input type='text' name='Leave_Type' value=".$row['Leave_Type']." readonly>";
				
				echo "Reason";
				echo "<input type='text' name='Reason' value=".$row['Reason']." readonly>";
				
				echo "Date From";
				echo "<input type='Date' name='Date_From' value=".$row['Date_From']." readonly>";
				
				echo "Date To";
				echo "<input type='Date' name='address' value=".$row['Date_To']." readonly>";
				
				echo "Status";
				echo "<input type='text' name='Status' value=".$row['Status']." readonly>";
				
				echo "comments";
				echo "<textarea name='comments'>".$row['comments']."</textarea>";
	

			}
		echo "</form>";
		echo "</div>";
  }
  
  
?>
	<div class="col-2">		
	</div>

	</div>

	
</body>
</html>
	