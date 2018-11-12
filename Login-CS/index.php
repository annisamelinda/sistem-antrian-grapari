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
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h1 align="center">Selamat Datang Di Halaman Login Costumer Service GraPARI Tasikmalaya</h1>

<div class="container">
  <form action="process_petugas.php" method="post">
    <label for="fname">NIK</label>
    <input type="number" id="fname" name="NIK" placeholder="Your name..">

    <label for="lname">Nama</label>
    <input type="text" id="lname" name="nama" placeholder="Your last name..">

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

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
