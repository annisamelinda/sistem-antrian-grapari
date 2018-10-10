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

	include 'db.php';
	$session_NIK = $_SESSION['NIK'];

	$sql_view_loket="SELECT pl.NIK, nama, no_loket, access_time, status_loket FROM petugas pl JOIN pelayanan_loket pn ON pl.NIK = pn.NIK where pl.NIK ='$session_NIK'";

	$result=mysqli_query($con,$sql_view_loket);

	$row=mysqli_fetch_assoc($result);
		
	mysqli_free_result($result);

	$tag_loket = $row["no_loket"];

	$null_loket="UPDATE pelayanan_loket SET status_loket = 0 WHERE no_loket = '$tag_loket' AND NIK = '$session_NIK';";

	$to_nol=mysqli_query($con,$null_loket); 

	if($to_nol)
	{
	// menghapus semua session
	session_destroy();
	 
	// mengalihkan halaman sambil mengirim pesan logout
	header("location: index.php");
	}

	else
	{
		echo "Gagal Logout";
	}	
?> 
