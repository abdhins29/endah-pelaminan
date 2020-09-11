<?php
include ("config/koneksi.php");
  $id_pesan = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Endah Pelaminan &mdash; Berhasil Membayar</title>
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
                      <li><a href="#">Login</a></li>
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

<section class="section-background" style="background:url(images/bayar_bg.png);background-position: center;background-repeat: no-repeat;background-size: cover;padding-top:50px;">
<br>
<br>
  <div class="container">
  <div class="col-md-12">
    <table class="table table-bordered" style="background:ghostwhite;color:dimgrey">
      <tr>
        <td align="center" style="background:dimgrey;color:white;"><i class="icon-info"></i> Pembayaran Awal Anda Telah Berhasil</td>
      </tr>
      <tr>
        <td>
          <h2 align="center"> --- Anda Akan Kami Hubungi Dalam Kurun Waktu 1x24jam --- </h2>
        </td>
      </tr>
      <tr>
        <td align="center" style="background:dimgrey;color:white;"><i class="icon-male"></i> Terima Kasih Telah Menggunakan Jasa Kami. <i class="icon-female"></i></td>
      </tr>
    </table>
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