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

    <title>Halaman Admin</title>

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

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Halaman Administrasi Antrian</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    
                        <a href="logout_admin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                           <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-table fa-fw"></i> Data Antrian</a>
                        </li>
                        <li>
                            <a target="_blank" href="dashboard-report.php"><i class="fa fa-edit fa-fw"></i>Report</a>
                        </li>
                        <li>
                            <a target="_blank" href="analytic.php"><i class="fa fa-bar-chart-o fa-fw"></i>Analytic</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Selamat datang <b><?php echo $nama; ?></b>, sekarang kamu bisa kelola Antrian.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                    $sql="SELECT nomor_register, NIK FROM riwayat_antrian where NIK IS NOT NULL";

                                    if ($result=mysqli_query($mysql,$sql))
                                      {
                                      // Return the number of rows in result set
                                      $rowcount=mysqli_num_rows($result);
                                      echo $rowcount;
                                      // Free result set
                                      mysqli_free_result($result);
                                      }
                                    ?>                                        
                                    </div>


                                    <div>Total Seluruh Antrian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                    $sql="SELECT nomor_register, NIK FROM antrian where NIK IS NOT NULL";

                                    if ($result=mysqli_query($mysql,$sql))
                                      {
                                      // Return the number of rows in result set
                                      $rowcount=mysqli_num_rows($result);
                                      echo $rowcount;
                                      // Free result set
                                      mysqli_free_result($result);
                                      }
                                    ?>                                        
                                    </div>


                                    <div>Total Antrian Hari ini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Pemesanan Hari ini
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Reg.Number</th>
                                        <th>ID Customer</th>
                                        <th>Tanggal Order</th>
                                        <th>Jam Order</th>
                                        <th>Jam Diproses</th>
                                        <th>Layanan</th>
                                        <th>Petugas</th>
                                        <th>Detail</th>

                                    </tr>
                                    </thead>
                                    <tbody>

<?php  

$queri_antrian="SELECT nomor_register, tanggal_order, id_customer, jam_order, jam_diproses, jenis_pelayanan, pl.NIK, nama FROM petugas pl JOIN antrian pn ON pl.NIK = pn.NIK" ; 

$hasil_antrian=mysqli_query($mysql, $queri_antrian);   

while ($data = mysqli_fetch_array ($hasil_antrian))
{
$no = $data['nomor_register'];
echo "    
        <tr>
        <td>".$data['nomor_register']."</td>
        <td>".$data['id_customer']."</td>
        <td>".$data['tanggal_order']."</td>
        <td>".$data['jam_order']."</td>
        <td>".$data['jam_diproses']."</td>
        <td>".$data['jenis_pelayanan']."</td>
        <td>".$data['nama']."</td>
        <td><a href='detail_antrian.php?no=$no' target = '_blank'>Lihat Detail</a></td>
        <!--<td><a href='delete_antrian.php?no=$no' onClick='return akun()'>Delete</a></td>-->
        </tr> 
        ";     
}
mysqli_free_result($hasil_antrian);
?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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
