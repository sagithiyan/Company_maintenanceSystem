<?php 

include 'server.php';

		$eid =$_GET['eid'];
		$date =$_GET['date'];
		$bsalary = $_GET['bsalary'];
		$allow = $_GET['allow'];
		$totsub5=$_GET['totsub5'];
		$totsub4=$_GET['totsub4'];
		$totsub3=$_GET['totsub3'];
		$totsub2=$_GET['totsub2'];
		$totrateamount=$_GET['totrateamount'];
		$totgross=$_GET['totgross'];
		$epf=$_GET['epf'];
		$loan=$_GET['loan'];
		$totdeu=$_GET['totdeu'] ;
		$net=$_GET['net'] ;

	$sql= " INSERT INTO `salary`(`Basic_Salary`, `total_Rate5_amount`, `Total_Rate_Amount`, `Loan`, `Allowance`, `Gross_Salary`, `E.P.F`, `Total_Deductions`, `Net_Salary`, `Issue_Date`, `Emp_Id`, `Total_Rate4_Amount`, `Total_Rate3_Amount`, `Total_Rate2_Amount`) VALUES ('$bsalary', '$totsub5', '$totrateamount', '$loan', '$allow', '$totgross', '$epf', '$totdeu', '$net', '$date', '$eid', '$totsub4', '$totsub3', '$totsub2') ";
    
    if(mysqli_query($db,$sql)){
        echo ' Inserted';
    }
    else{
        echo 'Not Inserted';
    }
    header("refresh:2; url=entrysalary.php");

 ?>
	