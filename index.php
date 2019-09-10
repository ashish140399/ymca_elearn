<?php 
session_start();
include 'config.php';
include 'signup.php';
include 'login.php';
include 'mail.php';
include 'logout.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>YMCA E-Learning</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style/style.css?ver=1.0">
  	<!-- bootstrap 4-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
</head>
<script>
		$(window).on('load',(function(){$(".loader").fadeOut("slow");}));
	</script>
<body style="background: linear-gradient(to right,  #e3e0cf 0%,#e3e0cf 50%,#fff 50%,#fff 100%);">
	<div class="loader"><div class="rotae"></div></div>
	<div class="container-fluid">
		<div class="university_logo">
			<img src="images/logo.png">
		</div>
		<div class="row">
			<div class="col-6 uni_h_left pr-5">
				YMCA
			</div>
			<div class="col-6 uni_h_right pl-5">
				E-learning
			</div>
		</div>
		<div class="middle_box_effect">
			<div class="row">
				<div class="col-sm-6">
					<div id="container" >
					  Find 
					  <div id="flip">
					    <div><div>Everything</div></div>
					    <div><div>Exam papers </div></div>
					    <div><div>Books</div></div>
					  </div>
					  Here!
					</div>
					<div class="website_info" >
						YMCA E-Learning is a new initiative taken by a student to solve the problem of college students that they face every year regarding the previous year exam papers and they can find topics that are not covered in the books. Students can come and find there solutions here which were uploaded by other students of different years to help other students.We might not gurantee that you will find here what you are searching but we will always try our best.
						Please <b><a class="info_login" style="color: #00539C;">Log in</a></b> to enter site. <br>	
						And if you are new please <b><a class="info_signup" style="color: #00539C;">Sign Up</a></b>
					</div>
				</div> 
				<div class="col-sm-6">
					<div style="margin: 10% 13%; border:2px solid #fff; border-radius: 10px;">
						<div class="user_login_img">
							<img src="images/login3.png">
						</div>
						<!------------SIGNUP------------------>
						<form  action="index.php" class="form_signup" method="post">
							<div class="d-flex justify-content-start my-2"  style="width: 100%">
								<input class="form-control mr-2" type="text" name="firstname"  placeholder="First name" required>
								<input class="form-control " type="text" name="lastname" placeholder="Last name" >
							</div>
							<div class="d-flex justify-content-start my-2"  style="width: 100%">
								<input class="form-control mr-2" type="text" name="coursename" style="" placeholder="Course" required>
								<input class="form-control " type="text" name="streamname" placeholder="Stream" required>
							</div>
							<div style="width: 100%">
								<input class="form-control my-2" type="text" name="rollno" placeholder="Roll no." required>
								<input class="form-control my-2" type="email" name="email" placeholder="Email" required>					
								<input class="form-control my-2" type="password" name="password" placeholder="Password" required>
								<input class="form-control my-2" type="password" name="cnfrmpassword" placeholder="Confirm Password" required>
								<div style="color: red;"><?php echo $pswrddntmatch?></div>
								<div style="color: red;"><?php echo $email_already_registered?></div>
								<div style="color: red;"><?php echo $incorrectloginerror?></div>
								<div style="color: green;"><?php echo $signup_done ?></div>
							</div>
							<div style="text-align: center;">	
								<button type="submit" name="signup_btn" class="btn  btn-outline-info mt-2 mb-3">Sign Up</button>
							</div>
						</form>
						<form  action="index.php" class="form_login" method="post">
							<div style="width: 100%">
								<input class="form-control my-2" type="email" name="email" placeholder="Email" >
								<input class="form-control my-2" type="password" name="password" placeholder="Password" >
							</div>
							<div><a class="forgot_password" name="forgot_password_clk" >Forgot password ?</a></div>
							<!--div class="forgot_passwordinfo">If you have lost your password please send mail at <b>ashish140399@gmail.com</b></div-->
							<div style="text-align: center;">	
								<button type="submit" class="btn  btn-outline-info mt-2 mb-3" name="login_btn">Log In</button>
							</div>
						</form>
						<form  action="index.php" class="form_forgot_password" method="post">
							<div style="width: 100%">
								<input class="form-control my-2" type="email" name="email" placeholder="Enter your Email" >
							</div>
							<div class="forgot_passwordinfo">Enter you registered email above and We will send your password to your registered E-mail address shortly</div>
							<div style="text-align: center;">	
								<button type="submit" class="btn  btn-outline-info mt-2 mb-3"  name="forgot_password_clk">Send</button>
							</div>
						</form>
						<div style="color: green;margin: 0% 6% 1% 6%;"><?php echo $mail_confirmation ?></div>
					</div>
				</div>
			</div>
		</div>	
	</div>

<script>
	$(".info_login").click(function(){
		$(".form_signup").hide();
		$(".form_login").show();
	});
	$(".info_signup").click(function(){
		$(".form_signup").show();
		$(".form_login").hide();
	});
	$(".forgot_password").click(function(){
		$(".form_forgot_password").show();
		$(".form_signup").hide();
		$(".form_login").hide();
	});
</script>
</body>
</html>