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

    <title>Detail Antrian | <?php $no = $_GET['no']; echo $no;?> </title>

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
                    <h1 class="page-header">Detail Lengkap Antrian : <?php $no = $_GET['no']; echo $no;?></h1>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Rincian Antrian &nbsp | &nbsp <a href="dashboard.php"><i class="fa fa-back fa-back"></i> Kembali</a>
                            </div>
                            <div class="panel-body">
                            <div class="list-group">

                            <?php

                            if (isset($_GET['no'])) 
                            {

                            $no = $_GET['no'];


                              if($no==$no)

                            {

                              panggil_kueri(); 
                              
                            }

                            }

                            function no()
                            {

                            global $no;

                            }
                            function panggil_kueri()
                            {
                                global $no;

                                include 'db.php';

                                $queri="select * from antrian where nomor_register = '$no'"; 

                                $hasil=mysqli_query($mysql, $queri);   

                                  if(mysqli_num_rows($hasil)==0)
                                  {
                                    echo "<script language='javascript'>alert('Maaf, antrian tidak terdaftar'); document.location='tables.php'</script>";
                                  }
                                  else 
                                  {
                                        //$query = "SELECT nomor_register, nomor_antrian, jenis_pelayanan, tanggal_order, NIK, id_customer, status_antrian, jam_order, jam_selesai, no_loket FROM riwayat_antrian WHERE nomor_register = '$no'";

                                        $query = "SELECT nomor_register, nomor_antrian, tanggal_order, id_customer, jam_order, jam_diproses, jam_selesai, jenis_pelayanan, status_antrian, no_loket, pl.NIK, nama FROM petugas pl JOIN antrian pn ON pl.NIK = pn.NIK where nomor_register = '$no'";

                                        $sql = mysqli_query ($mysql, $query);
                                        while ($hasil = mysqli_fetch_array ($sql)) 
                                        {
                                            $no = $hasil['nomor_register'];
                                            $nomor_antrian = $hasil['nomor_antrian'];
                                            $jenis_pelayanan = $hasil['jenis_pelayanan'];
                                            $tgl = $hasil['tanggal_order'];
                                            $id_customer = $hasil['id_customer'];
                                            $status_antrian = $hasil['status_antrian'];
                                            $jam_order = $hasil['jam_order'];
                                            $jam_diproses = $hasil['jam_diproses'];
                                            $jam_selesai = $hasil['jam_selesai'];
                                            $no_loket = $hasil['no_loket'];
                                            $nama_petugas = $hasil['nama'];

                                            echo "                                
                                            <li class='list-group-item'>
                                            <i> - </i>Nomor Register : $no</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>No Loket : $no_loket</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Nomor Antrian : $nomor_antrian</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Jenis Layanan : $jenis_pelayanan</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Tanggal Antrian : $tgl</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Petugas : $nama_petugas</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Status : $status_antrian</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Jam Order : $jam_order</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Jam Diproses : $jam_diproses</li>
                                            <li class='list-group-item'>
                                            <i> - </i></i>Jam Selesai : $jam_selesai</li>
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
