<?php

session_start();

include 'db.php';


$error=''; 
if (isset($_POST['submit'])) 

{
 

	if (empty($_POST['NIK']) || empty($_POST['nama'])) 

	{
	
		$error = "NIK or Nama is invalid";
	
	}


	else
	{

		$NIK=$_POST['NIK'];
		$nama=$_POST['nama'];

		$NIK = stripslashes($NIK);
		$nama = stripslashes($nama);
		$NIK = mysqli_real_escape_string($mysql,$NIK);
		$nama = mysqli_real_escape_string($mysql,$nama);



		$query = mysqli_query($mysql, "SELECT *from supervisor where NIK='$NIK' AND nama='$nama'");

		$rows = mysqli_num_rows($query);

		 if ($rows== 1) 
		 
		 {
			setcookie("NIK", $NIK, time()+3600);
			$_SESSION['login_user_admin']=$NIK;
			header("location: dashboard.php");
		 }	 

		 else
		 {
			echo "<script language='javascript'>alert('NIK atau Nama salah !'); document.location='index.php'</script>";
		 }


	}

//mysql_close($mysql); 

}
?>