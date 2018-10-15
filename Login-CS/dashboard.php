<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Halaman Utama Peserta</title>
	<script type="text/javascript" src="js/date_time.js"></script>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 10px;
}
</style>

</head>
<body>
	<h2 align="center"><u>Halaman Petugas</u></h2>
    <br>
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status_account']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

	<?php
	include 'db.php';
	$session_NIK = $_SESSION['NIK'];
	$session_nama = $_SESSION['nama'];

	$sql_view_loket="SELECT pl.NIK, nama, no_loket, access_time, status_loket FROM petugas pl JOIN pelayanan_loket pn ON pl.NIK = pn.NIK where pl.NIK ='$session_NIK'";

	$result=mysqli_query($con,$sql_view_loket);

		// Associative array
	$row=mysqli_fetch_assoc($result);
		
		// Free result set
	mysqli_free_result($result);
	
	$tag_loket = $row["no_loket"];
	$time_set = $row["access_time"];

	echo "NIK : ".$session_NIK;
	echo "<br>";																							
	echo "Nama : ".$session_nama;
	echo "<br>";
	echo "Loket Anda Bertugas yaitu loket : ".$tag_loket;		
	echo "<br>";
	echo "Login Time : ".'
	<span id="date_time"></span>
    <script type="text/javascript">window.onload = date_time("date_time");</script>
	'."<br><br>";
	echo "<a href='logout.php'>Logout</a>";
	?>

<h1>List Antrian Loket Anda : </h1>

<p align="center"><table align="center" width="50">
	<tr align="center">
		<td align="center">

		<?php

			$cek_selesai = mysqli_query($con, "SELECT nomor_antrian from antrian where status_antrian='diproses' OR status_antrian='menunggu' AND no_loket='$tag_loket'");

			$cek_semua_selesai = mysqli_num_rows($cek_selesai);

			$cek_cek = mysqli_query($con, "SELECT nomor_antrian from antrian where status_antrian='menunggu' AND no_loket='$tag_loket' LIMIT 1");

					// Associative array
			$row_row=mysqli_fetch_assoc($cek_cek);
				
						// Free result set
			mysqli_free_result($cek_cek);
		
			$cek_exist_antrian = $row_row["nomor_antrian"];

			echo "Antrian selanjutnya yang akan diproses: ".$cek_exist_antrian."<br>";

			if($cek_semua_selesai>0)

			{


					$begin_antrian = mysqli_query($con, "SELECT *from antrian where status_antrian='diproses' AND no_loket='$tag_loket'");
			 
					// menghitung jumlah data yang ditemukan
					$cek = mysqli_num_rows($begin_antrian);
					 
						if($cek > 0)
						{
							echo "<a href='process_antrian.php?antrian=next&no_loket=$tag_loket&nomor_antrian=$cek_exist_antrian'>Next Antrian</a></td>";
						}

						else
						{
							echo "<a href='process_antrian.php?antrian=proses&no_loket=$tag_loket'>Mulai Proses Antrian</a></td>";
						}
			}
				
			else
				
			{
				echo "None";

			}		

		?>
	</tr>
	
</table></p> <br>

         <table width="100%">
                                    <tr>
                                        <th>Nomor Antrian</th>
                                        <th>Nomor Register</th>
                                        <th>Nama</th>
                                        <th>No HP</th>
                                        <th>Status</th>
                                        <!--<th>Aksi</th>-->
                                    </tr>
<?php  

$queri_antrian="SELECT pl.id_customer, nama, no_telp, nomor_antrian, nomor_register, status_antrian FROM customer pl JOIN antrian pn ON pl.id_customer = pn.id_customer where no_loket = '$tag_loket'"; 

$hasil_antrian=mysqli_query($con, $queri_antrian);   

while ($data = mysqli_fetch_array ($hasil_antrian))
{
//$id_pemesanan = $data['id_pemesanan'];
echo '    
        <tr>
        <td>'.$data['nomor_antrian'].'</td>
        <td>'.$data['nomor_register'].'</td>
        <td>'.$data['nama'].'</td>
        <td>'.$data['no_telp'].'</td>
        <td>'.$data['status_antrian'].'</td>';

        /*if($data['status_antrian']=='diproses')
        {
			echo '<td><a href=process_status.php?nomor_register='.$data['nomor_register'].'>Proses</a></td>
        </tr>';        	
        }

        elseif ($data['status_antrian']=='selesai') 
        {
        echo '<td>Selesai</td>
        </tr>';
        }   

        else
        {
			echo '<td><a href=process_status.php?nomor_register='.$data['nomor_register'].'>Proses</a></td>
        </tr>';        	
        }*/
}

mysqli_free_result($hasil_antrian);
?>

         </table>
</body>
</html>