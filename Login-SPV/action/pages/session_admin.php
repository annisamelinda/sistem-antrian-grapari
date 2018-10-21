<?php

include 'db.php';

session_start();

$user_check=$_SESSION['login_user_admin'];

$query =  "select * from supervisor where NIK='$user_check'";
$sql = mysqli_query($mysql, $query);

while ($hasil = mysqli_fetch_array ($sql)) 
{

	$login_session = stripslashes ($hasil['NIK']);
	$NIK = stripslashes ($hasil['NIK']);
	$nama = stripslashes ($hasil['nama']);
}

if(!isset($login_session))
	
{
	mysqli_close($mysql); 
	header('Location: index.php');
}

?>
