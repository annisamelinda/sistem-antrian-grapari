<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<?php

require('check_date.php');

?>

<!DOCTYPE html>
<html>
<head>
<title>Selamat Datang Di Halaman Pendaftaran Online Pelayanan Simcard Grapari Telkomsel Tasikmalaya</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript">

  function validasi_input(form){

  var mincar = 10;
  var maxcar = 12;
  if (form.no_telp.value.length < mincar){
    alert("No HP Minimal 10 Karater!");
    form.no_telp.focus();
    return (false);
  }

  else if (form.no_telp.value.length > maxcar){
    alert("No HP Maksimal 12 Karater!");
    form.no_telp.focus();
    return (false);
  }

   //return (true);

/*  else if (form.no_telp.value != "")
  {
	  var x = (form.no_telp.value);
	  var status = true;
	  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	  for (i=0; i<=x.length-1; i++)
	  {
	  if (x[i] in list) cek = true;
	  else cek = false;
	 status = status && cek;
	  }
	  if (status == false)
	  {
	  alert("Telp harus angka!");
	  form.no_telp.focus();
	  return false;
  	  }
  }
*/

  else if(form.no_telp.value < 0)
  {
    alert("Tidak boleh ada minus");
    form.no_telp.focus();
    return (false);
  }

  else
  {
  	  return (true);
  }

  }
</script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">FORM PENDAFTARAN PELAYANAN SIMCARD </h1>
    <div class="w3layouts_main wrap">

<?php


ini_set('date.timezone', 'Asia/Jakarta');
$time=date('H:i');
$date = date("Y-m-d");
//Set this to FALSE until proven otherwise.
$weekendDay = false;
 
//Get the day that this particular date falls on.
$day = date("D", strtotime($date));
//echo 'Indonesian Timezone: ' .$time; 
if($day == 'Sat' || $day == 'Sun'){
    //Set our $weekendDay variable to TRUE.
    $weekendDay = true;
}

if($weekendDay)
{
		if($time>'11:00' AND $time<'08:00')
		{
				echo  '<h3 align="center"> Mohon maaf, diluar jam operasi </h3>';
		}

		else
		{
		echo '
			  <h3>Silahkan Isi Form Berikut Untuk Mendapatkan Nomor Antrian </h3>
			    <form action="process.php" method="post" class="agile_form" onsubmit="return validasi_input(this)">
				  <h2>Jenis Pelayanan Simcard </h2>
					 <ul class="agile_info_select">
						 <li><input type="radio" name="jenis_pelayanan" value="ganti_kartu" id="excellent"> 
						 	  <label for="excellent">Ganti Kartu (Kartu Hilang, Migrasi 4G atau Kartu Hilang) </label>
						      <div class="check w3"></div>
						 </li>
						 <li><input type="radio" name="jenis_pelayanan" value="deaktivasi_kartu" id="good" checked="checked"> 
							  <label for="good"> Deaktivasi Kartu Halo </label>
						      <div class="check w3ls"></div>
						 </li>
						 <li><input type="radio" name="jenis_pelayanan" value="aktivasi_kartu" id="neutral"> 
							 <label for="neutral">Aktivasi Prabayar Baru </label>
						     <div class="check wthree"></div>
						 </li>
					 </ul>	  
					<h2>Masukan Nama dan Nomor Handphone </h2>
					<input type="text" placeholder="Nama" name="nama" required="" />
					<input type="number" placeholder="Nomor Handphone" name="no_telp" required="" minlength=10 minlength=12 />
					<input type="submit" name="submit" value="Daftar" class="agileinfo" />
			  </form>
		';

		}
} 

else
{
		if($time>'23:00' ||  $time<'08:00')
		{
				echo  '<h3 align="center"> Mohon maaf, diluar jam operasi </h3>';
		}

		else
		{
		echo '
			  <h3>Silahkan Isi Form Berikut Untuk Mendapatkan Nomor Antrian </h3>
			    <form action="process.php" method="post" class="agile_form" onsubmit="return validasi_input(this)">
				  <h2>Jenis Pelayanan Simcard </h2>
					 <ul class="agile_info_select">
						 <li><input type="radio" name="jenis_pelayanan" value="ganti_kartu" id="excellent" required> 
						 	  <label for="excellent">Ganti Kartu (Kartu Hilang, Migrasi 4G atau Kartu Hilang) </label>
						      <div class="check w3"></div>
						 </li>
						 <li><input type="radio" name="jenis_pelayanan" value="deaktivasi_kartu" id="good" required> 
							  <label for="good"> Deaktivasi Kartu Halo </label>
						      <div class="check w3ls"></div>
						 </li>
						 <li><input type="radio" name="jenis_pelayanan" value="aktivasi_kartu" id="neutral" required> 
							 <label for="neutral">Aktivasi Prabayar Baru </label>
						     <div class="check wthree"></div>
						 </li>
					 </ul>	  
					<h2>Masukan Nama dan Nomor Handphone </h2>
					<input type="text" placeholder="Nama" name="nama" required="" />
					<input type="number" placeholder="Nomor Handphone" name="no_telp" required=""  minlength=10 maxlength=12 />
					<input type="submit" name="submit" value="Daftar" class="agileinfo" />
			  </form>
		';

		}
}

?>
	</div>
	<div class="agileits_copyright text-center">
			<p>&nbsp;</p>
	</div>
</body>
</html>