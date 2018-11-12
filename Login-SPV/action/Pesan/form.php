
<!doctype html>
<html lang="en">
<head>
<title>NANDAN WEDDING</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ordering Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="../js/otomasi.js"></script>
<script type="text/javascript" src="../js/otomasimenu.js"></script>

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>

<h1 class="header-agileits w3layouts w3 w3l agileinfo">FORM PEMESANAN</h1>
<div class="content-w3ls">
	<form name='catering' action="http://localhost/WebNandanWedding/order_process.php" enctype='multipart/form-data' method="post">
		<div class="form-wthree1 wthree w3-agileits agileits-w3layouts agile w3-agile">		
			
			<div class="form-control"> 
				<label class="header">NAMA PEREMPUAN  <span></span></label>
				<input type="text" id="namaperempuan" name="nama_perempuan" placeholder="Nama Perempuan" title="Masukan Nama Perempuan" required="">
			</div>
			
			<div class="form-control"> 
				<label class="header">NAMA LAKI-LAKI <span></span></label>
				<input type="text" id="namapria" name="nama_pria" placeholder="Nama Laki-laki" title="Masukan Nama Laki-laki" required="">
			</div>
			
			          <div class="form-control">
			            <label class="header">ALAMAT RUMAH <span></span></label>
				<input type="text" id="alamatrumah" name="alamat" placeholder="Alamat Rumah" title="Masukan Alamat Rumah" required="">
		  </div>
		  
		  <div class="form-control">
                     <label class="header">NOMOR HP <span></span></label>
                     <input type="number" id="nohp" name="no_hp" placeholder="Masukan Nomor HP" title="Masukan Nomor HP" required="">
                   </div>
			
					 <div class="form-control">
		    <label class="header">TGL PERNIKAHAN <span></span></label>
		    <input type="date" id="alamatrumah" name="tgl_pernikahan" value="" size="100">
		  </div>
			
		       <div class="form-control">
				<label class="header">TEMPAT RESEPSI <span></span></label><br>
				<label class="header">Gedung</label><input type="radio" onclick="javascript:yesnoGedung();" name="yesno" id="yesCheck" value="gedung"><br>
				<label class="header">Rumah</label><input type="radio" onclick="javascript:yesnoGedung();" name="yesno" id="noCheck" value="rumah">
				</div>
		
			  <div class="form-control" id="ifYes" style="display:none">
                <label class="header" >GEDUNG <span></span></label>
              <select name="gedung">
			  <option value="" selected>Pilih Gedung Resepsi</option>
				<option value="Graha Asia">Graha Asia</option>
				<option value="Hotel Horison">Hotel Horison</option>
				<option value="Ht. Sumantri">Ht. Sumantri</option>
				<option value="Hotel Mandalawangi">Hotel Mandalawangi</option>
				<option value="Hotel Santika">Hotel Santika</option>
				<option value="Aulia Hall Centre">Aulia Hall Centre</option>
				<option value="Lainnya">Lainnya</option>
              </select>
              </div>
			  
			       <div class="form-control" id="ifYesla" style="display:none">
                     <label class="header">GEDUNG LAINNYA <span></span></label>
                     <input type="text" id="alamatrumah" name="gedung_lain" placeholder="Masukan Gedung Lainnya" title="Masukan Gedung Lainnya">
                   </div>

				  
				  <div class="form-control">
                    <label class="header">DEKORASI <span>:</span></label>
                    <select name="dekorasi" required>
                      <option value="Pilih Dekorasi" selected>Pilih Dekorasi</option>
                      <option value="Dekorasi 1">Dekorasi 1</option>
                      <option value="Dekorasi 2">Dekorasi 2</option>
                      <option value="Dekorasi 3">Dekorasi 3</option>
                      <option value="Dekorasi 4">Dekorasi 4</option>
                      <option value="Dekorasi 5">Dekorasi 5</option>
                      <option value="Dekorasi 6">Dekorasi 6</option>
                      <option value="Dekorasi 7">Dekorasi 7</option>
                      <option value="Dekorasi 8">Dekorasi 8</option>
                      <option value="Dekorasi 9">Dekorasi 9</option>
					  <option value="Dekorasi 10">Dekorasi 10</option>
					  <option value="Dekorasi 11">Dekorasi 11</option>
					  <option value="Dekorasi 12">Dekorasi 12</option>
                    </select>
                  </div>
			       
				   <div class="form-control">
                    <label class="header">DRESS AKAD <span>:</span></label>
                    <select name="dress_akad" required>
                      <option value="Pilih Dress Akad" selected>Pilih Dress Akad</option>
                      <option value="Dress Akad With Gold Siger">Dress Akad With Gold Siger</option>
                      <option value="Dress Akad With Silver Siger">Dress Akad With Silver Siger</option>
                      <option value="Dress Akad With Crown">Dress Akad With Crown</option>
					  <option value="Dress Akad Without Hijab">Dress Akad Without Hijab</option>
					  <option value="Dress Akad Siger Without Hijab">Dress Akad Siger Without Hijab</option>
                    </select>
                  </div>
				  
				  
				  
				  <div class="form-control">
                    <label class="header">DRESS RESEPSI <span>:</span></label>
                    <select name="dress_resepsi" required>
                      <option value="Pilih Dress Resepsi" selected>Pilih Dress Resepsi</option>
                      <option value="Dress Resepsi Red">Dress Resepsi Red</option>
                      <option value="Dress Resepsi Gold Pink">Dress Resepsi Gold Pink</option>
                      <option value="Dress Resepsi Choco Green">Dress Resepsi Choco Green</option>
					  <option value="Dress Resepsi Maroon">Dress Resepsi Maroon</option>
					  <option value="Dress Resepsi Blue Ice">Dress Resepsi Blue Ice</option>
					  <option value="Dress Resepsi Tosca Choco">Dress Resepsi Tosca Choco</option>
					  <option value="Dress Resepsi Sweet Choco">Dress Resepsi Sweet Choco</option>
                    </select>
                  </div>

		</div>
		
		<div class="form-wthree2 wthree w3-agileits agileits-w3layouts agile w3-agile">
		
		 	<div class="form-control"> 
		
			                     <div class="form-control" >
                				  <label class="header">Menu Catering<span></span></label><br>
							  	  <select id="status" name="paket_catering" title='Silahkan pilih Catering' onChange='showSub(this)'>
								  <option value=0 selected>Pilih Catering</option>
                                  <option value="menuaster">Menu Aster</option>
                                  <option value="menulavender">Menu Lavender</option>
                                  <option value="menuviolet">Menu Violet</option>
                                  <option value="menutulip">Menu Tulip</option>
                                  <option value="menujasmine">Menu Jasmine</option>
                                  <option value="menuveronica">Menu Veronica</option>
                                  <option value="menuorchid">Menu Orchid</option>
                                  <option value="menuedelweis">Menu Edelweis</option>
                                </select>
                           		</div>

			       	<div class="form-control" id="betul" name="betul" style="display:none" >
                     <label class="header">jml catering <span></span></label>
                      <input type="number" name="jml_catering" placeholder="masukan jumlah porsi catering" id="alamatrumah" min=500 required="">
                    </div>
		
			  <p>&nbsp;    </p>
		  	    <div class="form-control" id="ayam" name="ayam" style="display:none">
				<label class="header">menu daging ayam <span></span></label>
				<select name="daging_ayam" required>
					<option value="Pilih Menu Daging Ayam" selected>Pilih Menu Daging Ayam</option>
					<option value="Ayam Jujut">Ayam Jujut</option>
					<option value="Ayam Jujut Rendang">Ayam Jujut Rendang</option>
					<option value="Chicken Katsu">Chicken Katsu</option>
					<option value="Ayam Opor">Ayam Opor</option>
					<option value="Ayam Rolade">Ayam Rolade</option>
					<option value="Ayam Teriyaki">Ayam Teriyaki</option>
					<option value="Bistik Ayam">Bistik Ayam</option>
					<option value="Ayam Saus Putih">Ayam Saus Putih</option>
					<option value="Chicken Cordon Bleu">Chicken Cordon Bleu</option>
					<option value="Cah Ayam Jamur">Cah Ayam Jamur</option>
					<option value="Lainnya">Lainnya</option>
				</select>
				</div>
			
                  <div class="form-control" id="daging" name="daging" style="display:none" >
                    <label class="header">MENU DAGING SAPI <span></span></label>
                    <select name="daging_sapi" required>
                    <option value="Pilih Menu Daging Sapi" selected>Pilih Menu Daging Sapi</option>
					<option value="Rendang">Rendang</option>
					<option value="Rolade">Rolade</option>
					<option value="Semur">Semur</option>
					<option value="Sapi lada hitam">Sapi lada hitam</option>
					<option value="Sate">sate</option>
					<option value="Gepuk">gepuk</option>
					<option value="Gulai">gulai</option>
					<option value="Sambal Goreng Ati">Sambal Goreng Ati</option>
					<option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
				  
				  
                  <div class="form-control" id="ikan" name="ikan" style="display:none" >
                    <label class="header">MENU IKAN</label>
                    <select name="ikan" required>
                      <option value="Pilih Menu Ikan" selected>Pilih Menu Ikan</option>
                      <option value="Gurame Asam Manis">Gurame Asam Manis</option>
                      <option value="Gurame Acar Kuning">Gurame Acar Kuning</option>
                      <option value="Gurame Pepes">Gurame Pepes</option>
					  <option value="Gurame Saus Tiram">Gurame Saus Tiram</option>
					  <option value="Udang Saus Tiram">Udang Saus Tiram</option>
					  <option value="Udang Asam Manis">Udang Asam Manis</option>
					  <option value="Udang Brokoli">Udang Brokoli</option>
					 <option value="Lainnya">Lainnya</option>
					  
                    </select>
                  </div>
                  <div class="form-control" id="kuah" name="kuah" style="display:none" >
                    <label class="header">SAYUR BERKUAH <span></span></label>
                    	<select name="sayur_berkuah" required>
						<option value="Pilih Sayur Berkuah" selected>Pilih Sayur Berkuah</option>
                      	<option value="Sop Ayam" selected>Sop Ayam</option>
                      	<option value="Sop Sapi" selected>Sop Sapi</option>
                     	 <option value="Sop Madura" selected>Sop Madura</option>
                      	<option value="Sop Bola Ikan" selected>Sop Bola Ikan</option>
                      	<option value="Sop Kimlo" selected>Sop Kimlo</option>
                      	<option value="Sop Buntut" selected>Sop Ayam</option>
					  	<option value="Lainnya">Lainnya</option>
                    	</select>
                  </div>
                  
          	    <div class="form-control" id="tanpakuah" name="tanpakuah" style="display:none" >
                <label class="header">SAYUR TANPA KUAH </label>
            	  <select name="sayur_tanpakuah" required>
					<option value="Pilih Sayur Tanpa Kuah" selected>Pilih Sayur Tanpa Kuah</option>
					<option value="Kentang Mustofa">Kentang Mustofa</option>
					<option value="Semi Kulit">Semi Kulit</option>
					<option value="Gado-gado">Gado-gado</option>
					<option value="Pakcoy Tahu Jagung Manis">Pakcoy Tahu Jagung Manis</option>
					<option value="Semi Cumi">Semi Cumi</option>
					<option value="Kentang Dadu Ati Petai">Kentang Dadu Ati Petai</option>
					<option value="Mie Goreng">Mie Goreng</option>
					<option value="Capcay">Capcay</option>
					<option value="Krecek Kacang">Krecek Kacang</option>
					<option value="Cah Brokoli Tahu">Cah Brokoli Tahu</option>
					<option value="Cah Jamur Tahu">Cah Jamur Tahu</option>
					<option value="Cah Jagung Sosis">Cah Jagung Sosis</option>
					<option value="Lainnya">Lainnya</option>
				  </select>
              </div>

          	    <!--<div class="form-control" id="dessert" name="dessert" style="display:none" >
                <label class="header">Menu Dessert </label>
            	  <select name="dessert" required>
					<option value="Pilih Dessert" selected>Pilih Dessert</option>
					<option value="ice cream">Ice Cream</option>
					<option value="buah potong">Buah Potong</option>
					<option value="aneka jus">Aneka Jus</option>
					<option value="Es Cendol">Es Cendol</option>
					<option value="Sop Buah">Sop Buah</option>
				  </select>
              </div>
			  
			    <div class="form-control" id="food" name="food" style="display:none" >
                <label class="header">Menu Food Stall </label>
            	  <select name="foodstall" required>
					<option value="Pilih Food Stall" selected>Pilih Food Stall</option>
					<option value="mie bakso tasik">Ice Cream</option>
					<option value="mie bakso malang">Buah Potong</option>
					<option value="mie kocok">Aneka Jus</option>
					<option value="siomay">Es Cendol</option>
					<option value="sate ayam lontong">Sop Buah</option>
				  </select>
             	 </div>-->
             				      
                  <div class="form-control">
              <label class="header"></label>
            </div>
		  </div>
	
			</div>

		<div class="clear">
		  <div class="form-control">
            <label class="enquiry">Menu Lainnya <span>:</span></label>
            <textarea id="message" name="menu_lain" placeholder="Your Comments" title="Please enter Your Comments"></textarea>
            <div class="clear"></div>
	      </div>
		</div>
		<div class="form-control">
		  <div class="clear"></div>
		</div>
		<div class="form-control last">
			<input type="submit" name="submit" class="register" value="DAFTAR">
			<input type="reset" class="reset" value="BATAL">
			<div class="clear"></div>
		</div>	
	</form>
</div>
<p class="copyright w3layouts w3 w3l agileinfo">KEMBALI KE HALAMAN UTAMA  <a href="../index.html" >KLIK DISINI</a></p>
</body>
</html>