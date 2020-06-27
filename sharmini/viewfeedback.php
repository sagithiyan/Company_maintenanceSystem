<?php
  include 'sever.php';



  $sql="SELECT * FROM `client` WHERE `Client_Id` = '1' ";

   echo $sql;


  

  if($conn->query($sql))
  {
    //echo "<script>window.open('GetFeedback.php?mes=Client Feedback','_self')</script>";
  }
  else
  {
    echo "<script>window.open('StaffDetails.php','_self')</script>";
  }
?>