<?php 
//session_start();

/*require('db.php');

$_SESSION['login_petugas_NIK']=$NIK;
$query_cs = mysqli_query($con, "update pelayanan_loket set status_loket = 0 where no_loket='$NIK'");
if($query_cs)
unset($_SESSION['login_petugas_NIK']);
if(session_destroy()) // Destroying All Sessions
{
header("location:index.php"); // Redirecting To Home Page
}*/
?>
<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location: index.php");
?> 
