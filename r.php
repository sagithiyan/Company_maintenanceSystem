<?php  

 $connect = mysqli_connect("localhost", "root", "", "company maintenance system");  
 session_start();  
  
 if(isset($_POST["register"]))  
 {  
      if($_POST['password'] != $_POST['cpassword'])  
      {  
           echo '<script>alert("password not match")</script>';  
      }  
      else  
      {  

            $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
            $lname = mysqli_real_escape_string($connect, $_POST["lname"]);  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);
           $pno = mysqli_real_escape_string($connect, $_POST["pno"]);

           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
            $cpassword = mysqli_real_escape_string($connect, $_POST["cpassword"]); 
            $password = md5($password); 
           $query1 = "INSERT INTO client (Client_Fname,Client_Lname,Email,Phone_No) VALUES('$fname', '$lname','$email' ,'$pno' )"; 
           mysqli_query($connect, $query1);
           $query2 = "INSERT INTO login (User_Name,Password,User_Type,Email) VALUES( '$username', '$password','Employee','$email')"; 
         
            if(mysqli_query($connect, $query2) )    
           {  
                echo '<script>alert("Registration Done! Continue to Sign in")</script>';  
                header("location:login.php"); 
           }  
           else{
               echo '<script>alert("Sorry, error occured with Query")</script>';
               // die(); 
           }
      }  
 }  
 
 //If user click forget password go through this fuction
  /*if(isset($_POST["forgetPassword"])){
    $mail = mysqli_real_escape_string($connect, $_POST["mail"]);
    $query = "SELECT * FROM login WHERE email = '$mail'";  
           $result = mysqli_query($connect, $query); // so, result will have obects. they can be access by running through loop..


           //If user entered email exists in system
           if(mysqli_num_rows($result) > 0)  
           {  
              $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ1234567890";
              //$validCharNumber = strlen($validCharacters); 
              $randomKey ='';
              for ($i = 0; $i < 30; $i++) {
                  $r = mt_rand(0, 61);
                  $randomKey .= $validCharacters[$r];
              }
              

              $recover_key = $randomKey;  
             
             //save random generated key in db as recover_key for given mail
               $query = "UPDATE  login SET recover_key= '$recover_key' WHERE email = '$mail'"; 

               if(mysqli_query($connect, $query))  
               {  
                /*
                //send mail with reset link.
                $to      = $mail;
                $subject = 'Camrix - Password Reset Link';

                //mail message : url & reset
                $message = 'http://localhost/login/forgetpassword.php?reset='.$randomKey;
                
                mail($to, $subject, $message ); 
                    header("location:login.php"); 

                    //SO, you just need to fix the error..... once, send mail it will redirect to login page. User can get the link from his/her mail. 
                    */
               /*}  
               else{
                   echo '<script>alert("Sorry, something went wrong!")</script>';
                   // die(); 
               }
           }  
           else  
           {  
                echo '<script>alert("Entered email is not registered")</script>'; 
                //header("location:r.php?action=forgetPassword");

           }  
    
  }
*/
 /*if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  

           $username = mysqli_real_escape_string($connect, $_POST["username"]);   
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM login WHERE User_Name = '$username' AND Password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
           	$row = mysqli_fetch_array($result);
           	$userType = $row['User_Type'];

           	if($userType == 'admin'){
           		header("location:Administrator.php"); 
           	}
           	elseif($userType == 'client'){
           		header("location:client.php"); 
           	}
           		elseif($userType == 'employee'){
           		header("location:Administrator.php"); 
           	}
           	else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
              //redirect to client page
              //header("location:entry.php");
 //            //after login, check user type... 
 // if (password_verify($_POST['Password'], $username['Password'])) {
 //            $_SESSION['User_Name'] = $username;


              //while ($row = $result->fetch_assoc()) {
              //$userType = $row['User_Type']; // here, mail repeated, actually one result will be for one mail.. 
                }

			//$_SESSION['User_Type'] = $username;

              // and, u dont need user type dropdown in login form,,, because even an employye can select admin option and login to admin page.. so,, you should chk user type at above mention p lace,, 
            //you should create 3 different pages for each type.
              
            //if($username['User_Type'] == 'admin'){
              //redirect to admin page
              //header("location:entry.php");  

           // } elseif($username['User_Type'] == 'client'){
              //redirect to client page
              //header("location:entry.php");  

            //}elseif($username['User_Type'] == 'employee'){
              //redirect to employee page
              //header("location:entry.php");  

           // }
                
           
           //else  
           //{  
               // echo '<script>alert("Wrong User Details")</script>';  
           //}  
      }  
 }  
*/
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Sign UP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           
         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <style>
  
        * {
          box-sizing: border-box;
        }
        .row::after {
          content: "";
          clear: both;
          display: table;
        }
        [class*="col-"] {
          float: left;
          padding: 15px;
        }
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
        
        /* Create four equal columns that floats next to each other */
          .column {
            float: left;
            width: 25%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */
          }

          /* Clear floats after the columns */
          .row:after {
            content: "";
            display: table;
            clear: both;
          }
          input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          }

          input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }

          input[type=submit]:hover {
            background-color: #45a049;
          }
          
          a:link {
          color: black;
          background-color: transparent;
          text-decoration: none;
        }
        
        a:hover {
          color: black;
          background-color: transparent;
          text-decoration: none;
        }

        a:active {
          color: black;
          background-color: transparent;
          text-decoration: none;
        }
  </style>

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Welcome to camrix</h3>  
                <br />  
                <?php               
                if(!isset($_GET["action"]))  
                {  
                ?>  
                 
                <br />  
        
               
                <script >
                /*  var password = document.getElementById("password")
  , cpassword = document.getElementById("c_password");

function validatePassword(){
  if(password.value != cpassword.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
*/
                </script>
                <h3 align="center">Register</h3>  
                
                <form method="post" action="r.php">  
                      <label> First Name</label>  
                      <input type="text" name="fname" required class="form-control" placeholder="Enter your First Name" />  
                      <br />  
                      <br />  
                      <label>Last Name</label>  
                      <input type="text" name="lname" class="form-control" placeholder="Enter your Last Name" />  
                      <br />  
                      <br /> 
                     <label>Username</label>  
                     <input type="text" name="username" required class="form-control" placeholder="Enter your Username" />  
                     <br />  
                     <label>Email</label>  
                     <input type="email" name="email" required class="form-control" placeholder="Enter your Email Addres" />  
                     <br />  
                         <label>Phone No</label>  
                     <input type="tel" name="pno"  pattern="[0-9]{10}" required  class="form-control" placeholder="Enter your Phone No" />  
                     <br /> 
                     <label>Enter Password</label>  
                     <input type="password" name="password"  required class="form-control" placeholder="Enter your password" />  
                     <br />
                     
                      <label>confirm Password</label>  
                     <input type="password" name="cpassword"  required class="form-control" placeholder="confirm your password" />  
                     <br />
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="entry.php">Login</a></p>  
                </form>  
                <?php
                }
                else if($_GET["action"] == "forgetPassword"){
                  //echo "string"; die();
                  ?>

                  <h3 align="center">Recover Account</h3>  
                
                <form method="post" >  
                      <label>Enter Your Registered Email</label>  
                      <input type="text" name="mail" class="form-control" />  
                      <br />  
                      <br />  
                      
                     <input type="submit" name="forgetPassword" value="Send me recover Link" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="r.php">Login</a></p>  
                </form> 

                  <?php
                }  
                ?> 
                </div>
                <div class="col-12" style="background-color:gray;height:200px;padding:1px">

      <div class="row">

        <div class="col-4 footer" align="center">
          <table>
            <tr style="height:50px">
            <td>

            No 12, Ridgeway place Colombo 04
            </td>
            </tr>
            
            <tr style="height:70px">
            <td>

            011-2547658
            </td>
            </tr>
            
            <tr>
            <td>

            www.cameraxis@gmail.com
            </td>
            </tr>
          </table>
        </div>

        
        <div class="col-4 footer" align="center-left">
          <a href="https://www.facebook.com/cameraxis/"><img src="Home/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
          <a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Home/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
          <a href="https://plus.google.com/+Cameraxis"><img src="Home/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
          <a href="https://twitter.com/cameraxis"><img src="Home/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
        </div>
        
        <div class="col-4 footer" align="center" style="height:200px">
          <a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Home/map.png" style="height:100%;width:80%"></a>
        </div>

      </div>
    
    </div>

 
           </div>  
      </body>  
 </html>  
