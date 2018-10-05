<?php
include "session_admin.php";
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
                            <i class="fa fa-bell fa-fw"></i> Rincian Pesanan &nbsp | &nbsp <a href="edit_order.php?id_pemesanan=<?php echo $id_pemesanan;?>"><i class="fa fa-gear fa-gear"></i> Edit Data Pemesanan</a>
                            </div>
                            <div class="panel-body">
                            <div class="list-group">

                            <?php

                            if (isset($_GET['id_pemesanan'])) 
                            {

                            $id_pemesanan = $_GET['id_pemesanan'];


                              if($id_pemesanan==$id_pemesanan)

                            {

                              panggil_kueri(); 
                              
                            }

                            }

                            function id_pemesanan()
                            {

                            global $id_pemesanan;

                            }
                            function panggil_kueri()
                            {
                                global $id_pemesanan;
                                include 'connection.php';

                                $queri="select * from pemesanan where id_pemesanan = '$id_pemesanan'"; 

                                $hasil=mysqli_query($mysql, $queri);   

                                  if(mysqli_num_rows($hasil)==0)
                                  {
                                    echo "<script language='javascript'>alert('Maaf, pesanan tidak terdaftar'); document.location='tables.php'</script>";
                                  }
                                  else 
                                  {
                                        $query = "SELECT id_pemesanan, nama_perempuan, nama_pria, alamat, tempat_resepsi, gedung, gedung_lain, no_hp, tgl_pernikahan, dress_resepsi, dress_akad, dekorasi, paket_catering, jml_catering, daging_ayam, daging_sapi, ikan, sayur_berkuah, sayur_tanpakuah, dessert, foodstall, menu_lain FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";
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

                                            echo "                                
                                            <li class='list-group-item'>
                                            <i> - </i>ID Pemesanan : $id_pemesanan</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Nama Perempuan : $nama_perempuan</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Nama Pria : $nama_pria</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Alamat : $alamat</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Tempat Resepsi : $tempat_resepsi</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Gedung : $gedung</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Gedung Lain : $gedung_lain</li>                                            
                                            <li class='list-group-item'>
                                            <i> - </i></i>Kontak : $kontak</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Tanggal Pernikahan : $tgl_pernikahan</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Dress Resepsi : $dress_resepsi</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Dress Akad : $dress_akad</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Dekorasi : $dekorasi</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Paket Catering : $paket_catering</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Jumlah Catering : $jml_catering</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Daging Ayam : $daging_ayam</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Daging Sapi : $daging_sapi</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Ikan : $ikan</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Sayur Kuah : $sayur_berkuah</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Sayur Tanpa Berkuah : $sayur_tanpakuah</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Dessert : $dessert</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Food Stall : $foodstall</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Menu Lain : $menu_lain</li>
                                            ";
                                        }

                                  }
                            }
                            ?>
                            </div>  
                    </div>
                </div>

                <!-- /.col-lg-12 -->
            </div>

</div>  
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


</body>

</html>
