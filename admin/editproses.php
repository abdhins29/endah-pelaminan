<?php
include("../config/koneksi.php");
  $id_pesan=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Endah Pelaminan &mdash; Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-red-light.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>P+</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Endah</b> Pelaminan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/admin.png" class="img-circle" alt="User Image">

                <p>
                  Endah Pelaminan
                  <small>Since 2010</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><strong>Admin</strong></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Pelaminan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=inputpaket"><i class="fa fa-circle-o"></i> Input Paket Pelaminan</a></li>
            <li><a href="index.php?page=datapaket"><i class="fa fa-circle-o"></i> Lihat Paket Pelaminan</a></li>
          </ul>
        </li>
        <li>
          <a href="index.php?page=datapelanggan">
            <i class="fa fa-users"></i>
            <span>Pelanggan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=datapemesanan"><i class="fa fa-circle-o"></i> Lihat Data Pemesanan</a></li>
            <li><a href="index.php?page=prosespemesanan"><i class="fa fa-circle-o"></i> Proses Data Pemesanan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=laporantransaksi"><i class="fa fa-circle-o"></i> Laporan Transaksi</a></li>
            <li><a href="index.php?page=laporanpenyewaan"><i class="fa fa-circle-o"></i> Laporan Penyewaan</a></li>
            <li><a href="index.php?page=laporanperbulan"><i class="fa fa-circle-o"></i> Laporan Penyewaan Perbulan</a></li>
            <li><a href="index.php?page=laporanpertahun"><i class="fa fa-circle-o"></i> Laporan Penyewaan Pertahun</a></li>
          </ul>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelaminan
        <small>Content panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Data Pelaminan</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">From Edit Data Paket Pelaminan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <div class="form-horizontal">
                <?php
                include ("../config/koneksi.php"); 
                $query  = mysqli_query($konek,"SELECT pemesanan.id_pesan as id_pesan, pelanggan.nama_pelanggan as nama_pelanggan, pemesanan.tanggal_pesan as tanggal_pesan, pemesanan.tanggal_pesta as tanggal_pesta, paket.nama_paket as nama_paket, pemesanan.khusus as khusus, pemesanan.total_biaya as total_biaya, konfirmasi.gambar as gambar, pemesanan.dp as dp FROM pemesanan,paket,pelanggan,konfirmasi WHERE pemesanan.id_pesan=konfirmasi.id_pesan AND pelanggan.id_pelanggan=pemesanan.id_pelanggan AND paket.id_paket=pemesanan.id_paket AND pemesanan.id_pesan='$id_pesan'");
                mysqli_error($konek);
                $data = mysqli_fetch_assoc($query);
                ?>
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">ID Pesan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_pesan" value="<?php echo $data['id_pesan']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Pelanggan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Pesan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tanggal_pesan" value="<?php echo $data['tanggal_pesan']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Pesta</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tanggal_pesta" value="<?php echo $data['tanggal_pesta']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Paket</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_paket" value="<?php echo $data['nama_paket']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Khusus</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="khusus" value="<?php echo $data['khusus']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Total Biaya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="total_biaya" value="<?php echo $data['total_biaya']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Bukti Pembayaran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gambar" value="<?php echo $data['gambar']; ?>"readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">DP 10%</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dp" value="<?php echo $data['dp']; ?>"readonly="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan" value="LUNAS" readonly="">
                  </div>
              </div>
            </div>
              <div class="box-footer">
                  <div align="center">
                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
            </form>
<?php
if (isset($_POST['submit'])){
    $query2 = mysqli_query($konek,"SELECT * FROM pelunasan ORDER BY nofaktur DESC");
    $data2 = mysqli_fetch_assoc($query2);
    $jml = mysqli_num_rows($query2);
    if($jml==0){
      $nofaktur='FK001';
      }else{
        $subid = substr($data2['nofaktur'],3);
        if($subid>0 && $subid<=8){
          $sub = $subid+1;
          $nofaktur='FK00'.$sub;
        }elseif($subid>=9 && $subid<=100){
          $sub = $subid+1;
          $nofaktur='FK0'.$sub;
        }elseif($subid>=99 && $subid<=1000){
          $sub = $subid+1;
          $nofaktur='FK'.$sub;
        }
      }

    $tanggal_faktur = date('Y-m-d');
    $total_biaya=$_POST['total_biaya'];
    $dp=$_POST['dp'];
    $sisa_bayar=$data['total_biaya']-$data['dp'];
    $keterangan=$_POST['keterangan'];

    $simpan = mysqli_query($konek,"INSERT INTO pelunasan VALUES('$nofaktur', '$tanggal_faktur','$id_pesan', '$total_biaya', '$dp', '$sisa_bayar', '$keterangan')");

    echo '<script>alert("Data Berhasil DiSimpan!");</script>';
    echo '<script>window.location.href="index.php?page=prosespemesanan"</script>';
}
?>
          </div>
        </div>
      </div>
    </section>
  <div class="control-sidebar-bg"></div>
</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>