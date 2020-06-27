<!DOCTYPE html>
<html>
	<head>
		
		<title> Receive Submission </title>
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
			input[type=text],[type=date] {
						
						padding: 12px 20px;
						margin: 8px 0;
						
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
				
				input[type=submit] {
						
						width: 25%;
						background-color: #4CAF50;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						 float: left;


					}
				form{
					width:100%;
					height:300px;
					border-radius: 25px 25px 25px 25px;
					border: 5px solid #ccc;
					 padding-left: 40px; 

				}
				.footer{
			background-color:#aaaa55;
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

			<div class="div1 col-12 ">
				<div class="img col-6">
				<img src="Administrator\sub.jpg" style="width:100%;height:300px;border-radius: 25px 25px 25px 25px;" >
				</div>
					
				<div class="col-6">
						<form name="submission" method="post" action="submission.php">
								<h3 style=" padding-left: 40px;">Review Details of Task</h3>
								<table>
									<tr>
										<td><label><b>Task Name</b></label></td>
										<td><label><b>Submission Date</b></label></td>
									</tr>
									<tr>
										<td><input type="text" placeholder="Enter Task Name" name="tname"></td>
										<td><input type="date" name="duedate"></td>
									</tr>
									<tr>
										<td><label><b>Project Name</b></label></td>
										<td><label><b>OverAll Priority of Task</b></label></td>
									</tr>
									<tr>
										<td><input type="text" placeholder="Enter Project name" name="project" required></td>
										<td><input type="radio" name="Priority" value="high" checked> High<br>
 								 <input type="radio" name="Priority" value="medium"> Medium<br>
 								 <input type="radio" name="Priority" value="low">  Low
 								</td>
									</tr>
								</table>
								 <input type="submit" name="submit" value="Display">
							</div>
							</form>
				</div>
			</div>
		
	</body>
</html>