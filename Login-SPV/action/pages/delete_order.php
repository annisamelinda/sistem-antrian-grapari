<?php
include "connection.php";

if (isset($_GET['id_pemesanan'])) 
{
$id_pemesanan = $_GET['id_pemesanan'];
} 

else 

{
 	echo "<script language='javascript'>alert('Gagal menghapus pesanan'); document.location='tables.php'</script>";
}

?>

<?php

if (!empty($id_pemesanan) && $id_pemesanan != "") 

{

$query = "DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan'";

$sql = mysqli_query ($mysql, $query);

if ($sql) 

{
 	echo "<script language='javascript'>alert('Pesanan berhasil dihapus'); document.location='tables.php'</script>";
} 

else
{
	echo "<script language='javascript'>alert('Gagal konek ke database'); document.location='tables.php'</script>";

}

} 

else 
{
	die ("Id Pesanan tidak diketahui");
}

?>