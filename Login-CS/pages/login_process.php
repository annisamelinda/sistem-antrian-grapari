<?php

session_start();

include 'connection.php';


$error=''; 
if (isset($_POST['login'])) 

{
 

if (empty($_POST['username']) || empty($_POST['password'])) 

{
$error = "Username or Password is invalid";
}


else
{

$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($mysql,$username);
$password = mysqli_real_escape_string($mysql,$password);



$query = mysqli_query($mysql, "SELECT *from admin where password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);

 if ($rows== 1) 
 
 {
setcookie("username", $username, time()+3600);
$_SESSION['login_user_admin']=$username;
header("location: tables.php");
 
 }	 

 else
 {
 	echo "Eror";
 }


}

//mysql_close($mysql); 

}
?>