<?php 

error_reporting(0);

ini_set('display_errors', 0);

require 'db.php';

ini_set('date.timezone', 'Asia/Jakarta');

$date = date('Y-m-d');

$day_before = date( 'Y-m-d', strtotime( $date . ' -1 day' ) );  //tanggal sebelumnya

$data = mysqli_query($con,"select * from antrian where tanggal_order < '$date'");

$cek = mysqli_num_rows($data);


if($cek > 0)
{



	$delete_table = mysqli_query($con, "delete from antrian where tanggal_order < '$date'");
	
	if($delete_table)
	{
		$reset_table=mysqli_query($con, "ALTER TABLE antrian AUTO_INCREMENT = 1");

		if($reset_table)
		{

		}

		else
		{
			echo "Maaf ada error";
		}

	}
	else
	{
		echo "Gagal";
	}

}

else if ($cek == 0) 

{
	
}

else
{
	echo "Galat";
}

?>