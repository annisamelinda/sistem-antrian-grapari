<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Form CS & SPV GraPARI Tasikmalaya</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<h1> Form	CS &amp; SPV GraPARI Tasikmalaya</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true" action="" method="post">
			<div class="form-group">
				<label for="exampleInputText">Nama</label>
				<input type="text" class="form-control" name="nama" id="exampleInputText" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
				<label for="exampleNIK">NIK</label>
				<input type="NIK" class="form-control" name="NIK" id="exampleNIK" placeholder="NIK" required>
			</div>
			<div class="form-group">
				<label for="exampleNIK">Jabatan</label><br>
				<input type="radio" class="form-control" name="jabatan" value="SPV" id="good">
				<label for="good"> Supervisor </label> 
				<input type="radio" class="form-control" name="jabatan" value="CS" id="good">
				<label for="good"> Customer Service </label>	
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>Data Sudah Sesuai
				</label>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<!-- //content -->


	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->

</body>

</html>

<?php

error_reporting(0);
ini_set('display_errors', 0);

require 'db.php';

if(isset($_POST["submit"]))
{
	ini_set('date.timezone', 'Asia/Jakarta');
	$nama = $_POST['nama'];
	$NIK = $_POST['NIK'];
	$jabatan = $_POST['jabatan'];

	if($jabatan=='SPV')
	{

	$query_spv = mysqli_query($con, "INSERT INTO supervisor (NIK, nama)VALUES ('$NIK', '$nama')");

		if($query_spv)
		{
					echo '

								<!DOCTYPE html>
								<html>
								<head>
								<title>Tambah SPV/CS</title>
								<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

								</head>
								<body onload="sweet()">

								  <script>
								function sweet (){
								swal({
								  title: "Sukses",
								  text: "Berhasil tambah SPV :)",
								  icon: "success",
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

	elseif ($jabatan=='CS') 
	{


	$query_cs = mysqli_query($con, "INSERT INTO petugas (NIK, nama)VALUES ('$NIK', '$nama')");


		if($query_cs)
		{
					echo '

								<!DOCTYPE html>
								<html>
								<head>
								<title>Tambah SPV/CS</title>
								<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

								</head>
								<body onload="sweet()">

								  <script>
								function sweet (){
								swal({
								  title: "Sukses",
								  text: "Berhasil tambah CS :)",
								  icon: "success",
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

	else
	{

					echo '

								<!DOCTYPE html>
								<html>
								<head>
								<title>Tambah SPV/CS</title>
								<link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

								</head>
								<body onload="sweet()">

								  <script>
								function sweet (){
								swal({
								  title: "Ada masalah",
								  text: "Contact Developer segera !",
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

else
{

}

?>