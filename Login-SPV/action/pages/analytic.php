<?php
include "session_admin.php";
//$koneksi = mysqli_connect("localhost","root","","grafik_mahasiswa"); 
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>

    <script src="../js/Chart.js"></script>

    <script src="../js/grafik_harian.js"></script>

    <script src="../js/grafik_total.js"></script>
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
                <a class="navbar-brand" href="tables.php">Halaman Administrasi Antrian</a>
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
                            <a target="_blank" href="dashboard-report.php"><i class="fa fa-bar-chart-o fa-fw"></i>Analytic</a>
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
                    <h1 class="page-header">Chart</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Harian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <div style="width: 800px;margin: 0px auto;">
                                    <canvas id="myChartHarian"></canvas>
                                </div>
                        <script>
                            var ctx = document.getElementById("myChartHarian").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["L-1", "L-2", "L-3", "L-4", "L-5", "L-6"],
                                    datasets: [{
                                        label: '',
                                        data: [
                                        <?php 
                                        $jumlah_loket_1 = mysqli_query($mysql,"select * from antrian where no_loket='1'");
                                        echo mysqli_num_rows($jumlah_loket_1);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_2 = mysqli_query($mysql,"select * from antrian where no_loket='2'");
                                        echo mysqli_num_rows($jumlah_loket_2);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_3 = mysqli_query($mysql,"select * from antrian where no_loket='3'");
                                        echo mysqli_num_rows($jumlah_loket_3);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_4 = mysqli_query($mysql,"select * from antrian where no_loket='4'");
                                        echo mysqli_num_rows($jumlah_loket_4);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_5 = mysqli_query($mysql,"select * from antrian where no_loket='5'");
                                        echo mysqli_num_rows($jumlah_loket_5);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_6 = mysqli_query($mysql,"select * from antrian where no_loket='6'");
                                        echo mysqli_num_rows($jumlah_loket_6);
                                        ?>
                                        ],
                                        backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                       barValueSpacing: 10,
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero:true,
                                                min: 0
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <div style="width: 800px;margin: 0px auto;">
                                    <canvas id="myChartTotal"></canvas>
                                </div>
                        <script>
                            var ctx = document.getElementById("myChartTotal").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["L-1", "L-2", "L-3", "L-4", "L-5", "L-6"],
                                    datasets: [{
                                        label: '',
                                        data: [
                                        <?php 
                                        $jumlah_loket_1 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='1'");
                                        echo mysqli_num_rows($jumlah_loket_1);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_2 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='2'");
                                        echo mysqli_num_rows($jumlah_loket_2);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_3 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='3'");
                                        echo mysqli_num_rows($jumlah_loket_3);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_4 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='4'");
                                        echo mysqli_num_rows($jumlah_loket_4);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_5 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='5'");
                                        echo mysqli_num_rows($jumlah_loket_5);
                                        ?>, 
                                        <?php 
                                        $jumlah_loket_6 = mysqli_query($mysql,"select * from riwayat_antrian where no_loket='6'");
                                        echo mysqli_num_rows($jumlah_loket_6);
                                        ?>
                                        ],
                                        backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero:true,
                                                min: 0
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
