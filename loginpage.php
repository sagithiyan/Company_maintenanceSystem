<?php
   session_start();
    if (isset($_POST["submit"])) {
        $User_Name= $_POST["User_Name"];
        $password =md5($_POST["password"]);
	
		
		$con = mysqli_connect("localhost", "root", "", "company maintenance system");
    

        
        
       if(empty($_POST["User_Name"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  

           $User_Name = mysqli_real_escape_string($con, $_POST["User_Name"]);   
           $password = mysqli_real_escape_string($con, $_POST["password"]);    
           $password = md5($password); 
           $query = "SELECT * FROM login WHERE User_Name = '$User_Name' AND Password = '$password'";  
           $result = mysqli_query($con,$query);
            if (mysqli_num_rows($result) == 1) { // user found
      // check if user is admin or user
      $User_Type = mysqli_fetch_assoc($result);
$_SESSION['User_Name']=$User_Name;
$_SESSION['User_Type']=$User_Type;
if ($User_Type['User_Type'] == 'Admin') {

       
        header('location:administrator.php');
           	}
           	elseif($User_Type['User_Type'] == 'Client'){


           		header("location:client.php"); 
          
          
           		
           	}
           		elseif($User_Type['User_Type'] == 'Employee'){
           		header("location:employee.php"); 
            
           

           	}
           }
           	else  
           {  

           	   header("location:login.php"); 
                echo '<script>alert("Wrong User Details")</script>';  
             
           }  
    
}
 mysqli_close($con);
}
    ?>