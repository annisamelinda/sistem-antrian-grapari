<?php
include "connection.php";

if (isset($_GET['id_pemesanan'])) 
{ 
$id_pemesanan = $_GET['id_pemesanan'];
} 
else 
{
die ("Error. No Id Selected! ");
}

?>

<?php 
include "edit_order_process.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Order | <?php $id_pemesanan = $_GET['id_pemesanan']; echo $id_pemesanan;?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script language="javascript"> function akun() 
{ 
    if (confirm ("Apakah Anda yakin akan pesanan ini ?")) {
    return true;} 
    else {
    return false;}
}
</script>

</head>

<body>

        <div id="wrapper">
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pesanan User : <?php $id_pemesanan = $_GET['id_pemesanan']; echo $id_pemesanan;?></h1>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Rincian Pesanan &nbsp | &nbsp <a href="tables.php"><i class="fa fa-long-arrow-left"></i> Kembali</a>
                            </div>
                            <div class="panel-body">
                            <div class="list-group">

									  <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>ID Pemesanan</label>
                                            <input class="form-control" name="id_pemesanan" placeholder="<?php echo $id_pemesanan;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pengantin Pria</label>
                                            <input class="form-control" name="nama_pria" placeholder="<?php echo $nama_pria;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pengantin Perempuan</label>
                                            <input class="form-control" name="nama_perempuan" placeholder="<?php echo $nama_perempuan;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" placeholder="<?php echo $alamat;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Resepsi</label>
                                            <input class="form-control" name="tempat_resepsi" placeholder="<?php echo $tempat_resepsi;?>">
                                        </div>
                                       	<div class="form-group">
                                            <label>Gedung</label>
                                            <select class="form-control" name="gedung">
											<option value="<?php echo $gedung; ?>" selected><?php echo $gedung; ?></option>
							                <option value="Hotel Mandalawangi">Hotel Mandalawangi</option>
							                <option value="Hotel Ramayana">Hotel Ramayana</option>
							                <option value="Aulia Hall Centre">Aulia Hall Centre</option>
											<option value="Aisiyah">Aisiyah</option>
											<option value="Da'wah">Da'wah</option>
											<option value="Juang">Juang</option>
											<option value="Santika">Santika</option>
											<option value="Graha Asia">Graha Asia</option>
											<option value="Di Rumah">Di Rumah</option>
											<option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Gedung Lainnya</label>
                                            <input class="form-control" name="gedung_lain" placeholder="<?php echo $gedung_lain;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Kontak</label>
                                            <input type="number" class="form-control" name="no_hp" placeholder="<?php echo $kontak;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pernikahan</label>
                                            <input type="date" name="tgl_pernikahan">
                                        </div>

 										<div class="form-group">
                                            <label>Pilih Dress Resepsi</label>
                                            <select class="form-control" name="dress_resepsi">
											<option value="<?php echo $dress_resepsi; ?>" selected><?php echo $dress_resepsi; ?></option>
											<option value="Dress For Reception Maroon">Dress For Reception Maroon</option>
											<option value="Dress For Reception Blue Ice">Dress For Reception Blue Ice</option>
											<option value="Dress For Reception Gold Navy">Dress For Reception Gold Navy</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Chocolate Sweet">Dress For Reception Chocolate Sweet</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Green Choco">Dress For Reception Green Choco</option>
                                            </select>
                                        </div>
 										<div class="form-group">
                                            <label>Pilih Dress Akad</label>
                                            <select class="form-control" name="dress_akad">
											<option value="<?php echo $dress_akad; ?>" selected><?php echo $dress_akad; ?></option>
											<option value="Dress For Reception Maroon">Dress For Reception Maroon</option>
											<option value="Dress For Reception Blue Ice">Dress For Reception Blue Ice</option>
											<option value="Dress For Reception Gold Navy">Dress For Reception Gold Navy</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Chocolate Sweet">Dress For Reception Chocolate Sweet</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Green Choco">Dress For Reception Green Choco</option>
                                            </select>
                                        </div>
 										<div class="form-group">
                                            <label>Pilih Dekorasi</label>
                                            <select class="form-control" name="dekorasi">
											<option value="<?php echo $dekorasi; ?>" selected><?php echo $dekorasi; ?></option>
											<option value="Dress For Reception Maroon">Dress For Reception Maroon</option>
											<option value="Dress For Reception Blue Ice">Dress For Reception Blue Ice</option>
											<option value="Dress For Reception Gold Navy">Dress For Reception Gold Navy</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Chocolate Sweet">Dress For Reception Chocolate Sweet</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Green Choco">Dress For Reception Green Choco</option>
                                            </select>
                                        </div>
 										<div class="form-group">
                                            <label>Pilih Paket Catering</label>
                                            <select class="form-control" name="paket_catering">
											<option value="<?php echo $paket_catering; ?>" selected><?php echo $paket_catering; ?></option>
											<option value="Dress For Reception Maroon">Dress For Reception Maroon</option>
											<option value="Dress For Reception Blue Ice">Dress For Reception Blue Ice</option>
											<option value="Dress For Reception Gold Navy">Dress For Reception Gold Navy</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Chocolate Sweet">Dress For Reception Chocolate Sweet</option>
											<option value="Dress For Reception Tosca Choco">Dress For Reception Tosca Choco</option>
											<option value="Dress For Reception Green Choco">Dress For Reception Green Choco</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Catering</label>
                                            <input type="number" class="form-control" name="jml_catering" placeholder="<?php echo $jml_catering;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Daging Ayam</label>
                                            <select class="form-control" name="daging_ayam">
                                            <option value="<?php echo $daging_ayam; ?>" selected><?php echo $daging_ayam; ?></option>
                                            <option value="Ayam Jujut">Ayam Jujut</option>
                                            <option value="Ayam Jujut Rendang">Ayam Jujut Rendang</option>
                                            <option value="Chicken Katsu">Chicken Katsu</option>
                                            <option value="Ayam Opor">Ayam Opor</option>
                                            <option value="Ayam Rolade">Ayam Rolade</option>
                                            <option value="Ayam Teriyaki">Ayam Teriyaki</option>
                                            <option value="Bistik Ayam">Bistik Ayam</option>
                                            <option value="Ayam Saus Putih">Ayam Saus Putih</option>
                                            <option value="Chicken Cordon Bleu">Chicken Cordon Bleu</option>
                                            <option value="Cah Ayam Jamur">Cah Ayam Jamur</option>
                                            <option value="Lainnya">Lainnya</option>                                            
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Daging Sapi</label>
                                            <select class="form-control" name="daging_sapi">
                                            <option value="<?php echo $daging_sapi; ?>" selected><?php echo $daging_sapi; ?></option>
                                            <option value="Rendang">Rendang</option>
                                            <option value="Rolade">Rolade</option>
                                            <option value="Semur">Semur</option>
                                            <option value="Sapi lada hitam">Sapi lada hitam</option>
                                            <option value="Sate">sate</option>
                                            <option value="Gepuk">gepuk</option>
                                            <option value="Gulai">gulai</option>
                                            <option value="Sambal Goreng Ati">Sambal Goreng Ati</option>
                                            <option value="Lainnya">Lainnya</option>      
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Ikan</label>
                                            <select class="form-control" name="ikan">
                                            <option value="<?php echo $ikan; ?>" selected><?php echo $ikan; ?></option>
                                          <option value="Gurame Asam Manis">Gurame Asam Manis</option>
                                          <option value="Gurame Acar Kuning">Gurame Acar Kuning</option>
                                          <option value="Gurame Pepes">Gurame Pepes</option>
                                          <option value="Gurame Saus Tiram">Gurame Saus Tiram</option>
                                          <option value="Udang Saus Tiram">Udang Saus Tiram</option>
                                          <option value="Udang Asam Manis">Udang Asam Manis</option>
                                          <option value="Udang Brokoli">Udang Brokoli</option>
                                          <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Sayur Kuah</label>
                                            <select class="form-control" name="sayur_berkuah">
                                            <option value="<?php echo $sayur_berkuah; ?>" selected><?php echo $sayur_berkuah; ?></option>
                                            <option value="Sop Ayam" selected>Sop Ayam</option>
                                            <option value="Sop Sapi" selected>Sop Sapi</option>
                                             <option value="Sop Madura" selected>Sop Madura</option>
                                            <option value="Sop Bola Ikan" selected>Sop Bola Ikan</option>
                                            <option value="Sop Kimlo" selected>Sop Kimlo</option>
                                            <option value="Sop Buntut" selected>Sop Ayam</option>
                                            <option value="Lainnya">Lainnya</option>
                                           </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Menu Sayur Tanpa Kuah</label>
                                            <select class="form-control" name="sayur_tanpakuah">
                                            <option value="<?php echo $sayur_tanpakuah; ?>" selected><?php echo $sayur_tanpakuah;?></option>
                                            <option value="Kentang Mustofa">Kentang Mustofa</option>
                                            <option value="Semi Kulit">Semi Kulit</option>
                                            <option value="Gado-gado">Gado-gado</option>
                                            <option value="Pakcoy Tahu Jagung Manis">Pakcoy Tahu Jagung Manis</option>
                                            <option value="Semi Cumi">Semi Cumi</option>
                                            <option value="Kentang Dadu Ati Petai">Kentang Dadu Ati Petai</option>
                                            <option value="Mie Goreng">Mie Goreng</option>
                                            <option value="Capcay">Capcay</option>
                                            <option value="Krecek Kacang">Krecek Kacang</option>
                                            <option value="Cah Brokoli Tahu">Cah Brokoli Tahu</option>
                                            <option value="Cah Jamur Tahu">Cah Jamur Tahu</option>
                                            <option value="Cah Jagung Sosis">Cah Jagung Sosis</option>
                                            <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>                                        

                                        <div class="form-group">
                                            <label>Dessert</label>
                                            <input type="text" class="form-control" name="dessert" placeholder="<?php echo $dessert;?>" disabled>
                                        </div>                                        

                                        <div class="form-group">
                                            <label>Food Stall</label>
                                            <input type="text" class="form-control" name="foodstall" placeholder="<?php echo $foodstall;?>" disabled>
                                        </div>                                        

                                        <div class="form-group">
                                            <label>Menu Lain</label>
                                            <input type="text" class="form-control" name="menu_lain" placeholder="<?php echo $menu_lain;?>">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form> 
                           </div>  
                    </div>
                </div>
            </div>
</div>  

</body>
</html>