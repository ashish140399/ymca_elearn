<?php 
 // define variables and set to empty values
    $firstname = $email = $lastname = $course = $stream = $rollno = $password = $cnfrmpassword  = $username = $pswrddntmatch = $incorrectloginerror= "";
    $firstnameErr = $emailErr = $courseErr = $streamErr = $rollnoErr = $passwordErr = $cnfrmpasswordErr = $email_already_registered  = "";
    if (isset($_POST['signup_btn'])) {
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	if (empty($_POST["firstname"])) {
			    $firstnameErr = "Name is required";
			} else {
			    $firstname = test_input($_POST["firstname"]);
			}

			if (empty($_POST["lastname"])) {
			  	$lastname = "";
			} else {
			    $lastname = test_input($_POST["lastname"]);
			}

			if (empty($_POST["coursename"])) {
			    $courseErr = "Course name is required";
			} else {
			    $course = test_input($_POST["coursename"]);
			}

			if (empty($_POST["streamname"])) {
			    $streamErr = "Stream is required";
			} else {
			     $stream = test_input($_POST["streamname"]);
			}

			if (empty($_POST["rollno"])) {
			    $rollnoErr = "Name is required";
			} else {
			    $rollno = test_input($_POST["rollno"]);
			}

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

			if (empty($_POST["cnfrmpassword"])) {
			    $cnfrmpasswordErr = "Please confirm password";
			} else {
			    $cnfrmpassword = test_input($_POST["cnfrmpassword"]);  
			}  
			if($password == $cnfrmpassword){
				$pswrddntmatch="";
			}
			else{
				$pswrddntmatch = "> Passwords do not match";
			}

			$sql = "SELECT id FROM userinfo WHERE email = '$email'";
			$result = mysqli_query($con,$sql); 	  
			$count = mysqli_num_rows($result);  
			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count == 1) {
				$email_already_registered = "> This email is already registered. Please log in";			    
			}
			if (empty($firstnameErr) && empty($courseErr) && empty($streamErr) && empty($rollnoErr) && empty($emailErr) && empty($cnfrmpasswordErr) && empty($passwordErr) && empty($pswrddntmatch) && empty($email_already_registered)) {
					$username=$firstname." ".$lastname;
					$sql = "INSERT INTO userinfo (username, rollno, email, password, course, stream)
					VALUES ('$username', '$rollno', '$email', '$password', '$course', '$stream')";
					mysqli_query($con, $sql);	
					header('location:index.php');
				
			}
		}
    }

?>