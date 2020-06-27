<?php
  include("functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Message </title>
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
		
		<div class="div1">
			<div class="div1 col-4">
			</div>
		</div>
			<div class="div1 col-12">
			<div class="form col-3">
				<?php
            if(isset($_POST['submit'])){
              $message = $_POST['message'];
              $query = "INSERT INTO `message` (`Message_Id`, `Message`, `Message_Date`, `Status`, `Type`) VALUES (NULL, '$message', CURRENT_TIMESTAMP, 'unread', 'meetings')";
              if(performQuery($query)){
                echo "Inserted Sucussfully";
            }
            header("refresh:2; url=sendmessage.php");
          }
          ?>
          <form method="POST" class="form-inline mt-2 mt-md-0">
            <input name="message" class="form-control mr-sm-2" type="text" placeholder="Message" required>
            <button name="submit" class="button" type="submit">Meetings</button>
          </form>
          
				<?php
            if(isset($_POST['submit1'])){
              $message = $_POST['message1'];
              $query = "INSERT INTO `message` (`Message_Id`, `Message`, `Message_Date`, `Status`, `Type`) VALUES (NULL, '$message', CURRENT_TIMESTAMP, 'unread', 'funtions')";
              if(performQuery($query)){
                echo "Inserted Sucussfully";
            }
            header("refresh:2; url=sendmessage.php");
          }
          ?>
          <form method="POST" class="form-inline mt-2 mt-md-0">
            <input name="message1" class="form-control mr-sm-2" type="text" placeholder="Message" required>
            <button name="submit1" class="button" type="submit">Funtions</button>
          </form>
			</div>
	</div>
	</body>
</html>