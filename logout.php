<?php 
if (isset($_POST['signoutpage'])) {
	header("location: index.php");
	unset($_SESSION['username']);
	session_destroy();
	exit;
}
 ?>