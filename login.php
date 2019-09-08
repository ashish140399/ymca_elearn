<?php 
	$email = $password = "";
	$emailErr = $passwordErr ="";
	 if (isset($_POST['login_btn'])) {
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	
			if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			} else {
			    $email = test_input($_POST["email"]);
			}

			if (empty($_POST["password"])) {
			    $passwordErr = "Password is required";
			} else {
			   $password = test_input($_POST["password"]);
			}
			if (empty($emailErr) && empty($passwordErr)) {
				$sql = "SELECT id,username,password FROM userinfo WHERE email = '$email'";
			    $result = mysqli_query($con,$sql);
			    $row = mysqli_fetch_array($result);  
			    $count = mysqli_num_rows($result);
			    $checkpassword = $row['password'];
			    $_SESSION["username"] = $row['username'];
			      if($count == 1 && ($checkpassword == $password)) {
			         header("location: home.php");

			      }else {
			         $incorrectloginerror = "Your Login Name or Password is invalid";
			      }
			}
		}
    }
 ?>