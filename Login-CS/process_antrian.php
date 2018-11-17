<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
error_reporting(0);
ini_set('display_errors', 0);

require 'db.php'; 
// menangkap data yang dikirim dari form

ini_set('date.timezone', 'Asia/Jakarta');

$waktu_akhir = date("H:i:s");
$akhir  = strtotime($waktu_akhir);
//$awal = strtotime($waktu_akhir);
$session_NIK = $_SESSION['NIK'];


if(isset($_GET["antrian"]) AND isset($_GET["no_loket"]))
{

$get_loket = $_GET["no_loket"];

$get_nomor_antrian_terbaru = $_GET["nomor_antrian"];

$get_nomor_antrian_terbaru_old = $_GET["nomor_antrian_old"];

$status_next = 'next';

$status_mulai_proses = 'proses';


$sql_jam_order="SELECT jam_diproses FROM antrian where nomor_antrian ='$get_nomor_antrian_terbaru_old'";

$result_jam_order=mysqli_query($con,$sql_jam_order);

// Associative array
$row_jam_order=mysqli_fetch_assoc($result_jam_order);
		
// Free result set
mysqli_free_result($result_jam_order);

$jam_order_pertama = $row_jam_order["jam_diproses"];


$awal  = strtotime($jam_order_pertama);	

$diff  = $akhir - $awal;
$jam   = floor($diff / (60 * 60));
$menit = $diff - $jam * (60 * 60);
$time_duration = $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';


	if($_GET["antrian"]==$status_next)
		
	{

		if(!empty($get_nomor_antrian_terbaru))

		{
				$query_nomor_sebelumnya = mysqli_query($con, "update antrian set status_antrian = 'selesai', jam_selesai='$waktu_akhir', NIK='$session_NIK', durasi='$time_duration' where status_antrian ='diproses' AND no_loket='$get_loket'");		

				$query_akhiran = mysqli_query($con, "update antrian set status_antrian = 'diproses' where nomor_antrian = '$get_nomor_antrian_terbaru' ");

				if($query_akhiran)
				{
					echo '

								<!DOCTYPE html>
								<html>
								<head>
								<title>Update Antrian</title>
								<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

								</head>
								<body onload="sweet()">

								  <script>
								function sweet (){
								swal({
								  title: "Sukses",
								  text: "Berhasil Proses Antrian",
								  icon: "success",
								  button: "Ok!",
								})
								.then((value) => {
								  window.location.href="dashboard.php?timeup=next";
								});
								}
								</script>
								</body>
								</html>

					';
				}

				else
				{
					echo "Kurang berhasil";
				}

			}
			
			else
			{

					$query_nomor_sebelumnya = mysqli_query($con, "update antrian set status_antrian = 'selesai', jam_selesai='$waktu_akhir', NIK='$session_NIK', durasi='$time_duration' where status_antrian ='diproses' AND no_loket='$get_loket'");

					echo '

								<!DOCTYPE html>
								<html>
								<head>
								<title>Update Antrian</title>
								<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

								</head>
								<body onload="sweet()">

								  <script>
								function sweet (){
								swal({
								  title: "Selesai",
								  text: "Antrian sudah tidak ada lagi :)",
								  icon: "success",
								  button: "Ok!",
								})
								.then((value) => {
								  window.location.href="dashboard.php";
								});
								}
								</script>
								</body>
								</html>

					';
			}	
	}

	elseif ($_GET["antrian"]==$status_mulai_proses) 

	{

			$query_akhiran = mysqli_query($con, "update antrian set status_antrian = 'diproses', jam_diproses='$waktu_akhir', NIK='$session_NIK' where status_antrian ='menunggu' AND no_loket='$get_loket' limit 1 ");

			if($query_akhiran)
			{

				echo '

							<!DOCTYPE html>
							<html>
							<head>
							<title>Update Antrian</title>
							<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
							<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

							</head>
							<body onload="sweet()">

							  <script>
							function sweet (){
							swal({
							  title: "Sukses",
							  text: "Berhasil Proses Antrian",
							  icon: "success",
							  button: "Ok!",
							})
							.then((value) => {
							  window.location.href="dashboard.php?timeup=next";
							});
							}
							</script>
							</body>
							</html>

				';

			}

			else
			{
				echo "Kurang berhasil";
			}
	}

	else
	
	{
		echo "Tidak ada yang dieksekusi";
	}

}

else
{	
	echo "Tidak ada parameter";
}


?>