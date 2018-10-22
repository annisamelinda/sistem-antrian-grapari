<?php


 $host="localhost";
 $user="root";
 $password="";
 $db ="antrian_grapari"; 


 $mysql = mysqli_connect($host,$user,$password,$db) or die ('koneksi gagal');

 if(!$mysql)
 {
 	echo "Eror Mba. Cek Koneksi Database !";
 }

?>
