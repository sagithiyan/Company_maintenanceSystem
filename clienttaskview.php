<?php
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'company maintenance system');

$input = filter_input_array(INPUT_POST);

$ClientTaskId = mysqli_real_escape_string($connect, $input["ClientTaskId"]);
$Email = mysqli_real_escape_string($connect, $input["Email"]);
$TaskName = mysqli_real_escape_string($connect, $input["TaskName"]);
$TaskDescription = mysqli_real_escape_string($connect, $input["TaskDescription"]);
$DeadLine = mysqli_real_escape_string($connect, $input["DeadLine"]);
$Approve_Status = mysqli_real_escape_string($connect, $input["Approve_Status"]);

if($input["action"] === 'edit'){
	$query = "update clienttask set Approve_Status = '$Approve_Status' where ClientTaskId = '".$input["ClientTaskId"]."'";

	mysqli_query($connect, $query);
}

if($input["action"] === 'delete'){
	$query = "delete from clienttask where ClientTaskId = '".$input["ClientTaskId"]."'";
	//mysqli_query($connect, $query);
	if(!mysqli_query($connect, $query)){
		echo 'Not Inserted';
	}
	else{
		header("refresh:2; url=adminviewtask.php");
	}
	
}

echo json_encode($input);
?>