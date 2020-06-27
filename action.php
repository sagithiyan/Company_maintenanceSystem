<?php
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'company maintenance system');

$input = filter_input_array(INPUT_POST);

$Fname = mysqli_real_escape_string($connect, $input["Fname"]);
$Lname = mysqli_real_escape_string($connect, $input["Lname"]);
$Street = mysqli_real_escape_string($connect, $input["Street
	"]);
$Number = mysqli_real_escape_string($connect, $input["Number"]);
$City = mysqli_real_escape_string($connect, $input["City"]);
$Phone_No = mysqli_real_escape_string($connect, $input["Phone_No"]);
$Email = mysqli_real_escape_string($connect, $input["Email"]);
$DOB = mysqli_real_escape_string($connect, $input["DOB"]);
$Age = mysqli_real_escape_string($connect, $input["Age"]);
$Qualification = mysqli_real_escape_string($connect, $input["Qualification"]);
$Designation = mysqli_real_escape_string($connect, $input["Designation"]);
$Experience = mysqli_real_escape_string($connect, $input["Experience"]);
$Join_Date = mysqli_real_escape_string($connect, $input["Join_Date"]);

if($input["action"] === 'edit'){
	$query = "update employee set Fname = '$Fname',Lname = '$Lname', Street = '$Street', Number = '$Number', City = '$City', Phone_No = '$Phone_No', Email = '$Email', DOB = '$DOB', Age = '$Age', Qualification = '$Qualification', Designation = '$Designation', Experience = '$Experience', Join_Date = '$Join_Date' where Emp_Id = '".$input["Emp_Id"]."'";

	mysqli_query($connect, $query);
}

if($input["action"] === 'delete'){
	$query = "delete from user_details where Emp_Id = '".$input["Emp_Id"]."'";
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