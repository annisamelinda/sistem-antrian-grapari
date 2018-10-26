<?php
include "db.php";

if (isset($_GET['no'])) 
{
$no = $_GET['no'];
} 

else 

{
 	echo "<script language='javascript'>alert('Tidak dapat ID'); document.location='dashboard.php'</script>";
}

?>

<?php

if (!empty($no)) 

{

$query = "DELETE FROM riwayat_antrian WHERE nomor_register='$no'";

$sql = mysqli_query ($mysql, $query);

	if ($sql) 

	{
	 	echo "<script language='javascript'>alert('Pesanan berhasil dihapus'); document.location='dashboard.php'</script>";
	} 

	else
	{
		echo "<script language='javascript'>alert('Gagal konek ke database'); document.location='dashboard.php'</script>";

	}

} 

else 
{
	die ("Id antrian tidak diketahui");
}

?>