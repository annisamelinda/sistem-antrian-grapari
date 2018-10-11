<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
error_reporting(0);
ini_set('display_errors', 0);

require 'db.php'; 
// menangkap data yang dikirim dari form
if(isset($_GET["nomor_register"]))
{


ini_set('date.timezone', 'Asia/Jakarta');

$time_set = date("Y-m-d H:i");

$nomor_register = $_GET["nomor_register"];


	$sql_view_status="SELECT id_customer, nomor_register, status_antrian FROM antrian where nomor_register ='$nomor_register'";

	$result_status_antrian=mysqli_query($con,$sql_view_status);

		// Associative array
	$row=mysqli_fetch_assoc($result_status_antrian);
		
		// Free result set
	mysqli_free_result($result_status_antrian);
	
	$status_antrian = $row["status_antrian"];


	if($status_antrian=='menunggu')
	{
		$update_status_antrian = mysqli_query($con, "update antrian set status_antrian = 'diproses' where nomor_register='$nomor_register'");

		if($update_status_antrian)
		{
		header("refresh:1.5;dashboard.php");			
		}
		else
		{
			echo "Gagal update status antrian";
		}

	}

	else if ($status_antrian=='diproses') 
	{
		$update_status_antrian = mysqli_query($con, "update antrian set status_antrian = 'selesai' where nomor_register='$nomor_register'");
		if($update_status_antrian)
		{
		header("refresh:1.5;dashboard.php");			
		}
		else
		{
			echo "Gagal update status antrian";
		}
	}

	else
	{
		echo "Tidak ada status";
	}
}

else
{	
	echo "Tidak ada parameter";
}
?>