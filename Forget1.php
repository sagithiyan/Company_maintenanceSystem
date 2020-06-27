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
        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "company maintenance system";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");

        function generateRandomString($length = 6) {
            return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
        }
        ?>

       <img src="1.jpg" class="img-rounded" alt="Cinque Terre" width="400" height="250"   align="right">
        <img src="2.jpg" class="img-rounded" alt="Cinque Terre" width="400" height="250"   align="left">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p> Just Enter your Email Address</p>
                 
            <form action="Forget1.php" method="post">
                	
                <label><b>Email</b></label>
                 <div class="panel-body">
                <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <input type="email" name="Email" class="form-control" placeholder="Enter your Email address" >
</div>
</div>
</div>

<div class="form-group" align="center">
                <input type="submit" class="btn btn-lg btn-primary btn-block"  value="Submit" name="reset">
            </div>
            </form>

            <?php
            if (isset($_POST["reset"])) {
                $E = $_POST["Email"];
                $_SESSION['Email'] = $E;
                if ($E != "") {
                    $q1 = "select * from client where email='$E'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    
                    if ($count1 > 0 ) {
                        $code = generateRandomString();
                         require 'C:\wamp64\www\Company-final\PHPMailer-master/src/Exception.php';
   require 'C:\wamp64\www\Company-final\PHPMailer-master/src/PHPMailer.php';
   require 'C:\wamp64\www\Company-final\PHPMailer-master/src/SMTP.php';
   //require 'PHPMailer-master/PHPMailer.php';
   
   $mail = new PHPMailer(true);
   try{
       $mail->SMTPDebug = 0;
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'sagithiyannagendran@gmail.com';
       $mail->Password = 'nagendransaginagendran';
       $mail->SMTPSecure = 'tls';
       $mail->Port = 587;
       
       $mail->setFrom('sagithiyannagendran@gmail.com','nagendransaginag');
       $mail->addAddress($E,$E);
   
       $mail->isHTML(true);
       $mail->Subject = 'Forgot Password ';
       $mail->Body ="Your Password Reset code is " . $code ;
       
       
         $q3 = "insert into forget (Email,ResetCode)values('$E','$code')";

                        $stmt = mysqli_prepare($con, $q3);
                        $count = mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        mysqli_stmt_num_rows($stmt);
       $mail->send();
                   
                 header("location:ResetCode1.php");      
       echo 'Your Password has been sent on your Email ID.';
   } catch (Exception $e){
       echo 'Email could not be sent';
       echo 'Mailer Error: ' .$mail->ErrorInfo;
   }
                       

                       
                    } else {
                        echo"<font color=red>Invalid Email</font><br>";
                    }
                } else {
                    echo "<font color=red>Enter your email address</font><br>";
                }
            }
            ?>

        </div> 


    </body>

</html>