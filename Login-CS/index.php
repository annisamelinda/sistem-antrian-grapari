<?php
        session_start();
        if(isset($_SESSION['NIK']))
        {
                header("location: dashboard.php");
        }
?>


<!DOCTYPE html>
<html>
<head>
<title>Login CS Pelayanan Pelanggan GraPARI Tasikmalaya</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">Login CS GraPARI Tasikmalaya </h1>
    <div class="w3layouts_main wrap">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=number] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;

    padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <form action="process_petugas.php" method="post">
    <label for="fname"></label>
    <input type="number" id="fname" name="NIK" placeholder="Enter Your NIK">

    <label for="lname"></label>
    <input type="text" id="lname" name="nama" placeholder="Enter Your Name">

    <label for="country">Loket</label>
	
            <?php

            $con = mysqli_connect("localhost","root","","antrian_grapari");

            $sql = "SELECT no_loket FROM pelayanan_loket where status_loket = 0 OR status_loket IS NULL";
            $result = mysqli_query($con, $sql);

            echo "<select id='country' name='no_loket'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['no_loket'] ."'>" . $row['no_loket'] ."</option>";
            }
            echo "</select>";
            ?>

    <input type="submit" name="submit" value="Login">
  </form>
</div>

</body>
</html>
