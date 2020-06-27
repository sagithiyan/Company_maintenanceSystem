<?php
session_start();
//You have to remove this session User_Name set
if (isset($_SESSION['User_Name'])) {
$User_Name=$_SESSION['User_Name'];
}
else{
  header("Location:login.php");
}

$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Client</title>>
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
				
				a:hover {
					color: black;
					background-color: transparent;
				}

				a:active {
					color: black;
					background-color: transparent;
				}
				
				* {
				box-sizing: border-box;
				}
				
				img {
				vertical-align: middle;
				width:80%;
				height:600px;	
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
						background-color: black;
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

					.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
		</style>
	</head>
	
	<body>

		<div class="row" >

			<div class="col-1">
			</div>

			<div class="col-2" align="center" >
			<a href="aboutus.php">ABOUT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="services.php">SERVICES</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="contactus.php">CONTACT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout"><b>Log Out</b></button></a>
			</div>
			
			<div class="col-1">
			</div>

		</div>

		<div class="col-12">
				<img src="Client/client1.jpg" style="width:100%;height:400px;">
		</div>
			
			<br>
		
		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Do You Have Task?</h1>
		</div>

		<div class="col-12">
			<div class="col-6">
					<img src="Client/client.jpg" style="width:100%;height:300px;">
			</div>

			<div class="col-6">
				<form method="POST" action="taskinsert.php">

					<table>

						<tr>
							<td><label for="mail">Email</label></td>
							<td><input type="text" name="mail" placeholder="Your Email Id" pattern=".+@gmail.com" required></td>
						</tr>

							  		<tr>
							  			<td><label for="lname">Task Name</label></td>
							  			<td><select name="taskname">
						  						<option value="Typhography">Typhography</option>
						  						<option value="Invitation">Invitation</option>
						  						<option value="Banner">Banner</option>
						  						<option value="Wedding">Wedding</option>
						  						<option value="Christmas">Christmas</option>
											</select>
										</td>
							  		</tr>

							  		<tr>
							  			<td><label for="lname">Task Description</label></td>
							  			<td><textarea rows="4" cols="50" name="description" placeholder="Enter your Description" required="required"></textarea></td>
							  		</tr>

							  		<tr>
							  			<td><label for="lname">Dead Line</label></td>
							  			<td><input type="date" name="ddate" required></td>
							  		</tr>

							  		<tr>
							  			<td></td>
							  			<td><input type="submit" value="Submit"style="background-color:#bbb;"><input type="reset" value="Clear"style="background-color:#bbb;" required></td>
							  		</tr>
							  	</table>
						</form>
			</div>
					
			
		</div>

		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Approvals Checking</h1>
		</div>

		<div class="col-12">
			<div class="col-3"></div>
		
			<div class="form col-6">
				<form  action="client.php" method="POST">
					<label>Task Id</label>
					<input type="text" name="ClientTaskId" required> 
					<input type="submit" name="submit" value="View Details">
				</form> 
			</div>

			<div class="col-3"></div>
		</div>

		<div class="row col-12">
			<div class="col-3"></div>
	
			<?php
	  			if(isset($_POST["submit"])){
				$ClientTaskId =  $_POST['ClientTaskId'];		
				$query = "SELECT * from clienttask WHERE ClientTaskId = '$ClientTaskId'";
				$sqldata=mysqli_query($connect, $query)or die('error getting');

				echo "<div class='form col-6'>";
				echo "<form action='client.php' method='POST'>";
				echo "<table>";

					while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
						echo "<tr>";
						echo "<td>ClientTaskId</td>";
						echo "<td><input type='text' name='ClientTaskId' value=".$row['ClientTaskId']."  readonly></td>";
						echo "</tr>";
		
						echo "<tr>";
						echo "<td>Task Name</td>";
						echo "<td><input type='text' name='TaskName' value=".$row['TaskName']." readonly></td>";
						echo "</tr>";
					
						echo "<tr>";
						echo "<td>Approve Status</td>";
						echo "<td><textarea name='Approve_Status' readonly>".$row['Approve_Status']."</textarea></td>";
						echo "</tr>";
					}
				echo "</table>";
				echo "</form>";
				echo "</div>";
	  			}
	  		?>

  			<div class="col-3"></div>
		</div>

		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Do You Have FeedBack?</h1>
		</div>
			
			<div class="col-6">
				<form method="POST" action="feedbackinsert.php">
					<table>

						<tr>
							<td><label>Task Name</label></td>
							<td><select name="Task_Name">
						  			<option value="Typhography">Typhography</option>
						  			<option value="Invitation">Invitation</option>
						  			<option value="Banner">Banner</option>
						  			<option value="Wedding">Wedding</option>
						  			<option value="Christmas">Christmas</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label>Email</label></td>
							<td><input type="text" id="lname" name="Email" placeholder="your mail id" required></td>
						</tr>

						<tr>
							<td><label>Dead Line</label></td>
							<td><input type="date" name="Feedback_Date" required></td>
						</tr>

						<tr>
							<td><label>Your Rate for Task Submission</label></td>
							<td><input type="radio" name="Client_Sub_Rate" value="1"> 1 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="2"> 2 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="3"> 3 <br>
					 			<input type="radio" name="Client_Sub_Rate" value="4"> 4 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="5"> 5 <br>
	 						</td>
						</tr>

						<tr>
							<td><label>Comment</label></td>
							<td><input type="text" id="lname" name="Comment" placeholder="Enter your comment" required></td>
						</tr>

						<tr>
							<td><label>Service Status</label></td>
							<td><input type="radio" name="Service_Status" value="1"> Very Statisefied <br>
	 							<input type="radio" name="Service_Status" value="2"> Statisefied <br>
	 							<input type="radio" name="Service_Status" value="3"> Normal <br>
					 			<input type="radio" name="Service_Status" value="4"> Poor <br>
	 							<input type="radio" name="Service_Status" value="5"> Very Poor <br>
	 						</td>
						</tr>

						<tr>
							<td></td>
							<td><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>
					
			<div class="col-6">
				<img src="Client/client3.jpg" style="width:100%;height:300px;">
			</div>

		<div class="col-12" style="background-color:gray;height:200px;padding:1px">

			<div class="row">

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
		
		</div>

	</body>
</html>