<?php
	include 'server.php';

	$taskname = $_POST['Task_Name'];
	$email = $_POST['Email'];
	$date = $_POST['Feedback_Date'];
	$Client_Sub_Rate = $_POST['Client_Sub_Rate'];
	$comment = $_POST['Comment'];
	$Service_Status = $_POST['Service_Status'];

	$sql = "INSERT INTO `feedback` (`Feedback_Id`, `Task_Name`, `Email`, `Feedback_Date`, `Client_Sub_Rate`, `Comment`, `Service_Status`) VALUES (NULL, '$taskname','$email','$date','$Client_Sub_Rate','$comment','$Service_Status')";

	if(!mysqli_query($db,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	header("refresh:2; url=client.php");
?>