<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<?php
  include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> My Details </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
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
			<a href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MESSAGES 


                <?php
                  $query="SELECT * from message where status = 'unread' order by Message_Date DESC;";
                  if(count(fetchAll($query))>0)
                  {
                ?>
                <span class="badge badge-light" style="background-color:#bbb;"> <?php echo count(fetchAll($query)); ?> </span>
                <?php
                  }
                ?>


              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <?php
                $query="SELECT * from message order by Message_Date DESC;";
                 if(count(fetchAll($query))>0){
                 foreach(fetchAll($query) as $i){
                ?>
                <a style="
                    <?php
                      if($i['Status']== 'unread'){
                        echo "font-weight:bold";
                      }
                    ?>
                " class="dropdown-item" href="view.php?Message_Id=<?php echo $i['Message_Id']?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['Message_Date']))?></i></small><br>
                  <?php 
                  if($i['Type']=='meetings'){
                  echo "You have a meeting.";
                }
                else if($i['Type']=='functions'){
                echo "You have a Function.";
              }
                  ?>
                </a>
                <div class="dropdown-divider"></div>
                <?php
                  }
                  }
                  else{
                  echo "No Record Yet.";
                }
                ?>
              </div>
            

          <!--?php
            if(isset($_post['submit'])){
              $message = $_post['message'];
              $query = "INSERT INTO `notifications` (`message`) VALUES ('$message')";
              if(performQuery($query)==true){
                header("location:index.php");
            }
          }
          ?>
          <form method="post" class="form-inline mt-2 mt-md-0">
            <input name="message" class="form-control mr-sm-2" type="text" placeholder="Message" required>
            <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
          </form> 

          <form method="post" class="form-inline mt-2 mt-md-0">
            <input name="name" class="form-control mr-sm-2" type="text" placeholder="Name" required>
            <button name="like" class="btn btn-outline-success my-2 my-sm-0" type="submit">Like</button>
          </form-->
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
			
			<div class="col-1">
			</div>

	</div>
	
   
	<div class="form col-12">
		<div class="col-2">
			<form  action="mydetail.php" method="POST">
		<label for="Emp_Id">Employee Id</label>
	
    <input type="number" id="Emp_Id" name="Emp_Id" required> 
    
    <input type="submit" name="submit" value="View Details">

	
	</form> 
		</div>
		
		<div class="form col-8">
			<?php
		  	if(isset($_POST["submit"])){
				$Emp_Id =  $_POST['Emp_Id'];		
				$query = "SELECT * from employee WHERE Emp_Id = '$Emp_Id'";
				$sqldata=mysqli_query($connect, $query)or die('error getting');
							
				echo "<form action='mydetail.php' method='POST'>";

	if ($connect->query($query)) {			
				

			while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
				echo "Employee Id";
				echo "<input type='text' name='Emp_Id' value=".$row['Emp_Id']."  readonly>";
	
				echo "First Name";
				echo "<input type='text' name='Fname' value=".$row['Fname']." readonly>";
				
				echo "Last Name";
				echo "<input type='text' name='Lname' value=".$row['Lname']." readonly>";
				
				echo "Date of Birth";
				echo "<input type='date' name='DOB' value=".$row['DOB']." readonly>";
				
				echo "Age";
				echo "<input type='number' name='Age' value=".$row['Age']." readonly>";
				
				echo "Street";
				echo "<input type='text' name='Street' value=".$row['Street']." readonly>";
				
				echo "Number";
				echo "<input type='number' name='Number' value=".$row['Number']." readonly>";
				
				echo "City";
				echo "<input type='text' name='City' value=".$row['City']." readonly >";

				echo "Email";
				echo "<input type='text' name='Email' value=".$row['Email']."  readonly>";
	
				echo "PhoneNumber";
				echo "<input type='number' name='Phone_No' value=".$row['Phone_No']." readonly>";
				
				echo "Designation";
				echo "<input type='text' name='Designation' value=".$row['Designation']." readonly>";
				
				echo "Qualification";
				echo "<input type='text' name='Qualification' value=".$row['Qualification']." readonly>";
				
				echo "Experiences";
				echo "<input type='text' name='Experience' value=".$row['Experience']." readonly>";
				
				echo "Join Date";
				echo "<input type='Date' name='Join_Date' value=".$row['Join_Date']." readonly>";
				
				
			}
			} else {

					echo "Your Employee Id is wrong";
					header("refresh:2; url=mydetail.php");

				}
		echo "</form>";
	}
		  
		
  
  
  
?>
		</div>
		<div class="col-2"></div>
		
		</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>