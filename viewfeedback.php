<?php
  include 'sever.php';




if(isset($_POST["submit"])){
        $f_Id =  $_POST['FID']; 

  $query="SELECT * FROM `feedback` WHERE `Feedback_Id` = '$FID' ";
  
$sqldata=mysqli_query($connect, $query)or die('error getting');
    echo "<div class='col-8'>";
    echo "<form action='leavestatus.php' method='POST'>";

      while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
  if($conn->query($sql))
  {
    //echo "<script>window.open('GetFeedback.php?mes=Client Feedback','_self')</script>";
  }
  else
  {
    echo "<script>window.open('StaffDetails.php','_self')</script>";
  }


       // $sqldata=mysqli_query($connect, $query)or die('error getting');
}          
?>