<?php
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Salary </title>
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
			
		
		input[type=text],input[type=date] {
						width: 25%;
						padding: 8px 34px;
						margin: 6px 0;
						
						border: 2px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

				
		legend{
			align:center;
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
		background-color: white;
		border: none;
		border-radius: none;
	}
		
		</style>
	</head>
	
	<body>

		<div class="col-12">
		 
		</div>
			
		<div class="col-12">
		 <div>
         
             <h1 align="center">PaySlip </h1>
         
       
     </div>
        <div class="row">
        	<div class="col-2">
			<form  action="viewsalary.php" method="POST">
		<label for="Emp_Id">Employee Id</label>
	
    <input type="number" id="Emp_Id" name="Emp_Id" required> 
    
    <input type="submit" name="submit" value="View Details">

	
	</form> 
		</div>
        	<div class="form col-8">
			<?php
		  	if(isset($_POST["submit"])){
				$Emp_Id =  $_POST['Emp_Id'];		
				$query = "SELECT * from salary WHERE Emp_Id = '$Emp_Id'";
				$sqldata=mysqli_query($connect, $query)or die('error getting');
							
				echo "<form action='mydetail.php' method='POST'>";

	if ($connect->query($query)) {			
				
				

			while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
				echo "Employee Id";
				echo "<input type='text' name='Emp_Id' value=".$row['Emp_Id']."  readonly>";
	
				echo "Basic_Salary";
				echo "<input type='text' name='BSalary' value=".$row['Basic_Salary']." readonly>";
				
				echo "total_Rate5_amount";
				echo "<input type='text' name='Lname' value=".$row['total_Rate5_amount']." readonly>";
				
				echo "Total_Rate4_Amount";
				echo "<input type='text' name='DOB' value=".$row['Total_Rate4_Amount']." readonly>";
				
				echo "Total_Rate3_Amount";
				echo "<input type='number' name='Age' value=".$row['Total_Rate3_Amount']." readonly>";
				
				echo "Total_Rate2_Amount";
				echo "<input type='text' name='Street' value=".$row['Total_Rate2_Amount']." readonly>";
				
				echo "Total_Rate_Amount";
				echo "<input type='number' name='Number' value=".$row['Total_Rate_Amount']." readonly>";
				
				echo "Allowance";
				echo "<input type='text' name='City' value=".$row['Allowance']." readonly >";

				echo "Gross_Salary";
				echo "<input type='text' name='Email' value=".$row['Gross_Salary']."  readonly>";
	
				echo "E.P.F";
				echo "<input type='number' name='Phone_No' value=".$row['E.P.F']." readonly>";
				
				echo "Loan";
				echo "<input type='text' name='Designation' value=".$row['Loan']." readonly>";
				
				echo "Total_Deductions";
				echo "<input type='text' name='Qualification' value=".$row['Total_Deductions']." readonly>";
				
				echo "Net_Salary";
				echo "<input type='text' name='Experience' value=".$row['Net_Salary']." readonly>";
				
				echo "Issue_Date";
				echo "<input type='Date' name='Join_Date' value=".$row['Issue_Date']." readonly>";
				
				
			}
			} else {

					echo "Your Employee Id is wrong";
					header("refresh:3; url=mydetail.php");

				}
		echo "</form>";
	}
		  
		
  
  
  
?>
		</div>
    </div>  
		</div>
	
	</body>
</html>
	