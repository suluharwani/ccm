
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description: Central Celebes Marathon" content="">
    <meta name="author: Willy Wahyu" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Central Celebes Marathon</title>

    <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template_web/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/datepicker.js"></script>
  </head>


  <body>

      <!-- NAVBAR-->

        <nav class="navbar nav-bar navbar-default navbar-fixed-top">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <p align="center" style="padding-top: 23px;">
                    <a class="font" href="#" style="font-size: 20px; color: #fff; text-decoration: none;">Central Celebes Marathon</a>
                  </p>
                </div>
              <div class="col-lg-4"></div>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-default navbar-fixed-top nav-bar2" style="margin-top: 70px; color: red;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#about">PROFIL</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENT<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EVENT 1</a></li>
                    <li><a href="#">EVENT 2</a></li>
                    <li><a href="#">EVENT 3</a></li>
                  </ul>
                </li>
                <li><a href="#about">PESERTA</a></li>
                <li><a href="#about">JADWAL KEGIATAN</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html">DAFTAR</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--/NAVBAR-->


    <!-- Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url()?>assets/template_web/images//slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url()?>assets/template_web/images//slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url()?>assets/template_web/images//slide3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!--Halaman Pembuka-->
    <section class="pembuka">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 70px; margin-bottom: 70px;" align="center">
            <div class="row">
            <h2 style="color: #455A64;">KATEGORI PERLOMBAAN</h2>
            <hr style="border-color: #F44336; border-width: 3px; margin-top: 30px; margin-bottom: 70px;" width="17%">

                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar.png">
                  <a href="#1" class="thumbnail" style="width: 262px; background-color: #FFC107; color: #fff; text-decoration: none; font-size: 30px;">
                    5K RUN
                  </a>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar.png">
                  <a href="#2" class="thumbnail" style="width: 260px; background-color: #2196F3; color: #fff; text-decoration: none; font-size: 30px;">
                    10K RUN
                  </a>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar.png">
                  <a href="#3" class="thumbnail" style="width: 262px; background-color: #4CAF50; color: #fff; text-decoration: none; font-size: 30px;">
                    HM 21K
                  </a>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar.png">
                  <a href="#4" class="thumbnail" style="width: 262px; background-color: #F44336; color: #fff; text-decoration: none; font-size: 30px;">
                    FM 42K
                  </a>
                </div>

            </div>
          </div>
        </div>
    </section>

    <!--Halaman Counting Down -->
    <section class="isi">
        <div class="container">
          <div class="col-lg-12" style="margin-bottom: 70px;" align="center">
            <h2 style="color: #455A64;">HARI PELAKSANAAN</h2>
            <hr style="border-color: #F44336; border-width: 3px; margin-top: 30px; margin-bottom: 70px;" width="17%">

            <div class="col-lg-3"></div>
            <div class="col-lg-1">
              <div class="time thumbnail glyphicon glyphicon-calendar" style="color: #F44336;"></div>
            </div>
            <div class="col-lg-1">
              <div id="minggu" class="time thumbnail" style="color: #2196F3;"></div>
              <div class="labeltime thumbnail" style="color: #fff; background-color: #2196F3;">MINGGU</div>
            </div>
            <div class="col-lg-1">
              <div id="hari" class="time thumbnail" style="color: #4CAF50;"></div>
              <div class="labeltime thumbnail" style="color: #fff; background-color: #4CAF50;">HARI</div>
            </div>
            <div class="col-lg-1">
              <div id="jam" class="time thumbnail" style="color: #FFC107;"></div>
              <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">JAM</div>
            </div>
            <div class="col-lg-1">
              <div id="menit" class="time thumbnail" style="color: #FFC107;"></div>
              <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">MENIT</div>
            </div>
            <div class="col-lg-1">
              <div id="detik" class="time thumbnail" style="color: #FFC107;"></div>
              <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">DETIK</div>
            </div>
            <div class="col-lg-3"></div>
              <script type="text/javascript">
                $('#minggu').countdown('2018/04/15', function(event) {
                  $(this).html(event.strftime('%w'));
                });
                $('#hari').countdown('2018/04/15', function(event) {
                  $(this).html(event.strftime('%d'));
                });
                $('#jam').countdown('2018/04/15', function(event) {
                  $(this).html(event.strftime('%H'));
                });
                $('#menit').countdown('2018/04/15', function(event) {
                  $(this).html(event.strftime('%M'));
                });
                $('#detik').countdown('2018/04/15', function(event) {
                  $(this).html(event.strftime('%S'));
                });
              </script>
          </div>
          <hr style="border-color: #F44336; border-width: 2px; margin-top: 30px; margin-bottom: 70px;" width="100%">
          <div class="col-lg-12" align="center">
            <form  method="POST">
            <div class="col-lg-6">
              <h2 style="color: #455A64;">PENDAFTARAN</h2>
              <hr style="border-color: #F44336; border-width: 3px; margin-top: 30px; margin-bottom: 70px;" width="17%">

              <div class="alert alert-danger" role="alert"><strong>Maaf</strong> untuk sementara fitur <strong>DAFTAR</strong> belum dapat digunakan. Terima kasih atas perhatiannya.</div>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="ktp" placeholder="No. KTP" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="nama" placeholder="Nama" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>

              <?php
                $options_kelamin = array(
        ''         => '-- Jenis Kelamin --',
        '1'          => 'Laki-laki',
        '2'         => 'Perempuan'
                );

        $gender = array('');
        echo form_dropdown('gender', $options_kelamin,'','class="form-control"');

                ?>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></span>

                <?php
                $options_darah = array(
        ''         => '-- Gol. Darah --',
        '1'          => 'A',
        '2'         => 'B',
        '3'        => 'AB',
        '4'        => 'O',
                );

        $darah = array('');
        echo form_dropdown('darah', $options_darah,'','class="form-control"');

                ?>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></span>
                <script type="text/javascript">
               $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
                </script>  
               <input type="text" name="ttl" class="form-control input-group date" data-provide="datepicker" placeholder="Provinsi" aria-describedby="sizing-addon2" required="" value="01/01/1990">
               <div class="input-group-addon ">
              <span class="glyphicon glyphicon-th"></span>
              </div>
              </div>
             
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
                <textarea type="text" class="form-control" name="alamat" placeholder="Alamat" aria-describedby="sizing-addon2" required=""></textarea>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="kota" placeholder="Kota" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
             <?php
                $options_lomba = array(
        ''         => '-- Kategori Lomba --',
        '1'          => '5K Run',
        '2'         => '10K Run',
        '3'        => 'Half Marathon 21K<',
        '4'        => 'Full Marathon 42K',
                );

        $kategori_lomba = array('');
        echo form_dropdown('kategori_lomba', $options_lomba,'','class="form-control"','required=""');

                ?>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="hp" placeholder="No. Handphone" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="komunitas" placeholder="Komunitas" aria-describedby="sizing-addon2">
              </div>
              <br>

              <button type="reset"  class="btn btn-warning">BATAL</button>
              <button type="submit" name="submit" value="submit" class="btn btn-success" >DAFTAR</button>
            </div>
            </form>
            <div class="col-lg-6">
              
            </div>
          </div>
        </div>
    </section>


 

        <section class="level">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 70px; margin-bottom: 50px;" align="center">
            <div class="row">
            <h2 style="margin-bottom: 70px; color: #455A64;">Our Activities</h2>

                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo base_url()?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                </div>

            </div>
          </div>
        </div>
    </section>

      <!-- FOOTER -->
      <section class="kontak">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 70px; margin-bottom: 30px;">
            <div class="row">

              <div class="col-lg-4">
                <p align="left"><b>Contact Us</b></p>
                <p style="margin-bottom: 30px;">
                  <a style="color: #fff; text-decoration: none;" href="#alamat">Alamat: Jln. Setia Budi No. 61A, Kota Palu.</a><br>
                  <a class="select2" href="tel:+6282194948781">Telp: 082194948781</a><br>
                  <!--<a class="select2" href="fax:#fax">Fax: 424xxx Kode Pos 4xxx</a><br>-->
                  <a class="select2" href="mailto:centralcelebesmarathon@gmail.com?Subject=" target="_top">E-mail: centralcelebesmarathon@gmail.com</a>
                </p>
              </div>

              <div class="col-lg-4" align="center">
                <p><b>Follow Us</b></p>
                <p style="margin-bottom: 30px;">
                  <a href="https://web.facebook.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm1.png" style="width: 14px; height: 30px; margin-right: 5px;"></a>

                  <!--<a href="https://twitter.com/celebessoftware" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm2.png" style="width: 35px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>-->

                  <a href="https://www.instagram.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm3.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

                  <!--<a href="http://line.me/R/ti/p/%40eqf6209h" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm4.png" style="width: 30px; height: 30px; margin-left: 5px;"></a>-->
                </p>
              </div>

              <div class="col-lg-4">
                <p><b>Useful Links</b></p>
                <p>
                  &#9658; <a class="select2" href="#alamat">About Us</a><br>
                  &#9658; <a class="select2" href="#FAQ" target="_top">FAQ</a><br>
                  &#9658; <a class="select2" href="#portofolio">Portofolio</a><br>
                  &#9658; <a class="select2" href="#blog">Blog</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </section>

      <footer>
      <section class="copy">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 12px;">
            <div class="row">
              <p class="pull-right">
                <a href="#" class="select2">Back to top</a>
              </p>
              <p style="margin-left: 14px;">
                &copy; 2018 Central Celebes Marathon | Powered by <a href="http://weer-indonesia.com/" class="select2" target="_blank">WeeR INDONESIA</a> &middot; 
                <a href="#" class="select2">Privacy</a> &middot; 
                <a href="#" class="select2">Terms</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.countdown.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url()?>assets/template_web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder <?php echo base_url()?>assets/template_web/images/ work. Don't actually copy the next line! -->
    <script src="<?php echo base_url()?>assets/template_web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/template_web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
