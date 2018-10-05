<?php session_start();
unset($_SESSION['username']);
if(session_destroy()) // Destroying All Sessions
{
header("location:../login_admin/index.html"); // Redirecting To Home Page
}
?>
 
