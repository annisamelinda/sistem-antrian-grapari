<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
error_reporting(0);
ini_set('display_errors', 0);

require 'db.php'; 
// menangkap data yang dikirim dari form
if(isset($_GET["antrian"]))
{

$status_next = 'next';
$status_mulai_proses = 'proses';

	if($_GET["antrian"]==$status_next)
	{

		$query_cs = mysqli_query($con, "update antrian set status_antrian = 'diproses' where status_antrian ='menunggu' limit 1 ");
	}

	elseif ($_GET["antrian"]==$status_mulai_proses) 
	{

		$query_cs = mysqli_query($con, "update antrian set status_antrian = 'diproses' where status_antrian ='menunggu' AN limit 1 ");
		$query_cs = mysqli_query($con, "update antrian set status_antrian = 'diproses' where status_antrian ='menunggu' AND  limit 1 ");
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