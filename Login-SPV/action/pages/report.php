<?php

include 'session_admin.php';

if (isset($_GET['id_pemesanan'])) 

{   

$id_pemesanan = $_GET['id_pemesanan'];

$query = "SELECT id_pemesanan,tgl_pemesanan, nama_perempuan, nama_pria, alamat, tempat_resepsi, gedung, gedung_lain, no_hp, tgl_pernikahan, dress_resepsi, dress_akad, dekorasi, paket_catering, jml_catering, daging_ayam, daging_sapi, ikan, sayur_berkuah, sayur_tanpakuah, dessert, foodstall, menu_lain FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";

$sql = mysqli_query ($mysql, $query);

$data = array();

//mysqli_free_result($query);
 while ($hasil = mysqli_fetch_array ($sql)) 
 {
    $id_pemesanan = $hasil['id_pemesanan'];
    $tgl_pemesanan = $hasil['tgl_pemesanan'];
    $nama_perempuan = $hasil['nama_perempuan'];
    $nama_pria = $hasil['nama_pria'];
    $alamat = $hasil['alamat'];
    $tempat_resepsi = $hasil['tempat_resepsi'];
    $gedung = $hasil['gedung'];
    $gedung_lain = $hasil['gedung_lain'];
    $kontak = $hasil['no_hp'];
    $tgl_pernikahan = $hasil['tgl_pernikahan'];
    $dress_resepsi = $hasil['dress_resepsi'];
    $dress_akad = $hasil['dress_akad'];
    $dekorasi = $hasil['dekorasi'];
    $paket_catering = $hasil['paket_catering'];
    $jml_catering = $hasil['jml_catering'];
    $daging_ayam = $hasil['daging_ayam'];
    $daging_sapi = $hasil['daging_sapi'];
    $ikan = $hasil['ikan'];
    $sayur_berkuah = $hasil['sayur_berkuah'];
    $sayur_tanpakuah = $hasil['sayur_tanpakuah'];
    $dessert = $hasil['dessert'];
    $foodstall = $hasil['foodstall'];
    $menu_lain = $hasil['menu_lain'];
}

while ($row = mysqli_fetch_assoc($sql))

{
	array_push($data, $row);

}

	$judul = "Bukti Pemesanan";
	$tanggal_pesan = "Tanggal Pemesanan : ".$tgl_pemesanan;
	$id_pemesanan = "ID Pemesanan : ".$id_pemesanan;
    $nama_perempuan ="Nama Perempuan : ". $nama_perempuan;
    $nama_pria ="Nama Pria : ".$nama_pria;
    $alamat ="Alamat : ". $alamat;
    $tempat_resepsi ="Tempat Resepsi : ". $tempat_resepsi;
    $gedung ="Gedung : ". $gedung;
    $gedung_lain ="Gedung Lain : ". $gedung_lain;
    $kontak ="No.HP : ". $kontak;
    $tgl_pernikahan = "Tanggal Pernikahan : ".$tgl_pernikahan;
    $dress_resepsi = "Dress Resepsi : ".$dress_resepsi;
    $dress_akad = "Dress Akad : ".$dress_akad;
    $dekorasi ="Dekorasi : ". $dekorasi;
    $paket_catering = "Paket Catering : ".$paket_catering;
    $jml_catering ="Jumlah Porsi : ". $jml_catering;
    $daging_ayam = "Daging Ayam : ".$daging_ayam;
    $daging_sapi = "Daging Sapi : ".$daging_sapi;
    $ikan ="Ikan : ". $ikan;
    $sayur_berkuah = "Sayur Kuah : ".$sayur_berkuah;
    $sayur_tanpakuah ="Sayur Tanpa Kuah : ". $sayur_tanpakuah;
    $dessert ="Dessert : ". $dessert;
    $foodstall = "Food Stall : ".$foodstall;
    $menu_lain = "Menu lain : ".$menu_lain;
    $garis = "------------------------------------------------------------------------------------------------------------------";
    $notif1="Segera lakukan fitting baju dan melakukan pembayaran langsung di Galeri Nandan Wedding.    ";
    $notif2="Alamat : Kp. Gunung Sari Tasikmalaya.";
    $notif3="Apabila tidak hadir dan memberi konfirmasi dalam seminggu terhitung setelah hari pemesanan, ";
    $notif4="pemesanan kamu akan dianggap batal. Terima kasih :).";
    $cp="Contact Person : 0852 2120 22777 ( Nandan )";
/*$header = array ( array ("label"=>"ID Transaksi", "length"=>50, "align"=>"L" ), array("label"=>"Tanggal Transaksi", "length"=>40, "align"=>"L"), array("label"=>"Nominal Transaksi", "length"=>40, "align"=>"L"), array("label"=>"Status Transaksi", "length"=>40, "align"=>"L"));
*/

include "../fpdf181/fpdf.php";
$pdf = new fpdf();
$pdf->AddPage(); 

$pdf->SetFont('Arial','B','14'); 
$pdf->Cell(0,30, $judul, '0', 1, 'C');
$pdf->SetFont('Arial','','12'); 
$pdf->Cell(0,0, $tanggal_pesan, '0', 1, '');
$pdf->Cell(0,12, $id_pemesanan, '0', 1, '');
$pdf->Cell(0,0, $nama_perempuan, '0', 1, '');
$pdf->Cell(0,12, $nama_pria, '0', 1, '');
$pdf->Cell(0,0, $alamat, '0', 1, '');
$pdf->Cell(0,12, $tempat_resepsi, '0', 1, '');
$pdf->Cell(0,0, $gedung, '0', 1, '');
$pdf->Cell(0,12, $gedung_lain, '0', 1, '');
$pdf->Cell(0,0, $kontak, '0', 1, '');
$pdf->Cell(0,12, $tgl_pernikahan, '0', 1, '');
$pdf->Cell(0,0, $dress_resepsi, '0', 1, '');
$pdf->Cell(0,12, $dress_akad, '0', 1, '');
$pdf->Cell(0,0, $dekorasi, '0', 1, '');
$pdf->Cell(0,12, $paket_catering, '0', 1, '');
$pdf->Cell(0,0, $jml_catering, '0', 1, '');
$pdf->Cell(0,12, $daging_ayam, '0', 1, '');
$pdf->Cell(0,0, $daging_sapi, '0', 1, '');
$pdf->Cell(0,12, $ikan, '0', 1, '');
$pdf->Cell(0,0, $sayur_berkuah, '0', 1, '');
$pdf->Cell(0,12, $sayur_tanpakuah, '0', 1, '');
$pdf->Cell(0,0, $dessert, '0', 1, '');
$pdf->Cell(0,12, $foodstall, '0', 1, '');
$pdf->Cell(20,0, $menu_lain, '0', 1, '');
$pdf->SetFont('Arial','B','14'); 
$pdf->Cell(0,20, $garis, '0', 1, 'C');
$pdf->SetFont('Arial','I','12'); 
$pdf->Cell(0,10, $notif1, '0', 1, 'C');
$pdf->Cell(0,10, $notif2, '0', 1, 'C');
$pdf->Cell(0,10, $notif3, '0', 1, 'C');
$pdf->Cell(0,10, $notif4, '0', 1, 'C');
$pdf->SetFont('Arial','B','12'); 
$pdf->Cell(0,20, $cp, '0', 1, '');

$pdf->SetFont('Arial','','10'); 
$pdf->SetFillColor(224,235,255); 
$pdf->SetTextColor(242); 
$pdf->SetDrawColor(100,0,0); 
/*
foreach ($header as $kolom) 
	{  $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
	} 
$pdf->Ln(); 

$pdf->SetFillColor(224,235,255); 
$pdf->SetTextColor(0); 
$pdf->SetFont(''); 
$fill=false; 
foreach ($data as $baris) 
	{  
		$i = 0;  
	foreach ($baris as $cell) 
	{   $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);   $i++;  }  
		
	$fill = !$fill;  $pdf->Ln(); 

}  

#output file PDF*/ 
$pdf->Output();
}

else
{
	echo "<script language='javascript'>alert('Oopss.. Mohon maaf gagal cetak bukti pemesanan. Silahkan hubungi kami apabila mengalam masalah :)'); document.location='Pages/tables.php'</script>";
}
?>