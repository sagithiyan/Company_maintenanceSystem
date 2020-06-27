<!DOCTYPE html>
<html>
	<head>
	
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
				
				a:hover {
					color: black;
					background-color: transparent;
				}

				a:active {
					color: black;
					background-color: transparent;
				}
				
				* {
				box-sizing: border-box;
				}
				
				.mySlides {
				display: none;
				}
				
				img {
				vertical-align: middle;
				width:80%;
				height:;	
				}

				
				/* Number text (1/5) */
				.numbertext {
					color: #f2f2f2;
					font-size: 15px;
					padding: 10px 15px;
					position: absolute;
					top: 0;
				}

				.footer ul {
					list-style-type: none;
					margin: 0;
					padding: 0;
				}
				
				.footer li {
					padding: 8px;
					margin-bottom: 7px;
					color: black;
				}
				
				/* Create two equal columns that floats next to each other */
				.column {
					float: left;
					width: 50%;
					padding: 10px;
				}

				.column img {
					margin-top: 12px;
				}
				
				.photo{
					margin:0;
					line-height:0.5px;
				}
				
				.text{
					margin:0px;
					padding:1px;
					line-height:80px;
				}
		</style>
	</head>
	
	<body>

		<div class="row">

			<div class="col-1">
			</div>

			<div class="col-2" align="center" >
			<a href="aboutus.php">ABOUT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="services.php">SERVICES</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="contactus.php">CONTACT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="login.php">LOGIN</a>
			</div>
			
			<div class="col-1">
			</div>

		</div>
		
		<div class="col-12 photo">
			<img src="Services/photo.jpg" style="height:500px;width:100%">
		</div>
		
		<div class="col-12 text">
			<h1 Style="background-color:gray" align="center">OUR SERVICES</h1>
		</div>
		
		<div class="col-12 photo">
			<div class="col-1">
			</div>
			<div class="col-2">
				<a href="#title1"><img src="Services/icon3.png" style="height:80px;width:80%">
				<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Typhography</h4></a>
				
			</div>
			<div class="col-2">
				<a href="#title2"><img src="Services/icon6.png" style="height:80px;width:80%">
				<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invitation</h4></a>
			</div>
			<div class="col-2">
				<a href="#title3"><img src="Services/icon1.png" style="height:80px;width:80%">
				<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner</h4></a>
			</div>
			<div class="col-2">
				<a href="#title4"><img src="Services/icon4.png" style="height:80px;width:80%">
				<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding</h4></a>
			</div>
			<div class="col-2">
				<a href="#title5"><img src="Services/icon5.png" style="height:80px;width:80%">
				<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Christmas</h4></a>
			</div>
			<div class="col-1">
			</div>
		</div>
		<div class="col-12 text" id="title1">
			<h1 Style="background-color:gray" align="center">Typhography</h1>

			<div class="column">
				<img src="Services/photo7.jpg" style="width:100%">
				<img src="Services/photo10.jpg" style="width:100%">
				
			</div>
			<div class="column">	
				<img src="Services/photo9.jpg" style="width:100%">
				<img src="Services/photo_11.jpg" style="width:100%">
			</div> 
		</div>
			
			
		<div class="col-12 text" id="title2">
			<h1 Style="background-color:gray" align="center">Invitation</h1>
		
			<div class="column">
				<img src="Services/photo11.jpg" style="width:100%">
				<img src="Services/photo12.jpg" style="width:100%">
				<img src="Services/photo15.jpg" style="width:100%">
				</div>
			<div class="column">
				<img src="Services/photo13.jpg" style="width:100%">
				<img src="Services/photo14.jpg" style="width:100%">
			</div>
		</div>
			
		<div class="col-12 text" id="title3">
			<h1 Style="background-color:gray" align="center">Banner</h1>
		
			<div class="column">
				<img src="Services/photo_1.jpg" style="width:100%">
				<img src="Services/photo_2.jpg" style="width:100%">
				</div>
			<div class="column">
				<img src="Services/photo_3.jpg" style="width:100%">
				<img src="Services/photo_4.jpg" style="width:100%">
			</div>
		</div>
		<div class="col-12 text" id="title4">
			<h1 Style="background-color:gray" align="center">Wedding</h1>
		
			<div class="column">
				<img src="Services/we1.jpg" style="width:100%">
				<img src="Services/we2.jpg" style="width:100%">
				<img src="Services/we5.jpg" style="width:100%">
				</div>
			<div class="column">
				<img src="Services/we3.jpg" style="width:100%">
				<img src="Services/we4.jpg" style="width:100%">
			</div>
		</div>
		<div class="col-12 text" id="title5">
			<h1 Style="background-color:gray" align="center">Christmas</h1>
		
			<div class="column">
				<img src="Services/photo1.jpg" style="width:100%">
				<img src="Services/photo2.jpg" style="width:100%">
				<img src="Services/photo5.jpg" style="width:100%">
				</div>
			<div class="column">
				<img src="Services/photo3.jpg" style="width:100%">
				<img src="Services/photo4.jpg" style="width:100%">
			</div>
		</div>

		<div class="col-12" style="background-color:gray;height:200px;padding:1px">

			<div class="row">

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
	
		</div>

	</body>
</html>