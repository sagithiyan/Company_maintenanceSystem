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
         window.alert(" Reset code sent Successfully . Check your mail  ");
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
                  <h3><i class="fa fa-pencil-square-o" style="font-size:100px"></i></h3>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               <h2 class="text-center">Reset Code</h2>
            <form action="ResetCode1.php" method="post">
              
                <div class="panel-body">
                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-send color-blue"></i></span>
                <input type="text" name="Reset" class="form-control"  placeholder="Enter the reset code" >
            </div>
        </div>
    </div>
<div class="form-group" align="center">
                <input type="submit" class="btn btn-lg btn-primary btn-block"  value="Submit" name="reset1">
            </div>
            </form>


            <?php
            if (isset($_POST["reset1"])) {
                $R = $_POST["Reset"];

                if ($R != "") {
                    $q1 = "select * from forget where ResetCode='$R'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    
                    if ($count1 > 0) {
                        
                        
                        header("location:ResetPassword1.php");
                    } else {
                        echo"<font color=red>Invalid Reset Code</font><br>";
                    }
                } else {
                    echo "<font color=red>Enter the Reset code</font><br>";
                }
            }
            ?>

        </div> 


    </body>

</html>
