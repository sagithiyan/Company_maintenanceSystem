<?php
//index.php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	if(empty($_POST["subject"]))
	{
		$error .= '<p><label class="text-danger">Subject is required</label></p>';
	}
	else
	{
		$subject = clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								
		$mail->Host = 'smtp.gmail.com';		
		$mail->Port = '25';								
		$mail->SMTPAuth = true;							 
		$mail->Username = 'sagithiyannagendran@gmail.com';					
		$mail->Password = 'nagendransaginagendran';					
		$mail->SMTPSecure = 'tls';						
		$mail->From = $_POST["email"];					
		$mail->FromName = $_POST["name"];				
		$mail->AddAddress('sagithiyannagendran@gmail.com', 'sachin');		
		$mail->AddCC($_POST["email"], $_POST["name"]);	
		$mail->WordWrap = 50;							
		$mail->IsHTML(true);									
		$mail->Subject = $_POST["subject"];				
		$mail->Body = $_POST["message"];				
		if($mail->Send())								
		{
			$error = '<label class="text-success"><b>Thank you for contacting us</b></label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<br />
			 <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <h1><i class="fa fa-commenting-o" style="font-size:100px"></i></br>Contact us</h1>
                                    <p class="m-0">Getting in touch is easy...!!</p>
                                   
                                </div>
					<h3 align="center"></h3>
					<br />
					<?php echo $error; ?>
					<form method="post">
						<div class="form-group">
							<label><b> Name</b></label>
							<input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $name; ?>" />
						</div>
						<div class="form-group">
							<label><b>Email Address</b></label>
							<input type="text" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?php echo $email; ?>" />
						</div>
						<div class="form-group">
							<label><b>Subject</b></label>
							<input type="text" name="subject" class="form-control" placeholder="Enter your Subject" value="<?php echo $subject; ?>" />
						</div>
						<div class="form-group">
							<label><b>Message</b></label>
							<textarea rows="7" cols="100"name="message" class="form-control" placeholder="Enter your Message"><?php echo $message; ?></textarea>
						</div>
						<div class="form-group" align="center">
							<input type="submit" name="submit" value="Submit" class="btn btn-info" />
						</div>
					</form>
				</div>
			</div>
		</div>

		
		
		</div>
	</div>
	</body>
</html>





