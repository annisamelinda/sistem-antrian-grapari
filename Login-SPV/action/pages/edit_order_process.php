<?php 
include "connection.php";

$query = "SELECT id_pemesanan, nama_perempuan, nama_pria, alamat, tempat_resepsi, gedung, gedung_lain, no_hp, tgl_pernikahan, dress_resepsi, dress_akad, dekorasi, paket_catering, jml_catering, daging_ayam,daging_sapi,ikan,sayur_berkuah,sayur_tanpakuah,dessert,foodstall,menu_lain FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";

$sql = mysqli_query ($mysql, $query);

while ($hasil = mysqli_fetch_array ($sql)) 
{
			$id_pemesanan = $hasil['id_pemesanan'];
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


if(isset($_POST['submit']))

{
			//$id_pemesanan = $_POST['id_pemesanan'];
			$nama_perempuan = $_POST['nama_perempuan'];
			$nama_pria = $_POST['nama_pria'];
			$alamat = $_POST['alamat'];
			$tempat_resepsi = $_POST['tempat_resepsi'];
			$gedung = $_POST['gedung'];
			$gedung_lain = $_POST['gedung_lain'];
			$no_hp = $_POST['no_hp'];
			$tgl_pernikahan = $_POST['tgl_pernikahan'];
			$dress_resepsi = $_POST['dress_resepsi'];
			$dress_akad = $_POST['dress_akad'];
			$dekorasi = $_POST['dekorasi'];
			$paket_catering = $_POST['paket_catering'];
			$jml_catering = $_POST['jml_catering'];
			$daging_ayam = $_POST['daging_ayam'];
			$daging_sapi = $_POST['daging_sapi'];
			$ikan = $_POST['ikan'];
			$sayur_berkuah = $_POST['sayur_berkuah'];
			$sayur_tanpakuah = $_POST['sayur_tanpakuah'];
			$dessert = $_POST['dessert'];
			$foodstall = $_POST['foodstall'];
			$menu_lain = $_POST['menu_lain'];

			$query ="update pemesanan set nama_pria='$nama_pria', nama_perempuan='$nama_perempuan', alamat='$alamat', tempat_resepsi='$tempat_resepsi', gedung='$gedung', gedung_lain='$gedung_lain', no_hp='$no_hp', tgl_pernikahan='$tgl_pernikahan', dress_resepsi='$dress_resepsi', dress_akad='$dress_akad', dekorasi='$dekorasi', paket_catering='$paket_catering', jml_catering='$jml_catering', daging_ayam='$daging_ayam',daging_sapi='$daging_sapi',ikan='$ikan',sayur_berkuah='$sayur_berkuah',sayur_tanpakuah='$sayur_tanpakuah',dessert='$dessert',foodstall='$foodstall',menu_lain='$menu_lain' where id_pemesanan='$id_pemesanan'";

			$update = mysqli_query($mysql, $query);

			if($update)
				{
					echo "<script language='javascript'>alert('Berhasil update pesanan !'); document.location='tables.php'</script>";
				}
			
			else
				{

					echo "<script language='javascript'>alert('Gagal update pesanan !'); document.location='tables.php'</script>";
				}

}

	?>
