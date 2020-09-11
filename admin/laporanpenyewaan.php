<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Penyewaan</a></li>
        <li class="active">Lihat Laporan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan Data Penyewaan Berdasarkan Paket</h3>
            </div>
            <div class="container">
            <form role="form" action="" method="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                  <div class="input-group input-group-md">
                    <select name="id_paket" class="form-control select2" required="">    
                      <option value="0" selected="">-- Silahkan Pilih Paket --</option>
                  <?php 
                  include ("../config/koneksi.php");
                  $qwe = mysqli_query($konek,"SELECT * FROM paket");
                  while($dwe = mysqli_fetch_assoc($qwe)){
                  ?>
                      <option value="<?php echo $dwe['id_paket']; ?>"><?php echo $dwe['nama_paket']; ?></option>
                  <?php 
                  }
                  ?>
                    </select>
                      <span class="input-group-btn"><button class="btn btn-md btn-success login-submit-cs" type="submit" name="check">Check</button></span>
                  </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
<?php
    if(isset($_POST['check']))
    {
        $nama_paket= $_POST['id_paket'];
?>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
            <a href="cetak_penyewaan.php?id=<?php echo $nama_paket; ?>" target="_blank();" class="btn btn-default pull-right" style="margin:5px"><i class="fa fa-print"></i> Cetak</a>
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr align="center">
                      <th rowspan="2">No</th>
                      <th rowspan="2">ID Pesan</th>
                      <th colspan="3">Tanggal</th>
                      <th rowspan="2">Nama Pelanggan</th>
                      <th rowspan="2">Alamat</th>
                      <th rowspan="2">Khusus</th>
                      <th rowspan="2">Total Biaya</th>
                    </tr>
                    <tr>
                      <th>Pesan</th>
                      <th>Pesta</th>
                      <th>Pemasangan</th>
                    </tr>
                  </thead>
<?php
    $no = 0;
    $total = 0;
    include ("../config/koneksi.php"); 
    $sql = mysqli_query($konek,"SELECT * FROM pemesanan a left join paket b on a.id_paket=b.id_paket LEFT JOIN pelanggan c ON a.id_pelanggan=c.id_pelanggan WHERE a.id_paket= '$nama_paket'");
    while($data = mysqli_fetch_assoc($sql)){
?>
                 <tbody>
<?php
        $no++;
        $total = $total+$data['total_biaya'];
?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesta']; ?></td>
                    <td><?php echo $data['tanggal_pemasangan']; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo "Rp ".number_format($data['khusus'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['total_biaya'],0,',','.'); ?></td>
                  </tr>
                  <tr>
                    <td colspan="8" align="center"> Total </td>
                    <td><?php echo "Rp ".number_format($total,0,',','.'); ?></td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
<?php
    }
?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
  <div class="control-sidebar-bg"></div>
</div>