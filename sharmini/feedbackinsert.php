<?php
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not Connected To the Server';
	}

	if(!mysqli_select_db($con,'company maintenance system')){
		echo 'Database Not Selected';
	}

	$Feedback_Subject = $_POST['feedback'];
	$Feedback_Date = $_POST['date'];
	$From_Whom = $_POST['Firstname'];

	$sql = "Insert into ClientTask (Feedback_Subject,Feedback_Date,From_Whom) values ('$Feedback_Subject','$Feedback_Date','$From_Whom')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	//header("refresh:2; url=CompanyMaintenanceSystem.php");
?>