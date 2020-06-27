<!DOCTYPE html>
<html>
	<head>
		
		<title> Feedback</title>
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
			input[type=text] {
						width: 100%;
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
						 float: right;
					}
		

		
			.footer{
			background-color:#aaaa55;
			}
		h1{
			float: center;
		}
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		td {
   			 height: 50px;
		}
		th{
			border: 0;
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
			<a href="givetask.php">TASK DETAILS </a>
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
					
			<div class="col-1">
			</div>

			<div class="col-12">
				<img src="Administrator/feedback.jpg" style="height:200px;width:100%">
			</div>

		</div>


		
		<div>
  					<div class="row">
  					<div class="col-12">
						
							<div class="col-2">
									
							</div>
							<div class="col-8">
							<form name="Feedback" method="post" action="Feedback.php" style="border:5px solid #ccc" >
								<h1>FeedBack</h1>
								<p>Your thoughts are appreciated..</p>
								<hr>

								<label><b>First Name</b></label>
								<input type="text" placeholder="Enter First Name" name="fname">
								<label><b>Last Name</b></label>
								<input type="text" placeholder="Enter Last Name" name="lname">

								<label><b>Project Name</b></label>
								<input type="text" placeholder="Enter Project name" name="project" required>

								<label><b>Name of the Evaluvator</b></label>
								<input type="text" placeholder="Client Name" name="Client" required>
								
								<label><b>OverAll Satisfication of Services</b></label><br>
								<table border="1">
									<tr>
										<th></th>
										<td>Very Good</td>
										<td>Good</td>
										<td>Fair</td>
										<td>Poor</td>
										<td>Low</td>
									</tr>
									<tr>
										<td>Knowledge</td>
										<td><input type="radio" checked="checked" name="rate"></td>
										<td><input type="radio"  name="rate"></td>
										<td><input type="radio"  name="rate"></td>
										<td><input type="radio"  name="rate"></td>
										<td><input type="radio"  name="rate"></td>
									</tr>
									<tr>
										<td>Quickness</td>
										<td><input type="radio" checked="checked" name="rate1"></td>
										<td><input type="radio"  name="rate1"></td>
										<td><input type="radio"  name="rate1"></td>
										<td><input type="radio"  name="rate1"></td>
										<td><input type="radio"  name="rate1"></td>
									</tr>
							
								</table>
								<br>
								 
								<label><b>Would you use our customer service in future</b></label><br>


								
								 <input type="radio" name="decision" value="male" checked> Yes<br>
 								 <input type="radio" name="decision" value="female"> No<br>
 								 <input type="radio" name="decision" value="other"> Maybe
 								 <br>
 								 <br>

								<label><b>How we can improve our self</b></label><br>
								  <textarea style="width: 60%; height: 130px;">  Tell somes advices..</textarea><br>

								<input type="submit" name="submit">
							</div>
							</form>
							<div class="col-2">
							</div>
							
					</div>
					
  				</div>
			
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