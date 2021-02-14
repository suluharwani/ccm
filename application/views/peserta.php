<?php
	foreach ($peserta as $row){
		$no_daftar = $row->no_daftar;
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
		$darurat = $row->darurat;
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

	<link href="<?php echo base_url()?>assets/template_web/css/bootstrap.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/template_web/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"></script>
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
				<label class="label-input100" ">No. Pendaftaran: <?=$no_daftar?></label>
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
				<label class="label-input100" for="first-name">No HP Darurat: <?=$darurat?></label>
				<label class="label-input100" for="first-name">Komunitas: <?=$komunitas?></label>
				
				<div class="container-contact100-form-btn">
					<div class="alert alert-danger" role="alert">
						Anda <strong><i>WAJIB</i></strong> membayar biaya pendaftaran senilai <strong><i>Rp. xxx</i></strong> untuk kategori perlombaan <strong><i>JENIS KATEGORI</i></strong>. Terima Kasih
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<button type="button" class="contact100-form-btn" data-toggle="modal" data-target="#metpem">
						Bayar
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

	<!-- Modal -->
	<div class="modal fade" id="metpem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Pilih Metode Pembayaran</i></h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Transfer Bank</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/mandiri.png"> Transfer Bank Mandiri</a> <!-- No. Rek: 1510000333770 a.n CV ANNAHL -->
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bri.png"> Transfer Bank BRI</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bca.png"> Transfer Bank BCA</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bni.png"> Transfer Bank BNI</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Virtual Account</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/mandiri.png"> Mandiri Virtual Account</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bca.png"> BCA Virtual Account</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bni.png"> BNI Virtual Account</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Pembayaran Instan</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/ecash.png"> Mandiri E-Cash</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/epay.png"> BRI E-Pay</a>
                      <a href="#" class="list-group-item"><img width="30" src="<?php echo base_url()?>assets/template_web/images/bank/klik.png"> Klik BCA</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="button" name="submit" value="submit" class="btn btn-success">Setuju</button>
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
