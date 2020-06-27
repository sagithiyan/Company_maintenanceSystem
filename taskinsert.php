<?php
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not Connected To the Server';
	}

	if(!mysqli_select_db($con,'company maintenance system')){
		echo 'Database Not Selected';
	}

	$Email = $_POST['mail'];
	$TaskName = $_POST['taskname'];
	$TaskDescription = $_POST['description'];
	$DeadLine = $_POST['ddate'];

	$sql = "Insert into clienttask (Email,TaskName,TaskDescription,DeadLine) values ('$Email','$TaskName','$TaskDescription','$DeadLine')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else{
		//echo 'Inserted';
		$last_id = $con->insert_id;
    echo "<h1>Your Task Send to the Admin Successfully <br> Check whether Your Task Approve or Not after a Day</h1>. <br><h3>Last inserted ID is: ".$last_id;
	}
	header("refresh:5; url=client.php");
?>