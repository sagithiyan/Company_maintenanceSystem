<?php
	 include 'server.php';

		$Fname =$_GET['Fname'];
		$Lname =$_GET['Lname'];
		$Street = $_GET['Street'];
		$Number= $_GET['Number'];
		$City=$_GET['City'];
		$Phone_No=$_GET['Phone_No'];
		$Email=$_GET['Email'];
		$DOB=$_GET['DOB'];
		$Age=$_GET['Age'];
		$Qualification=$_GET['Qualification'];
		$Designation=$_GET['Designation'];
		$Experience=$_GET['Experience'];
		$Join_Date=$_GET['Join_Date'] ;

$sql="INSERT INTO `employee`(`Fname`, `Lname`, `Street`, `Number`,`City`, `Phone_No`, `Email`, `DOB`, `Age`, `Qualification`, `Designation`, `Experience`, `Join_Date`) VALUES ('$Fname','$Lname','$Street','$Number','$City','$Phone_No','$Email','$DOB','$Age','$Qualification','$Designation','$Experience','$Join_Date')";

	//$sql = "Insert into ClientTask (FirstName,LastName,Email,TaskName,TaskDescription,DeadLine,TaskRateValue) values ('$FirstName','$LastName','$Email','$TaskName','$TaskDescription','$DeadLine','$TaskRate')";

	if(!mysqli_query($db,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	header("refresh:2; url=staffdetails.php");
?>