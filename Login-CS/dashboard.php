<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama Peserta</title>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 10px;
}
</style>

</head>
<body>
	<h2 align="center"><u>Halaman Peserta</u></h2>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status_account']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

	<?php
	include 'db.php';
	$session_NIK = $_SESSION['NIK'];

	echo "NIK : ".$session_NIK;

	?>
</body>
</html>