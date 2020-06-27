<!DOCTYPE html>
<html>
	<head>
		<title> Message </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			
		a:link {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:visited {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:hover {
				color:black;
				background-color: transparent;
				text-decoration: none;
			}

			a:active {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
		
		.button {
			background-color:#555555; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 100px;
			cursor: pointer;
			
		
		}
			.footer{
			background-color:#aaaa55;
		}
		
		</style>
	</head>
	
	<body>

	<div class="header1">

			<div class="col-1">
			<a href="administrator.php"><img src="Administrator/admin.png" style="height:30%;width:30%"></a>
			</div>

			<div class="col-2" align="center" >
			<a href="staffdetails.php">STAFF DETAIL</a>
			</div>
			<div class="col-2" align="center">
			<a href="leavedetails.php">LEAVE APPLICATION</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="givetask.php">GIVE TASK </a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php">LOGOUT</a>
			</div>
					
			<div class="col-1">
			</div>

		</div>
		
		<div class="div1">
			<div class="div1 col-8">
				<button class = "button"> Select All</button>
				<button class = "button"> Select Staff </button>
			</div>
			<div class="div1 col-4">
			</div>
		</div>
			<div class="div1 col-12">
			<div class="form col-3">
			<form >
			Message  : <br> 
			<textarea name="comments" rows="5" cols="30">
			</textarea>
			</div>
			<div class="form col-3">
			<button class = "button"> Send </button>
			<button class = "button"> Delete </button>
			</form> 
			</div>
			<div class="div1 col-6">
			<img src="Administrator/nfgl2016_12-1650x1100.jpg" style="width:100%;height:270px;">
			</div>
			</div>

			<div class="footer col-12">
		<div class="col-4 footer" align="center">
			<table>
				<tr style="height:50px">
				<td>
				<img src="Header & Footer/62516.png" style="height:5%;width:5%">
				No 12, Ridgeway place Colombo 04
				</td>
				</tr>
					
				<tr style="height:70px">
				<td>
				<img src="Header & Footer/img_286083.png" style="height:5%;width:5%">
				011-2547658
				</td>
				</tr>
					
				<tr>
				<td>
				<img src="Header & Footer/email.png" style="height:5%;width:5%">
				www.cameraxis@gmail.com
				</td>
				</tr>
			</table>
		</div>
			
		<div class="col-4 footer" align="center-left">
			<a href="https://www.facebook.com/cameraxis/"><img src="Header & Footer/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Header & Footer/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
			<a href="https://plus.google.com/+Cameraxis"><img src="Header & Footer/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://twitter.com/cameraxis"><img src="Header & Footer/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
		</div>
			
		<div class="col-4 footer" align="center" style="height:200px">
			<a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Header & Footer/map.png" style="height:100%;width:80%"></a>
		</div>

	</div>
	</body>
</html>