

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
        	<div class="col-12">
		      
		       <form action="salarysave.php" method="GET">
				<fieldset>
				         <legend> Salary Details </legend>
						
						 	<?php

							echo "Employee ID  :    	<input type='text' name='eid' value='".$_GET['emp_Id']."' readonly> ";
							
							 echo "Issue Date:    <input type='date' name='date' CURRENTSTAMP>";
							 ?>
	                        
                </fieldset>
            </div>
         <div class="row">
        	<div class="col-12">

			        <div class="col-7">
			            <fieldset>
							
					                      <legend> Gross Salary </legend>
<?php 
	echo "	Basic Salary(Rs)	:<input type='text' name='bsalary' value='".$_GET['basic_Salary']."' readonly> ";
	echo "<br>";
	$allowances =( $_GET['basic_Salary'] * 0.2);
	echo "Allowances(Rs)		:<input type='text' name='allow' value='".$allowances."' readonly>  ";
	echo "<br>";

	if ($_GET['Rate5']) {
		$Rate5_Amount = ($_GET['Rate5'] * 200);
	} 
	if ($_GET['Rate4']) {
		$Rate4_Amount = ($_GET['Rate4'] * 150);
	}
	if ($_GET['Rate3']) {
		$Rate3_Amount = ($_GET['Rate3'] * 100);
	}
	if ($_GET['Rate2']) {
	 	
	 	$Rate2_Amount = ($_GET['Rate2'] * 50);
	} 
	echo "Total Rate_5 Amount	:<input type='text' name='totsub5' value='".$Rate5_Amount."' readonly>"; 
		echo "Total Rate_4 Amount	:<input type='text' name='totsub4' value='".$Rate4_Amount."' readonly>"; 
	echo "<br>";
	echo "Total Rate_3 Amount	:<input type='text' name='totsub3' value='".$Rate3_Amount."' readonly>"; 
	
	echo "Total Rate_2 Amount 	:<input type='text' name='totsub2' value='".$Rate2_Amount."' readonly>"; 


	 $Total_Rate_Amount = (($_GET['Rate5'] * 200 )+($_GET['Rate4'] * 150)+($_GET['Rate3'] * 100)+($_GET['Rate2'] * 50) );

	 echo "<br>";
	 echo"Total Rate Amount:<input type='text' name='totrateamount' value='".$Total_Rate_Amount."' readonly>";
	 

	 $gross_Salary = ($_GET['basic_Salary'] + $allowances + $Total_Rate_Amount);
	echo "Total Gross Salary  	:<input type='text' name='totgross' value='".$gross_Salary."' readonly>";
	echo "<br>";
	?>
									
							
					        
			            </fieldset>
       
					</div>
					<div class="col-5">
				         <fieldset style="height: 280px;">
						
				                     <legend> Deductions </legend>

	<?php
	$epf = ($_GET['basic_Salary'] * 0.1);    
	echo "EPF(10%)(Rs)		:<input type='text' name='epf' value='".$epf."' readonly>   ";
	echo "<br>";
	echo "Loan(Rs)		:<input type='text' name='loan' value='".$_GET['loan']."' readonly>   ";
	echo "<br>";
	 $deduction = ($epf + $_GET['loan']);
	echo "Total Deduction(Rs)	:<input type='text' name='totdeu' value='".$deduction."' readonly> ";
	echo "<br>";
	?>
	
						
						
						</fieldset>       
				        </div>
				</div>
	</div>
		
	<div class="col-12">
            <fieldset>	
			 <legend> Total Net Salary</legend>

	<?php
				$net_Salary = ($gross_Salary - $deduction);
            		echo "Net Salary(Rs):  	<input type='text' name='net' value='".$net_Salary."' readonly> <br>";
            		echo "<input type='submit' name= 'submit' value='Save' class='btn btn-success'>";

            		?>
			
		
                    </fieldset>
                </div>
                </form>
             </div>
    </div>  
		</div>
	
	</body>
</html>
	