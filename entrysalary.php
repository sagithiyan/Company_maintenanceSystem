<?php
include 'server.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Salary Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
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
    
        .header {
            color: #ffffff;
            padding: 15px;
            font-size:25px;
        }
        
        input[type=text],
            input[type=number],
            input[type=date],select {
                        width: 60%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }

                    input[type=submit],input[type=reset] {
                        width: 40%;
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
                .footer{
            background-color:#aaaa55;
        }
      

        body{
            /*background-image: url("Administrator/grey.jpg");
            opacity:0.8;*/
            background-color:#cecdce;
        }
        .footer{
            background-color:#aaaa55;
        }
        
        .div2{
            background-color:#aaaa55;
            font-style: italic;
            font-size: 14px;
            color:black;
            font-weight:bold;
        }

        button{
                        width: 40%;
                        /*padding: 12px 20px;
                        /*margin: 8px 0;
                        /*display: block;
                        /*border: 1px solid #ccc;*/
                        border-radius: 4px;
                        /*box-sizing: border-box;*/
                    }

                    .cancelbtn{
        background-color: white;
        border: none;
        border-radius: none;
    }
    .Rate{
        width: 40%;
    }
        
    </style>
    <body>
        <div class="header1">

            <div class="col-1">
                        <a href="Administrator.php"><img src="Administrator/admin.png" style="height:30%;width:30%"></a>
                        </div>

            <div class="col-2" align="center" >
            <a href="staffdetails.php">STAFF DETAILS</a>
            </div>
            <div class="col-2" align="center">
            <a href="leavedetails.php">LEAVE DETAILS</a>
            </div>
            <div class="col-2" align="center">
            <a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
            </div>
            <div class="col-2" align="center">
            <a href="adminviewtask.php">TASK DETAILS</a>
            </div>
            <div class="col-2" align="center">
            <a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
            </div>
            
            <div class="col-1">
            </div>
    </div>
     <div class="col-12">
       
             <h1 style="text-align: center;"> Salary Calculation </h1>
         
       
     </div>
        <div class="row">
       <div class="col-10">
           <form action="salary.php" method="GET">
            <div>
		<fieldset>
	
                         
                Employee ID  :    	<input type="text" name="emp_Id" id="emp_Id"><br>

              
                </fieldset>
        </div>

        <div class="col-7">
            <fieldset>
		
                         <h2 style="text-align: center;">Gross Salary</h2> <br>
	Basic Salary(Rs)	:<input type="text" name="basic_Salary" id="basic_Salary"><br>

	Rate_5              :<input type="text" name="Rate5" id="Rate"> 
    Rate_4             :<input type="text" name="Rate4" id="Rate"> 
    Rate_3              :<input type="text" name="Rate3" id="Rate">
    Rate_2              :<input type="text" name="Rate2" id="Rate"> <br>
  
                           	
            </fieldset>
       
	</div>
	<div class="col-4">
         <fieldset>
	
                        <h2 style="text-align: center;">Deductions</h2> <br>

		Loan(Rs)		:<input type="text" name="loan" id="loan"> 
                     
		</fieldset>       
        </div>
		
	<div class="col-4">
            <fieldset>	
                <br>
                        
                        <input type="submit" value="Calculate All" class="btn btn-success"><input type="reset" value="Clear"  class="btn btn-danger">
                       
                    </fieldset>
                </div>
 
                </form>
             </div>
    </div>   
        
     
    </body>
</html>


