<?php 
session_start();
include 'config.php';
include 'signup.php';
include 'login.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" type="text/css" href="style.css">
  	<!-- bootstrap 4-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style2.css">
  	<script src="https://kit.fontawesome.com/17b5c44e80.js"></script>
</head>
<body style="background-color: #f8f8f8">
	<nav class="navbar navbar-expand-sm d-flex justify-content-between" style="background-color: #c5d5cb;padding: 0.3em 5%;">
	  <!-- Brand/logo -->
	  <a class="navbar-brand" href="#" style="color: #fff;"><img src="logo.png" style="width: 2em;height: 2em;margin-right: 10px"><span>YMCA E-Learning</span></a>
	  
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="#" style="display: inline-block;">Hello, <?php echo $_SESSION["username"]; ?>
	      </a>
	      <img src="login3.png" style="width: 2.5em;height: 2.5em;border-radius: 50%;">
	    </li>
	  </ul>
	</nav>
	<div>
		<div style="background-color:#E8E8E8;padding: 0.5% 5%;">
			You are here :
		</div>
		<div style="padding: 2% 6%;">
			<div  class="loadingcontainer_home">
				<div class="row">
					<div class="col-sm-3">
						<div class="folder_box folder_box1">
							<i class="fas fa-folder-open"></i><span style="margin-left: 8px;">B.Tech</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="folder_box">
							<i class="fas fa-folder-open"></i><span style="margin-left: 8px;">B.Sc</span>
						</div>
					</div>
					<div class="col-sm-3">
							
					</div>
					<div class="col-sm-3">
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(){
  $(".folder_box1").click(function(){
    $(".loadingcontainer_home").load("B.tech.html");
  });
});
</script>


</body>
</html>