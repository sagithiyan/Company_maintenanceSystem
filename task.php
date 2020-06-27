<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Task </title>
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
			text-decoration: none;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
	
	
	.background {
		background-image: url("bluemetal1.jpg");
	}
	
	.header{
		background-color: #999966;
		border-radius: 0px 0px 0px 0px;
	}
	input[type=text],input[type=number], input[type=date] {
						width: 80%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 60%;
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

					body{
			/*background-image: url("Administrator/grey.jpg");
			opacity:0.8;*/
			background-color:#cecdce;
		}

		.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
	            
	</style>
	
</head>
<body>

	<div class="header">

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

	</div>
	
   
	<div class="form col-12">
		<div class="col-2">
			<form  action="task.php" method="POST">
		<label for="Emp_Id">Employee Id</label>
	
    <input type="number" id="Emp_Id" name="Emp_Id" required> 
    
    <input type="submit" name="submit" value="View Details">

	
	</form> 
		</div>
		
		<div class="form col-8">
			<?php
		  	if(isset($_POST["submit"])){
				$Emp_Id =  $_POST['Emp_Id'];		
				$query = "SELECT * from task WHERE Emp_Id = '$Emp_Id'";
				$sqldata=mysqli_query($connect, $query);
							
				echo "<form action='task.php' method='POST'>";

	if ($connect->query($query)) {			
				

			while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
				echo "Task Id";
				echo "<input type='text' name='Task_Id' value=".$row['Task_Id']."  readonly>";
	
				echo "Task Name";
				echo "<input type='text' name='Task_Name' value=".$row['Task_Name']." readonly>";
				
				echo "Task Date";
				echo "<input type='date' name='Task_Date' value=".$row['Task_Date']." readonly>";
				
				echo "Task Description";
				echo "<input type='text' name='Task_Description' value=".$row['Task_Description']." readonly>";
				
				echo "Task Deadline";
				echo "<input type='date' name='Task_Deadline' value=".$row['Task_Deadline']." readonly>";
				
				
			}

			} else {

					echo "You don't have task";
					header("refresh:5; url=task.php");

				}

			
		echo "</form>";
	
		  
		}
  
  
  
?>
		</div>
		<div class="col-2"></div>
		
		</div>

</body>
</html>