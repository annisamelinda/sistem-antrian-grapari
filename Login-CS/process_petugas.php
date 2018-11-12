<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
error_reporting(0);
ini_set('display_errors', 0);

require 'db.php'; 
// menangkap data yang dikirim dari form
if(isset($_POST["submit"]))
{


ini_set('date.timezone', 'Asia/Jakarta');

$time_set = date("Y-m-d H:i");

	$NIK = $_POST['NIK'];
	$nama = $_POST['nama'];
	$no_loket = $_POST['no_loket'];

	$NIK = stripslashes($NIK);
	$nama = stripslashes($nama);
	$NIK = mysqli_real_escape_string($con,$NIK);
	$nama = mysqli_real_escape_string($con,$nama);


	// menyeleksi data admin dengan username dan password yang sesuai
	$query = mysqli_query($con, "SELECT *from petugas where NIK='$NIK' AND nama='$nama'");
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($query);
	 
	if($cek > 0)
	{


	$cek_tugas = mysqli_query($con, "SELECT *from pelayanan_loket where NIK='$NIK' AND status_loket='1'");
	$cek_tugas_exec = mysqli_num_rows($cek_tugas);

		if($cek_tugas_exec>0)
		{
			    echo "Silahkan logout dari Loket anda sebelumnya";
				header("refresh:1.5;index.php");
		}

		else
		{
			$query =  "select NIK,nama from petugas where NIK='$NIK'";
			$sql = mysqli_query ($con, $query);
			while ($hasil = mysqli_fetch_array ($sql)) 
			{
			$NIK = $hasil['NIK'];
			$nama = stripslashes ($hasil['nama']);

			}
			$_SESSION['NIK'] = $NIK;
			$_SESSION['nama'] = $nama;
			/*$_SESSION['agama'] = $agama;
			$_SESSION['alamat'] = $alamat;
			$_SESSION['jenis_kelamin'] = $jenis_kelamin;
			$_SESSION['status'] = $status;
			$_SESSION['golongan_darah'] = $golongan_darah;
			$_SESSION['tinggi_badan'] = $tinggi_badan;*/
			$_SESSION['status_account'] = "login";
			$query_cs = mysqli_query($con, "update pelayanan_loket set status_loket = 1, access_time='$time_set', NIK='$NIK' where no_loket='$no_loket'");
			header("location:dashboard.php");		
		}

	}
	
	else
	{
    echo "Gagal login. ID petugas untuk akses dashboard salah !";
	header("refresh:1.5;index.php");
	}
}
?>