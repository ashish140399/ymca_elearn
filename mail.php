<?php 
    $mail_confirmation="";

if (isset($_POST['forgot_password_clk'])) {
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$sql = "SELECT id,username,password FROM userinfo WHERE email = '$email'";
	    $result = mysqli_query($con,$sql);
	    $row = mysqli_fetch_array($result);  
	    $count = mysqli_num_rows($result);
	    $checkpassword = $row['password'];
	    $_SESSION["username"] = $row['username'];
	    $useremail = $row['email'];
	    
		
		$msg='Hello,'.$_SESSION["username"]."\n"
			.'Password for your registered email id'.$useremail."\n"
			.'is<b>'.$checkpassword.'</b>';
		mail($useremail, 'Forgot Password', $msg);
		$mail_confirmation='Mail sent. Please check your email address : )';
	}
}
 ?>