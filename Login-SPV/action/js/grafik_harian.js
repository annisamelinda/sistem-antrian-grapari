                            var ctx = document.getElementById("myChartHarian").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'doughnut',
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