<?php

require('check_date.php');

?>

<!DOCTYPE html>
<html>
<head>
<title>Selamat Datang Di Halaman Pendaftaran Online Pelayanan Simcard Grapari Telkomsel Tasikmalaya</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">Informasi Antrian</h1>
    <div class="w3layouts_main wrap">

<?php

error_reporting(0);
ini_set('display_errors', 0);

require 'db.php';

/*echo date('Y-m-d');
echo date('H:i:s');
echo ".</br>";
$sum = 2468; // No need of type casting
echo substr($sum, 0, 2); // 2
echo ".</br>";
echo substr($sum, -1); // 8
echo ".</br>";
echo substr('irwan', 1)

echo "CL"."-"."";*/

if(isset($_POST["submit"]))
{
	ini_set('date.timezone', 'Asia/Jakarta');
	$jenis_pelayanan = $_POST['jenis_pelayanan'];
	$no_telp = $_POST['no_telp'];
	$nama = $_POST['nama'];
	$current_date= date('Y-m-d');
	$current_time= date('H:i:s');
	$get_date= date('d');

	$parts = explode(" ", $nama);
	$lastname = array_pop($parts);
	$firstname = implode(" ", $parts);


	$id_customer= "C".substr($firstname, -2).substr($lastname, -2).substr($no_telp, -3);
	$nomor_register= "CL".$get_date."-".$id_customer;

	$query_customer = mysqli_query($con, "INSERT INTO customer (id_customer, nama, no_telp)VALUES ('$id_customer', '$nama', '$no_telp')");

	if($query_customer)

	{


		$sql="SELECT id_customer, nama FROM customer where id_customer='$id_customer'";
		$result=mysqli_query($con,$sql);

		// Associative array
		$row=mysqli_fetch_assoc($result);
		
		// Free result set
		mysqli_free_result($result);
	
		$id_customer_baru = $row["id_customer"];



		$query_antrian = mysqli_query($con, "INSERT INTO antrian (nomor_register, tanggal_order, jam_order, jenis_pelayanan, status_antrian, id_customer) VALUES ('$nomor_register', '$current_date', '$current_time', '$jenis_pelayanan', 'menunggu', '$id_customer_baru')");
				 
		if($query_antrian)
		{


					$sql_update_antrian="SELECT nomor_antrian FROM antrian where nomor_register='$nomor_register'";
					$result_antrian=mysqli_query($con,$sql_update_antrian);

					// Associative array
					$row=mysqli_fetch_assoc($result_antrian);
					
					// Free result set
					mysqli_free_result($result_antrian);
				
					$nomor_antrian_baru = $row["nomor_antrian"];

					$x = $nomor_antrian_baru;

					if($x>0 && $x<7)
					{


						$update_loket="UPDATE antrian SET no_loket= '$x' WHERE nomor_register='$nomor_register'";
						$result_loket=mysqli_query($con, $update_loket);

						if($result_loket)
						{
									//echo "Anda Antrian ".$x."<br>";
									//echo "Anda Loket ".$x."<br>";
									//echo "Thank You! you are now registered.";

							echo '

							<!DOCTYPE html>
							<html>
							<head>
							<title>Sistem Antrian</title>
							<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
							<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

							</head>
							<body onload="sweet()">

							  <script>
							function sweet (){
							swal({
							  title: "Selamat",
							  text: "Pendaftaran Antrian Berhasil",
							  icon: "success",
							  button: "Ok!",
							})
							}
							</script>
							</body>
							</html>

							';

									echo "<h3>Nama : ".$nama."</h3><br>";
									echo "<h3>Nomor Registrasi : ".$nomor_register."</h3><br>";
									echo "<h3>Nomor Antrian : ".$x."</h3><br>";
									echo "<h3>Loket : ".$x."</h3><br>";
									echo "<h3>Tanggal Antrian : ".$current_date."</h3><br>";
									echo "<h3><a href ='index.php'><input type='submit' name='submit' value='Kembali' class='agileinfo'/></a></h3>";
						}

						else
						{
							echo "Upps...";
						}

					}

					else
					{


						$y = 6;
						
						$result = fmod($x,$y);

								if($result==0)
								{

									$update_loket="UPDATE antrian SET no_loket= '$y' WHERE nomor_register='$nomor_register'";
									$result_loket=mysqli_query($con, $update_loket);

									echo '

									<!DOCTYPE html>
									<html>
									<head>
									<title>Sistem Antrian</title>
									<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
									<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

									</head>
									<body onload="sweet()">

									  <script>
									function sweet (){
									swal({
									  title: "Selamat",
							  		  text: "Pendaftaran Antrian Berhasil",
									  icon: "success",
									  button: "Ok!",
									})
									}
									</script>
									</body>
									</html>

							';

									echo "<h3>Nama : ".$nama."</h3><br>";
									echo "<h3>Nomor Registrasi : ".$nomor_register."</h3><br>";
									echo "<h3>Nomor Antrian : ".$x."</h3><br>";
									echo "<h3>Loket : ".$y."</h3><br>";
									echo "<h3>Tanggal Antrian : ".$current_date."</h3><br>";
									echo "<h3><a href ='index.php'><input type='submit' name='submit' value='Kembali' class='agileinfo'/></a></h3>";

								}

								else
								{

									$update_loket="UPDATE antrian SET no_loket= '$result' WHERE nomor_register='$nomor_register'";
									$result_loket=mysqli_query($con, $update_loket);

									echo '

									<!DOCTYPE html>
									<html>
									<head>
									<title>Sistem Antrian</title>
									<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
									<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

									</head>
									<body onload="sweet()">

									  <script>
									function sweet (){
									swal({
									  title: "Selamat",
									  text: "Pendaftaran Antrian Berhasil",
									  icon: "success",
									  button: "Ok!",
									})
									}
									</script>
									</body>
									</html>

									';

									echo "<h3>Nama : ".$nama."</h3><br>";
									echo "<h3>Nomor Registrasi : ".$nomor_register."</h3><br>";
									echo "<h3>Nomor Antrian : ".$x."</h3><br>";
									echo "<h3>Loket : ".$result."</h3><br>";
									echo "<h3>Tanggal Antrian : ".$current_date."</h3><br>";
									echo "<h3><a href ='index.php'><input type='submit' name='submit' value='Kembali' class='agileinfo'/></a></h3>";
								}

					}

		}

		else
		{
					echo "Gagal antri";
		}

	}

	else
	{
		echo '
			<!DOCTYPE html>
			<html>
			<head>
				<title>Sistem Antrian</title>
				<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			</head>
			<body onload="sweet()">

		    <script>
							function sweet (){
									swal({
									  title: "Maaf Pendaftaran Antrian gagal !.",
									  text: "Silahkan Refresh halaman form untuk mendaftar kembali",
									  icon: "warning",
									  button: "Ok!",
									})
									.then((value) => {
										window.location.href="index.php";
									});
									}
			</script>
			</body>
			</html>

									';
	}

}

?>

	</div>
	<div class="agileits_copyright text-center">
			<p>&nbsp;</p>
	</div>
</body>
</html>
