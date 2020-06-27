<?php
session_start();


?>


<html>

    <head>


      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>
        <script language="javascript">
         window.alert(" Reset code  submitted Successfully  ");
        </script>
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "company maintenance system";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>
            
         <div class="form-gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-paper-plane-o" style="font-size:100px"></i></h3>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <form action="ResetPassword1.php" method="post">
                <h2>Reset Your password</h2></br>
                <label>New Password</label>
                <div class="panel-body">
                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-send color-blue"></i></span>
                <input type="password" class="form-control" name="PWD1" placeholder="Enter New Password" required>
            </div></div></div>
                <label>confirm Password</label>
                <div class="panel-body">
                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-send color-blue"></i></span>
                <input type="password"  class="form-control" name="PWD2" placeholder="Re-enter Password" required>
                </div></div></div>
                <div class="form-group" align="center">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="Reset3">
            </div>
            </form>
            <?php
            if (isset($_POST["Reset3"])) {
                $P1 = $_POST["PWD1"];
                $P2 = $_POST["PWD2"];
                $PWord= md5($P2);
                
                if ($P1 != "" && $P2 != "") {
                     if ($P1  == $P2 ){
                         $E=$_SESSION['Email'];
                         
                         $q1 = "select * from client where Email='$E'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    
                    if ($count1 > 0) {
                         $Q1="UPDATE login SET Password =  '$PWord' WHERE Email='$E'";
                  
                         if(mysqli_query($con, $Q1)){
                         	echo '<script>alert("password has been updated")</script>';
                             header("Location:login.php") ;
                         }
                        
                    }
                    
                     }else {
                    echo"<font color=red> Password Not Match</font><br>";
                }
                }else {
                echo "<font color=red>Enter New Password</font><br>";
            }
            } 
            ?>
            
        </div> 


    </body>

</html>
