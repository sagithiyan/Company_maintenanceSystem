<?php
include 'server.php';
         

		if(isset($_POST['submit'])){

          $emid = $_POST['Employee_Id'];
          $ename = $_POST['Employee_Name']; 
          $leavetype = $_POST['Leave_Type'];
          $reason = $_POST['Reason']; 
          $From = $_POST['Date_From']; 
          $LeaveTo = $_POST['Date_To']; 
          
          
          
          
          $register_query = "INSERT INTO `apply_leave`(`Employee_Id`, `Employee_Name`, `Leave_Type`, `Reason`, `Date_From`, `Date_To`) VALUES ('$emid','$ename','$leavetype','$reason','$From','$LeaveTo');";
        

             

            if(mysqli_query($db, $register_query)){

              echo("Leave Application is Sucessfully send");
              header("refresh:2; url=leaveapplication.php");
            }
            else{
              echo("error in application");
            }    


}else{
  header("refresh:2; url=leaveapplication.php");
}

?>