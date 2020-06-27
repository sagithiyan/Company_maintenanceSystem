<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title> View Feedback</title>
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
			input[type=text],input[type=number], input[type=date] {
						width: 70%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 40%;
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
		</style>
		
	</head>

<body>

		<div>
  				<div class="row">
  					<div class="col-12">
						
						<div class="col-3">
							<form  action="getfeedback.php" method="POST">
								<label for="feedId">Feedback ID</label>
							
								    <input type="number" id="Feedback ID" name="FID" required> 
								    
								    <input type="submit" name="submit" value="View Details">

							
							</form> 
							</div>
<?php							
if(isset($_POST["submit"])){
        $f_Id =  $_POST['FID']; 

  $query="SELECT * FROM `feedback` WHERE `Feedback_Id` = '$f_Id' ";
  
$sqldata=mysqli_query($connect, $query)or die('error getting');
    echo "<div class='col-8'>";
    echo "<form action='getfeedback.php' method='POST' style='border:5px solid #ccc'>";

      while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){

								
								echo "<h1>FeedBack</h1>";
								echo "<p>Your thoughts are appreciated..</p>";
								echo "<hr>";
								
								

								echo "<label><b>Task Name</b></label>";
								echo "<input type='text' name='Task_Name' value=".$row['Task_Name']." readonly>";

								echo "<label><b>Email</b></label>";
								echo "<input type='text' name='Email' value=".$row['Email']." readonly>";

								echo "<label><b>Feedback Date</b></label>";
								echo "<input type='text'  name='Feedback_Date' value=".$row['Feedback_Date']." readonly>";

								echo "<label><b>Client submission Rate</b></label>";
								echo "<input type='number' name='Client_Sub_Rate' value=".$row['Client_Sub_Rate']." readonly>";

								echo "<label><b>Comments</b></label>";
								echo "<textarea name='Comments' value=".$row['Comment']." readonly></textarea>";
								
								echo "<label><b>Service Status</b></label>";
								echo "<input type='text' name='Service_Status' value=".$row['Service_Status']." readonly>";

				

		}
		echo "</form>";
		echo "</div>";
  }
  
  
?>
							
					</div>
					
  				</div>
			
		</div>


		
	</body>
</html>
