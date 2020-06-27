<?php
  include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Leave Application </title>
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
			text-decoration: underline;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: underline;
		}
	
	.form{
		border: 5px #000000;
		border-style: double;
		border-radius: 12px;
		width: 620px;
		font-weight: bold5
		font-family:"Times New Roman";
		font-weight:bold5
		
		
		 border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	
	}
	.div2{
		
		font-size:40px;
		color: #660033;
	}
	
	.header{
		background-color: #999966;
		border-radius: 0px 0px 0px 0px;
	}
	
	input[type=submit], input[type=reset] {
		background-color: #555555;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 1px;
		cursor: pointer;
		border-radius: 5px 5px 5px 5px;
		
	}
	.cancelbtn{
		background-color: #cecdce;
		border: none;
		border-radius: none;
	}
	
	</style>
</head>
<body>

	<div class="header1 ">

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
		
<div class="col-12">
		<form action="leavestatus.php" method="GET">
		<input type="submit" name="submit" value="Leavestatus">
		</form>
	</div>
	
	<div class="page col-12">
	
	<div class="div2 col-6">
	<img src="Employee/why-work-for-us.jpg" style="height:600px;width:100%;border-radius: 0px 0px 25px 25px;"> <br>
	</div>
		
	
	  
		<form action="applyleaveapplication.php" method="post">
			
			
	<div class="form col-6">
	<h1> Leave Application Form </h1>	
		
		
	Employee ID :<br>
	 <input type="text" name="Employee_Id" placeholder="Employee Id" required="required" ><br><br>

	Employee Name :<br>
	 <input type="text" name="Employee_Name" placeholder="Employee Name" required="required" ><br><br>
	
	Leave Type(Tick for appropriate box) <br>
	 <input type="radio" name="Leave_Type" value="sick"> Sick <br>
	 <input type="radio" name="Leave_Type" value="Persernal Leave"> Persernal Leave <br>
	 <input type="radio" name="Leave_Type" value="NoPay"> NoPay <br>
	 <input type="radio" name="Leave_Type" value="Casual"> Casual <br>
	 <input type="radio" name="Leave_Type" value="Others"> Others <br><br>

	Reason:<br>
	 <textarea rows="4" cols="50" name=Reason placeholder="Reason for the leave" required="required"></textarea><br><br>
	 
	Dates Requestes: <br>
	Leave  From :	<input type="date" name="Date_From" placeholder="14.02.2018" required="required"> &nbsp &nbsp Leave To: <input type="date" name="Date_To" placeholder="12.02.2018" required="required"><br><br>
	
	 &nbsp &nbsp&nbsp &nbsp <input type="submit" name="submit" value="submit"/> &nbsp &nbsp&nbsp &nbsp <input type="reset" name="reset" value="reset" />
	 
	</form> 
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
	

										
										
	