<?php

error_reporting(0);
ini_set('display_errors', 0);

require 'db.php';

if(isset($_POST["submit"]))
{

	$NIK = $_POST['NIK'];
	$nama = $_POST['nama'];
	$no_loket = $_POST['no_loket'];

	$NIK = stripslashes($NIK);
	$nama = stripslashes($nama);
	$NIK = mysqli_real_escape_string($con,$NIK);
	$nama = mysqli_real_escape_string($con,$nama);



	$query = mysqli_query($con, "SELECT *from petugas where NIK='$NIK' AND nama='$nama'");

	$rows = mysqli_num_rows($query);

	 if ($rows== 1) 
	 
	 {

			$query_cs = mysqli_query($con, "update pelayanan_loket set status_loket = 1, NIK='$NIK' where no_loket='$no_loket'");

			if($query_cs)

			{
				setcookie("NIK", $NIK, time()+3600);
				$_SESSION['login_petugas_NIK']=$NIK;
				header("location: index.php");
			}

			else
			{
				echo "gagal update pelayanan";
			}


	 }	 

	 else
	 {
	 	echo "Empty !";
	 }

}

?>
