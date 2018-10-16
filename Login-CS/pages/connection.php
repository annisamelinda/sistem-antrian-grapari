<?php


 $host="localhost";
 $user="root";
 $password="";
 $db ="wedding"; 


 $mysql = mysqli_connect($host,$user,$password,$db) or die ('koneksi gagal');

 if(!$mysql)
 {
 	echo "Eror Mba. Cek Koneksi Database !";
 }

?>
