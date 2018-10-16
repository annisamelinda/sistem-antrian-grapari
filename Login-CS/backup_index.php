
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>LOGIN CS</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validify Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
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
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Nova+Round" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>Selamat Datang Di Halaman Login Costumer Service GraPARI Tasikmalaya</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form id="demo" action="www.php" method="post">
			<h2>Masukan NIK dan Password</h2>
			<div class="form-group">
				<input type="NIK" class="form-control textbox" name="NIK" placeholder="NIK" required="">
			</div>
			<div class="form-group">
				<input type="password" class="form-control textbox" name="password" placeholder="Password" required="">
			</div>
			<div class="form-group">
			Pilih Loket
			<?php

			$con = mysqli_connect("localhost","root","","antrian_grapari");

			$sql = "SELECT no_loket FROM loket where status_loket IS NULL";
			$result = mysqli_query($con, $sql);

			echo "<select name='username'>";
			while ($row = mysqli_fetch_array($result)) {
			    echo "<option value='" . $row['no_loket'] ."'>" . $row['no_loket'] ."</option>";
			}
			echo "</select>";
			?>

			</div>
				<input type="submit" name="submit">
		</form>
		<!-- //switch -->
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&nbsp;</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- validify plugin -->
	<script src="js/validify.js"></script>
	<script>
		$("#demo").validify({
			onSubmit: function (e, $this) {
				$this.find('.alert').removeClass('hidden')
			},
			onFormSuccess: function (form) {
				console.log("Form is valid now!")
			},
			onFormFail: function (form) {
				console.log("Form is not valid :(")
			}
		});
		$("#demo").validify({
			errorStyle: "validifyError",
			successStyle: "validifySuccess",
			emailFieldName: "email",
			emailCheck: true,
			requiredAttr: "required",
		});
	</script>
	<!-- //validify plugin -->

</body>

</html>