
<!DOCTYPE html>

<html>
	<head>
		
		<title> Add Staff Details </title>
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
			
			.table, th, td {
				padding: 15px;
				background-color: #f1f1c1
			}
			input[type=text],
			input[type=number],
			input[type=date],select {
						width: 80%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 20%;
						background-color: #4CAF50;
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
				.footer{
			background-color:#aaaa55;
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
		<a href="CompanyMaintenancesSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
		</div>
		<div class="col-2" align="center">
		<a href="givetask.php">TASK DETAILS </a>
		</div>
		<div class="col-2" align="center">
		<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
		</div>
				
		<div class="col-1">
		</div>

	</div>

	
		<div class="col-12">
			<div class="col-2"></div>
			<div class="col-8">
			  <form method="GET" action="staffadd.php">
								<label for="Fname">First Name</label>
								<input type="text" id="Fname" name="Fname" placeholder="Employee First name.." required title="Only text are include">

								<label for="Lname">Last Name</label>
								<input type="text" id="Lname" name="Lname" placeholder="This is your status.." required  title="Only text are include">

								<label for="DOB">Date of Birth</label>
								<input type="date" id="DOB" name="DOB" placeholder="This is your Date of Birth" required title="Date format">

								<label for="Age">Age</label>
								<input type="number" id="Age" name="Age" placeholder="This is your age.." required title="only number">

								<label for="Street">Street</label>
								<input type="text" id="Street" name="Street" placeholder="This is your Street.." required>
								<label for="Number">Number</label>
								<input type="number" id="Number" name="Number" placeholder="This is your home number.." required title="only number">
								<label for="City">City</label>
								<input type="text" id="City" name="City" placeholder="This is your city name.." required>

								<label for="Email">Email</label>
									<input type="text" id="Email" name="Email" placeholder="Your Email Id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="abc1234@gmail.com">

								<label for="Phone_No">Phone Number</label>
								<input type="number" id="Phone_No" name="Phone_No" placeholder="This is your phone number..">

								<label for="Designation">Designation</label>
								<input type="text" id="Designation" name="Designation" placeholder="This is your Designation.." required>

								<label for="Qualification">Qualification</label>
								<input type="text" id="Qualification" name="Qualification" placeholder="This is your Qualification.." required>

								<label for="Experience">Experiences</label>
								<input type="text" id="Experience" name="Experience" placeholder="This is your Experiences.." required>

								<label for="Join_Date">Join Date</label>
								<input type="Date" id="Join_Date" name="Join_Date" placeholder="This is your Join Date.." required>

								<input type="submit" name="submit" value="Submit"style="background-color:#bbb; float:right;">
				 </form>		
		
		</div>
		<div class="col-2"></div>
	</div>
		
	</body>
</html>