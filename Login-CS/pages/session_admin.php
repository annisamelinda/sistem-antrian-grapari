<?php

include '../connection.php';

session_start();

$user_check=$_SESSION['login_user_admin'];

$query =  "select * from admin where username='$user_check'";
$sql = mysqli_query($mysql, $query);

while ($hasil = mysqli_fetch_array ($sql)) 
{

	$id_admin = $hasil['id_admin'];
	$login_session = stripslashes ($hasil['username']);
	$username = stripslashes ($hasil['username']);
	$password = stripslashes ($hasil['password']);
}

if(!isset($login_session))
	
{
	mysqli_close($mysql); 
	header('Location: localhost/NandanWedding/login_admin/index.html');
}

?>
