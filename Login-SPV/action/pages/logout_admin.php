<?php 
	session_start();
	unset($_SESSION['NIK']);
	if(session_destroy()) // Destroying All Sessions
	{
	header("location:index.php"); // Redirecting To Home Page
	}
?>
 
