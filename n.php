

<?php
session_start();
    if( isset($_POST['submit'] ) ) {
    $username= $_POST["username"];
        $password = $_POST["password"];
        $con = mysqli_connect("localhost", "root", "", "company maintenance system");
        mysqli_select_db($con, "company maintenance system");
         
       if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  

           $username = mysqli_real_escape_string($con, $_POST["username"]);   
           $password = mysqli_real_escape_string($con, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM login WHERE User_Name = '$username' AND Password = '$password'";  
        $result = mysql_fetch_array( "SELECT user.*, \"user\" as t FROM user WHERE id=".$_POST['id']." UNION SELECT admin.*, \"admin\" as t WHERE id=".$_POST['id']." FROM admin" );
        if( is_array( $result) ) foreach( $result as $i ) {
            if( $i['id']==$_POST['id'] && $i['passwd']==$_POST['passwd'] ) {
                // also here you should set cookie to be checked in user/index.php and admin/index.php to prevent user to get into admin space by directly typing the url
                if( $i['t']=="admin" ) {
                    header('location: admin/index.php');
                } else {
                    header('location: user/index.php');
                }
            }
        }
    } 
    echo( "Invalid id-password combination" );

?>