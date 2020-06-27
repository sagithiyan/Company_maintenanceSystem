<!DOCTYPE html>
<html>
<head>
	<title> Leave Detail </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="jquery.tabledit.min.js"></script>
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
	
	.header{
		background-color: #999966;
		border-radius: 0px 0px 0px 0px;
	}
	
	.table, th, td {
		padding: 15px;
	}
	.footer{
			background-color:#aaaa55;
		}
		body{
			/*background-image: url("Administrator/admin2.png");
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

	<div class="header1">

		<div class="col-1">
		<a href="administrator.php"><img src="Administrator/admin.png" style="height:30%;width:30%"></a>
		</div>

		<div class="col-2" align="center" >
		<a href="staffdetails.php">STAFF DETAIL</a>
		</div>
		<div class="col-2" align="center">
		<a href="leavedetails.php">LEAVE APPLICATION</a>
		</div>
		<div class="col-2" align="center">
		<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
		</div>
		<div class="col-2" align="center">
		<a href="adminviewtask.php">GIVE TASK </a>
		</div>
		<div class="col-2" align="center">
		<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
		</div>
				
		<div class="col-1">
		</div>

	</div>
	<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
$query = "SELECT * FROM `apply_leave` order by Date_From asc";
$result= mysqli_query($connect, $query);
?>
	
	<div class="content">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="table-responsive">
			
		<table  id = "editable_table" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th> Employee ID  </th>
				<th> Employee Name </th>
				<th>Leave Type </th>
				<th> Reason  </th>
				<th > Date from </th>
				<th> Date to  </th>
				<th> Status </th>
				<th>Comments</th>
			</tr>
		</thead>
			<tbody>
	 <?php
				while($apply_leave = mysqli_fetch_array($result)){
					echo'
						<tr>
						<td>'.$apply_leave["Employee_Id"].'</td>
						<td>'.$apply_leave["Employee_Name"].'</td>
						<td>'.$apply_leave["Leave_Type"].'</td>
						<td>'.$apply_leave["Reason"].'</td>
						<td>'.$apply_leave["Date_From"].'</td>
						<td>'.$apply_leave["Date_To"].'</td>
						<td>'.$apply_leave["Status"].'</td>
						<td>'.$apply_leave["comments"].'</td>
										
						</tr>
					';	
				}
		?>
						</tbody>	
		</table>
		
		
	
	
		</div>

	</div>	
	
</body>
</html>
<script>
	$(document).ready(function(){
		$('#editable_table').Tabledit({
			url:'replyleave.php',
			columns:{
				identifier:[0, "Employee_Id"],
				editable:[[6, 'Status'], [7, 'comments']]
			},
			restoreButton:false,
			onSuccess:function(data, textStatus, jqXHR){
				if(data.action == 'delete'){
					$('#'+data.id).remove();
				}
			}
		});
	});
</script>
	