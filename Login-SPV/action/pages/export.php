<?php 
//memanggil fungsi
include 'fungsi_excel.php';

include 'db.php';
//koneksi ke database dan jalankan query
ini_set('date.timezone', 'Asia/Jakarta');

if(isset($_POST["submit_daily"]))
 {
        $choosed_date = $_POST['bday'];
 

		$query = mysqli_query($mysql, "SELECT *from riwayat_antrian where tanggal_order='$choosed_date'");

		$rows = mysqli_num_rows($query);

		 if ($rows>0) 
		 
		 {

			$result = mysqli_query($mysql,"SELECT nomor_register, nomor_antrian, tanggal_order, id_customer, jam_diproses, jam_order, jam_selesai, jenis_pelayanan, status_antrian, no_loket, pl.NIK, nama FROM petugas pl JOIN riwayat_antrian pn ON pl.NIK = pn.NIK WHERE tanggal_order = '$choosed_date' ORDER BY no ASC");

			!$result?die(mysqli_error()):'';

			ini_set('date.timezone', 'Asia/Jakarta');

			$date = date('Y-m-d');
			//pengaturan nama file
			$namaFile = "report_".$choosed_date.".xls";
			//pengaturan judul data
			$judul = "DAFTAR ANTRIAN - SISTEM GRAPARI TELKOMSEL KARAWANG";
			//baris berapa header tabel di tulis
			$tablehead = 2;
			//baris berapa data mulai di tulis
			$tablebody = 3;
			//no urut data
			$nourut = 1;

			//penulisan header
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment;filename=".$namaFile."");
			header("Content-Transfer-Encoding: binary ");


			xlsBOF();
			 
			xlsWriteLabel(0,0,$judul);  

			$kolomhead = 0;
			xlsWriteLabel($tablehead,$kolomhead++,"NOMOR REGISTER");              
			xlsWriteLabel($tablehead,$kolomhead++,"NOMOR ANTRIAN");             
			xlsWriteLabel($tablehead,$kolomhead++,"LOKET");
			xlsWriteLabel($tablehead,$kolomhead++,"PETUGAS");              
			xlsWriteLabel($tablehead,$kolomhead++,"TANGGAL"); 
			xlsWriteLabel($tablehead,$kolomhead++,"JAM PESAN");             
			xlsWriteLabel($tablehead,$kolomhead++,"JAM DIPROSES");             
			xlsWriteLabel($tablehead,$kolomhead++,"JAM SELESAI");
			xlsWriteLabel($tablehead,$kolomhead++,"ID CUSTOMER");
			xlsWriteLabel($tablehead,$kolomhead++,"JENIS PELAYANAN");              
			xlsWriteLabel($tablehead,$kolomhead++,"STATUS");             


			while ($data = mysqli_fetch_array($result))
			{
			$kolombody = 0;

			//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
			xlsWriteLabel($tablebody,$kolombody++,$data['nomor_register']);
			xlsWriteLabel($tablebody,$kolombody++,$data['nomor_antrian']);
			xlsWriteLabel($tablebody,$kolombody++,$data['no_loket']);
			xlsWriteLabel($tablebody,$kolombody++,$data['nama']);
			xlsWriteLabel($tablebody,$kolombody++,$data['tanggal_order']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_order']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_diproses']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_selesai']);
			xlsWriteLabel($tablebody,$kolombody++,$data['id_customer']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jenis_pelayanan']);
			xlsWriteLabel($tablebody,$kolombody++,$data['status_antrian']);

			$tablebody++;
			$nourut++;
			}

			xlsEOF();
			exit();

		 }	 

		 else
		 {
			echo "<script language='javascript'>alert('Maaf antrian di tanggal tersebut kosong !'); document.location='dashboard-report.php'</script>";
		 }

 }

 elseif (isset($_POST["submit_month"])) {

        $choosed_month = $_POST['month'];

        $array_month = array("1"=>"Januari", "2"=>"Februari", "3"=>"Maret", "4"=>"April", "5"=>"Mei", "6"=>"Juni", "7"=>"Juli", "8"=>"Agustus", "9"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");

        $set_month = $array_month[$choosed_month];

		$query = mysqli_query($mysql, "SELECT *from riwayat_antrian where MONTH(tanggal_order)='$choosed_month'");

		$rows = mysqli_num_rows($query);

		 if ($rows>0) 
		 
		 {

			$result = mysqli_query($mysql,"SELECT nomor_register, nomor_antrian, tanggal_order, id_customer, jam_diproses, jam_order, jam_selesai, jenis_pelayanan, status_antrian, no_loket, pl.NIK, nama FROM petugas pl JOIN riwayat_antrian pn ON pl.NIK = pn.NIK WHERE MONTH(tanggal_order)='$choosed_month' ORDER BY no ASC");

			!$result?die(mysqli_error()):'';

			$date = date('Y-m-d');
			//pengaturan nama file
			$namaFile = "report_".$set_month.".xls";
			//pengaturan judul data
			$judul = "DAFTAR ANTRIAN - SISTEM GRAPARI TELKOMSEL KARAWANG";
			//baris berapa header tabel di tulis
			$tablehead = 2;
			//baris berapa data mulai di tulis
			$tablebody = 3;
			//no urut data
			$nourut = 1;

			//penulisan header
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment;filename=".$namaFile."");
			header("Content-Transfer-Encoding: binary ");


			xlsBOF();
			 
			xlsWriteLabel(0,0,$judul);  

			$kolomhead = 0;
			xlsWriteLabel($tablehead,$kolomhead++,"NOMOR REGISTER");              
			xlsWriteLabel($tablehead,$kolomhead++,"NOMOR ANTRIAN");             
			xlsWriteLabel($tablehead,$kolomhead++,"LOKET");
			xlsWriteLabel($tablehead,$kolomhead++,"PETUGAS");              
			xlsWriteLabel($tablehead,$kolomhead++,"TANGGAL"); 
			xlsWriteLabel($tablehead,$kolomhead++,"JAM PESAN");             
			xlsWriteLabel($tablehead,$kolomhead++,"JAM DIPROSES");             
			xlsWriteLabel($tablehead,$kolomhead++,"JAM SELESAI");
			xlsWriteLabel($tablehead,$kolomhead++,"ID CUSTOMER");
			xlsWriteLabel($tablehead,$kolomhead++,"JENIS PELAYANAN");              
			xlsWriteLabel($tablehead,$kolomhead++,"STATUS");             


			while ($data = mysqli_fetch_array($result))
			{
			$kolombody = 0;

			//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
			xlsWriteLabel($tablebody,$kolombody++,$data['nomor_register']);
			xlsWriteLabel($tablebody,$kolombody++,$data['nomor_antrian']);
			xlsWriteLabel($tablebody,$kolombody++,$data['no_loket']);
			xlsWriteLabel($tablebody,$kolombody++,$data['nama']);
			xlsWriteLabel($tablebody,$kolombody++,$data['tanggal_order']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_order']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_diproses']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jam_selesai']);
			xlsWriteLabel($tablebody,$kolombody++,$data['id_customer']);
			xlsWriteLabel($tablebody,$kolombody++,$data['jenis_pelayanan']);
			xlsWriteLabel($tablebody,$kolombody++,$data['status_antrian']);

			$tablebody++;
			$nourut++;
			}

			xlsEOF();
			exit();

		 }	 

		 else
		 {
			echo "<script language='javascript'>alert('Maaf antrian di bulan tersebut kosong !'); document.location='dashboard-report.php'</script>";
		 }

 }

else
  {
          echo "Null";
  }    

?>