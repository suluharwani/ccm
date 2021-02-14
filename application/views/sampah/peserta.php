<?php
	foreach ($peserta as $row){
		$nama = $row->nama;
		$ktp = $row->ktp;
		$nama = $row->nama;
		$gender_o = $row->gender;
		$darah_option = $row->darah;
		$ttl = $row->ttl;
		$alamat = $row->alamat;
		$kota = $row->kota;
		$provinsi = $row->provinsi;
		$kategori_lomba_option = $row->kategori_lomba;
		$hp = $row->hp;
		$komunitas = $row->komunitas;
		$tgl = $row->tgl;
	}
if ($darah_option==1) {
	$darah = 'A';
}elseif ($darah_option==2) {
	$darah = 'B'; 
}elseif ($darah_option==3) {
	$darah = 'AB'; 
}elseif ($darah_option==4) {
	$darah = 'O';
} 
// }elseif ($gender_o==1) {
// 	$gender = 'Laki-laki'; 
// }elseif ($gender_o==2) {
// 	$gender = 'Perempuan'; 
if ($kategori_lomba_option==1) {
	$kategori_lomba = '5K RUN'; 
}elseif ($kategori_lomba_option==2) {
	$kategori_lomba = '10K RUN'; 
}elseif ($kategori_lomba_option==3) {
	$kategori_lomba = 'HALF MARATHON 21K'; 
}elseif ($kategori_lomba_option==4) {
	$kategori_lomba = 'FULL MARATHON 42K';
}
if ($gender_o==1) {
	$gender = 'Laki-laki'; 
}elseif ($gender_o==2) {
	$gender = 'Perempuan'; 
}
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Peserta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/peserta/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/bootstrap/<?php echo base_url()?>assets/peserta/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/fonts/font-awesome-4.7.0/<?php echo base_url()?>assets/peserta/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/animsition/<?php echo base_url()?>assets/peserta/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/peserta/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Data Peserta
				</span>

				<label class="label-input100" ">KTP: <?=$ktp?></label>
				<label class="label-input100" ">Nama: <?=$nama?></label>
				<label class="label-input100" >Gender: <?=$gender?></label>
				<label class="label-input100" >Gol. Darah: <?=$darah?></label>
				<label class="label-input100" >TTL: <?=$ttl?></label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message" disabled="">Alamat: <?=$alamat?></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" placeholder="First name" value="<?=$provinsi?>" disabled="">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" placeholder="Last name" value="<?=$kota?>" disabled="">
					<span class="focus-input100"></span>
				</div> 
				<label class="label-input100" for="first-name">Kategori Lomba: <?=$kategori_lomba?></label>
				<label class="label-input100" for="first-name">No HP: <?=$hp?></label>
				<label class="label-input100" for="first-name">Komunitas: <?=$komunitas?></label>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('<?php echo base_url()?>assets/peserta/images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="glyphicon glyphicon-calendar"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Tanggal Registrasi
						</span>

						<span class="txt3">
							<?=$tgl?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets/peserta/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/peserta/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/peserta/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
