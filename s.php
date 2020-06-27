<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="company maintenance system"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.

		$con = mysqli_connect("localhost", "root", "", "company maintenance system");
        mysqli_select_db($con, "company maintenance system");
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM login WHERE User_Name='$username' and Password='$password'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row


if($count==1){
$result=mysql_fetch_array($result);
$User_Type = $result['User_Type'];

//page link on the basis of user role you can add more  condition on the basis of ur roles in db
if($User_Type =='admin'){
 $link = 'administrator.php';
 }
elseif($User_Type =='client'){
 $link = 'client.php';
 }

 elseif($User_Type =='employee'){
 $link = 'employee.php';
 }
// session Register $myusername, $mypassword and redirect to file "login_success.php"
$_session["myusername"] = $myusername;
$_session["mypassword"] = $mypassword;
$_session["User_Type"] = $User_Type;
header("Location: ".$link."");
}

else {
echo "Wrong Username or Password";
}

?>