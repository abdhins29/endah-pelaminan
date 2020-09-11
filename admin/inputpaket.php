<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paket Pelaminan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Paket Pelaminan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">From Entry Data Paket Pelaminan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <div class="form-horizontal">
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Paket Pelaminan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_paket" placeholder="Masukan Nama Paket Pelaminan" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah Gonjong</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gonjong" placeholder="Masukan Jumlah Gonjong" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran Tenda</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tenda" placeholder="Masukan Ukuran Tenda" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah Orgen</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="orgen" placeholder="Masukan Jumlah Orgen" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran Pentas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pentas" placeholder="Masukan Ukuran Pentas" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Pelaminan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pelaminan" placeholder="Masukan Jenis Pelaminan" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tabia</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tabia" placeholder="Masukan Letak Tabia" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Taman</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="taman" placeholder="Masukan Apakah Pakai Taman atau Tidak" required="">
                  </div>
                </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Harga</label>
                <div class="col-sm-8">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Paket Pelaminan dengan Format: 5000000" required="">
                      <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Khusus</label>
                <div class="col-sm-8">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" name="khusus" placeholder="5000000" readonly="">
                      <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah Yang Tersedia Untuk Tanggal Yang Sama" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="status" placeholder="Masukan Apakah Status Tersedia atau Tidak" required="">
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
          </div>
        </div>
      </div>
    </section>
  <div class="control-sidebar-bg"></div>
</div>
<?php 
include ("../config/koneksi.php");
if (isset($_POST['submit'])){
    $query = mysqli_query($konek,"SELECT * FROM paket ORDER BY id_paket DESC");
    $data = mysqli_fetch_assoc($query);
    $row = mysqli_num_rows($query);
    if($row==0){
      $id_paket='PK001';
      }else{
        $subid = substr($data['id_paket'],3);
        if($subid>0 && $subid<=8){
          $sub = $subid+1;
          $id_paket='PK00'.$sub;
        }elseif($subid>=9 && $subid<=100){
          $sub = $subid+1;
          $id_paket='PK0'.$sub;
        }elseif($subid>=99 && $subid<=1000){
          $sub = $subid+1;
          $id_paket='PK'.$sub;
        }
      }

    $query1 = mysqli_query($konek,"SELECT * FROM detailpaket ORDER BY id_detail DESC");
    $data1 = mysqli_fetch_assoc($query1);
    $row1 = mysqli_num_rows($query1);
    if($row1==0){
      $id_detail='DT001';
      }else{
        $suid = substr($data1['id_detail'],3);
        if($suid>0 && $suid<=8){
          $su = $suid+1;
          $id_detail='DT00'.$su;
        }elseif($suid>=9 && $suid<=100){
          $su = $suid+1;
          $id_detail='DT0'.$su;
        }elseif($suid>=99 && $suid<=1000){
          $su = $suid+1;
          $id_detail='DT'.$su;
        }
      }

    $nama_paket = $_POST['nama_paket'];
    $gonjong = $_POST['gonjong'];
    $tenda = $_POST['tenda'];
    $orgen = $_POST['orgen'];
    $pentas = $_POST['pentas'];
    $tabia = $_POST['tabia'];
    $taman = $_POST['taman'];
    $pelaminan = $_POST['pelaminan'];
    $harga = $_POST['harga'];
    $khusus = $_POST['khusus'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];

    $que = mysqli_query($konek,"INSERT INTO paket VALUES('$id_paket','$nama_paket','$harga','$jumlah','$status')");
    $que2 = mysqli_query($konek,"INSERT INTO detailpaket VALUES('$id_detail','$id_paket','$gonjong','$tenda','$orgen','$pentas','$pelaminan','$tabia','$taman','5000000')");
    echo mysqli_error($konek);

if ($que) {
  echo '<script>alert("Berhasil Menyimpan Paket Pelaminan!");</script>';
  echo '<script>window.location.href="index.php?page=datapaket"</script>';
  }else{
  echo '<script>alert("Gagal Menyimpan Paket Pelaminan!");</script>';
    echo mysqli_error($konek);
  }

}
?>