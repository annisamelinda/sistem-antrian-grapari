<?php

error_reporting(0);
ini_set('display_errors', 0);

$con = mysqli_connect("localhost","root","","antrian_grapari");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>