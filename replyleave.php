<?php

$connect = mysqli_connect('localhost', 'root', '', 'company maintenance system');

$input = filter_input_array(INPUT_POST);


$Employee_Id = mysqli_real_escape_string($connect, $input["Employee_Id"]);
$Employee_Name = mysqli_real_escape_string($connect, $input["Employee_Name"]);
$Leave_Type = mysqli_real_escape_string($connect, $input["Leave_Type"]);
$Reason = mysqli_real_escape_string($connect, $input["Reason"]);
$Date_From = mysqli_real_escape_string($connect, $input["Date_From"]);
$Date_To= mysqli_real_escape_string($connect, $input["Date_To"]);
$Status = mysqli_real_escape_string($connect, $input["Status"]);
$comments = mysqli_real_escape_string($connect, $input["comments"]);

					
if($input["action"] === 'edit'){
	$query = "UPDATE `apply_leave` SET `Status`='$Status',`comments`='$comments' where `Employee_Id` = '$Employee_Id'";



	mysqli_query($connect, $query);
	

}

if($input["action"] === 'delete'){
	$query = "DELETE from apply_leave where Employee_Id = '".$input["Employee_Id"]."'";
	//mysqli_query($connect, $query);
	if(!mysqli_query($connect, $query)){
		echo 'Not Inserted';
	}
	else{
		header("refresh:2; url=Index.php");
	}
	
}

echo json_encode($input);

?>

						