<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Endah &mdash; Pelaminan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/animate.css">    
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  <body>

    <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php">Endah Pelaminan</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.php">Home</a>
                      </li>
                      <li><a href="?page=pemesanan">Pemesanan</a></li>
                      <li><a href="?page=pembayaran">Pembayaran</a></li>
                      <li><a href="?page=about">About Us</a></li>
                      <li><a href=""data-target="#login_admin" data-toggle="modal">Login</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
        if(@$_GET['page'] == 'pemesanan')
        {
          include"pemesanan.php";
        }
        else if(@$_GET['page'] == 'pembayaran')
        {
          include"pembayaran.php";
        }
        else if(@$_GET['page'] == 'about')
        {
          include"about.php";
        }
        else
        {
      ?>

    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/gambar-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Welcome Costumer</h1>
              <h2 class="caption">Endah Pelaminan</h2><br>
              <h3 class="caption">Chose Our Pelaminan</h3>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/gambar-2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Unique Experience</h1>
              <h2 class="caption">Enjoy With Us</h2><br>
              <h3 class="caption">Make it Easy</h3>
            </div>
          </div>
        </div> </div> 

        
      <div class="site-blocks-cover overlay" style="background-image: url(images/gambar-3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Relaxing Pelaminan</h1>
              <h2 class="caption">Your Pelaminan</h2><br>
              <h3 class="caption">Your Boking</h3>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Paket Pelaminan</h2>
          </div>
        </div>
        <div class="row">
          <?php
          include "config/koneksi.php"; 
          $query  = mysqli_query($konek,"SELECT paket.id_paket as id_paket, paket.nama_paket as nama_paket, detailpaket.id_paket as id_paket, detailpaket.gonjong as gonjong, detailpaket.tenda as tenda, detailpaket.orgen as orgen, detailpaket.pentas as pentas, detailpaket.pelaminan as pelaminan, detailpaket.tabia as tabia, paket.harga as harga, detailpaket.khusus as khusus, paket.jumlah as jml, paket.status as sts FROM paket,detailpaket WHERE paket.id_paket=detailpaket.id_paket");
          while($data = mysqli_fetch_assoc($query)){
          ?>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="pelaminan text-center">
              <div class="pelaminan-body">
                <h3 class="heading mb-0"><?php echo $data['nama_paket']; ?></h3>
              ========================<br>
                <b><?php echo "Gonjong ".$data['gonjong']; ?></b><br>
                <b><?php echo "Tenda ".$data['tenda']; ?></b><br>
                <b><?php echo "Pentas Orgen ".$data['orgen']; ?></b><br>
                <b><?php echo "Pentas Pelaminan ".$data['pentas']; ?></b><br>
                <b><?php echo "Pelaminan Diluar ".$data['pelaminan']; ?></b><br>
                <b><?php echo "Tabia ".$data['tabia']; ?></b><br>
                <strong class="price"><?php echo "Rp ".number_format($data['harga'],2,',','.'); ?></strong><br>
              ========================<br>
                <b><?php echo "Jika Ada Tambahan Khusus, Dikenakan Biaya Tambahan"?></b><br>
                <strong class="price"><?php echo "Rp ".number_format($data['khusus'],2,',','.');?></strong><br>
              ========================<br>
                <b><?php echo "Jumlah Yang Tersedia Untuk Tanggal Yang Sama: ".$data['jml']; ?></b><br>
                <b><?php echo "Status ".$data['sts']; ?></b><br>
              </div>    
            </div>
          </div>
              <?php 
              }
              ?>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Syarat & Ketentuan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/booking.jpg" width="120" height="120">
              <h2 class="h5">Pemesanan Harus Dilakukan 3(Tiga) Bulan Sebelum Acara, Pembatalan Berlaku 1(satu) Bulan Sebelum Acara</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/pembayaran.png" width="120" height="120">
              <h2 class="h5">Melakukan Pembayaran Awal (DP), 10% dari Harga Paket Pelaminan yang Telah DiPilih</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/transfer.jpg" width="120" height="120">
              <h2 class="h5">Proses Pembayaran Awal Berlaku 3(Tiga) Hari dari Melakukan Pemesanan dan DiTransfer pada Nomor Rekening yang Sudah Terdaftar</h2>
            </div>
          </div>
        </div>
        <a href="pemesanan.php" class="btn btn-primary pill text-white px-4">Lanjutkan Memesan?</a>
      </div>
    </div> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Why Chose Us?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/kualitas.png" width="120" height="120">
              <h2 class="h5">Kualitas Terjamin</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/kalender.png" width="120" height="120">
              <h2 class="h5">Tepat Waktu</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/user.png" width="120" height="120">
              <h2 class="h5">User Friendly</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/dompet.png" width="120" height="120">
              <h2 class="h5">Lebih Hemat</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/lokasi.png" width="120" height="120">
              <h2 class="h5">Mudah Ditemukan</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="text-center p-4 item">
              <img class="img-circle" src="images/keamanan.png" width="120" height="120">
              <h2 class="h5">Keamanan Data Terjamin</h2>
            </div>
          </div>
        </div>
      <a href="pemesanan.php" class="btn btn-md btn-info pill text-white px-4">Lanjutkan Memesan?</a>
      </div>
    </div>

    <?php 
    }
    ?>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="footer-heading text-white">Social Icons</h3>
              <div class="col-md-6">
                  <a href="#"><span class="icon-phone"> 0812-6740-690</span></a><br>
                  <a href="#"><span class="icon-instagram"> endahsalon_padang</span></a>
              </div>
      	  </div>
      	</div>
	  </div>     
    </footer>
  </div>

<?php include("modal.php"); ?>
  
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>