<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center"></h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                  
                ?>  
                <div class="row">
     <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <li class="active"><a href="#">Home</a></li>&nbsp &nbsp
          </li>
          <li class="nav navbar-nav">
            
       <li><a href="task.html">Task</a></li>&nbsp &nbsp
          </li>
          <li class="nav navbar-nav">
            
       <li><a href="view.php">Submission</a></li>&nbsp &nbsp
          </li> 
          <li class="nav-item">
            
       <li><a href="">Feedback</a></li>
          </li>
        </ul>
li><a href="">Feedback</a></li>
          </li>
        </ul>
                <nav><a href="logout.php">Logout</a></nav> 
              
    </ul>
    </div>  
           </div>  
      </body>  
 </html>  