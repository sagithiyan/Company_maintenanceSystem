<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
$query = "select * from clienttask order by ClientTaskId asc";
$result= mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Details</title>
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
			
			.table, th, td {
				padding: 15px;
			}
			input[type=submit] {
						
						background-color: #4CAF50;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						 float: left;


					}
			.footer{
			background-color:#aaaa55;
		}
		
		body{
			/*background-image: url("Administrator/grey.jpg");
			opacity:0.8;*/
			background-color:#cecdce;
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
		<a href="givetask.php">TASK DETAILS </a>
		</div>
		<div class="col-2" align="center">
		<a href="CompanyMaintenanceSystem.php">LOGOUT</a>
		</div>
				
		<div class="col-1">
		</div>

	</div>

	<div class="content">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="table-responsive">
			<table id = "editable_table" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Client Task Id</th>
				<th>Email</th>
				<th>Task Name</th>
				<th>Task Description</th>
				<th>Dead Line</th>
				<th>Approve Status</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php
				while($clienttask = mysqli_fetch_array($result)){
					echo'
						<tr>
							<td>'.$clienttask["ClientTaskId"].'</td>
							<td>'.$clienttask["Email"].'</td>
							<td>'.$clienttask["TaskName"].'</td>
							<td>'.$clienttask["TaskDescription"].'</td>
							<td>'.$clienttask["DeadLine"].'</td>
							<td>'.$clienttask["Approve_Status"].'</td>
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
			url:'clienttaskview.php',
			columns:{
				identifier:[0, "ClientTaskId"],
				editable:[[5, 'Approve_Status']]
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