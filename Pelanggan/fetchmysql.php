<?php
$con=mysqli_connect("localhost","root","","antrian_grapari");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id_customer, nama FROM customer where id_customer='Can122'";
$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
printf ("%s (%s)\n",$row["id_customer"],$row["nama"]);

// Free result set
echo $row["id_customer"];
mysqli_free_result($result);

mysqli_close($con);
?>