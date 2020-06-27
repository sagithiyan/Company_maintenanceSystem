<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title> Staff Details </title>
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
				text-decoration: none;
			}
			
				
			form{
					width:100%;
					
					border-radius: 25px 25px 25px 25px;
					border: 5px solid #ccc;
					 padding-left: 40px; 

				}

				table {
    				width: 100%;
				}
					select, input[type=text],[type=date],textarea  {
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit],[type=reset] { 
						background-color: gray;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
					}

					input[type=submit]:hover {
						background-color: #45a049;
					}

					input[type=text],[type=number],[type=date] {
						width: 70%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
	

			
			
		</style>
	</head>

	<body>

		
<div class="Id col-12">
			<form action="givetask.php" method="post"  >
				<h2 align="center">Task details</h2>
				<table>
					<tr>
						<td> Client Task Id </td>
						<td><input type="text" name="ClientTaskId" required></td>

						<td><input type="submit" name="submit" value="View Task Detail"></td>

						
					
					</tr>

					
			</form>
</div>

<div class="row col-12">
		<div class="col-3"></div>
	<?php
	
         
  if(isset($_POST["submit"])){
		$ClientTaskId =  $_POST['ClientTaskId'];		
		$query = "SELECT * from clienttask WHERE ClientTaskId = '$ClientTaskId'";
		$sqldata=mysqli_query($connect, $query)or die('error getting');
		echo "<div class='form col-6'>";
		echo "<form action='givetask.php' method='POST'>";
		echo "<table>";
		

			while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){

				echo "<tr>";
				echo "<td>Task Id</td>";
				echo "<td><input type='text' name='ClientTaskId' value=".$row['ClientTaskId']." readonly></td>";
				echo "</tr>";
				
			
				echo "<tr>";
				echo "<td>Task Name</td>";
				echo "<td><input type='text' name='TaskName' value=".$row['TaskName']." readonly></td>";
				echo "</tr>";
				
				echo "<tr>";
				echo "<td>Task Description</td>";
				echo "<td><input type='text' name='TaskDescription' value=".$row['TaskDescription']." readonly></td>";
				echo "</tr>";

		
				echo "<tr>";
				echo "<td>Deadline</td>";
				echo "<td><input type='text' name='DeadLine' value=".$row['DeadLine']." readonly></td>";
				echo "</tr>";

	

			}
			echo "</table>";
			echo "</form>";
			echo "</div>";
  	}
	
			
	?>

	<div class="col-3">
	</div>	
</div>


<div class ="col-12">
<div class="Id col-12">
			<form action="givetask.php" method="GET" >
				
				<table>
					<tr>

						<td>  Task Name </td> 
						<td><input type="text" name="Task_Name" required></td>

						<td>  Task Date </td>
						<td><input type="date" name="Task_Date" required></td>

						<td>  Task Description </td>
						<td><input type="text" name="Task_Description" required></td>

						<td>  Deadline </td>
						<td><input type="date" name="Task_Deadline" required></td>

						<td>  Employee ID </td>
						<td><input type="text" name="Emp_ID" required></td>

						<td><input type="submit" name="submit" value="Submit"></td>

						</tr>
</table>
	</form>
<?php
//$connect = mysqli_connect("localhost","root","", "company_maintenance_system");


	if(isset($_GET['submit'])){

          $tname =$_GET['Task_Name'];
          $tdate =$_GET['Task_Date'];
          $tdescription = $_GET['Task_Description']; 
          $deadline = $_GET['Task_Deadline'];
          $empid = $_GET['Emp_ID']; 

          $query2 = "INSERT INTO task( `Task_Name`,`Task_Date`, `Task_Description`, `Task_Deadline`,  `Emp_Id`) VALUES ('$tname','$tdate','$tdescription','$deadline','$empid')";
        

             
            

            if(mysqli_query($connect, $query2)){

              echo("Task is Sucessfully send");
              
            }
            
            else{
              echo("error in application");
            }     

}


?>
					
		

		
	
          
	</div>

</div>
	</body>
</html>