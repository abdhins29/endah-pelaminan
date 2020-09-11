<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Pelanggan</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
            <a href="cetak_pelanggan.php" target="_blank();" class="btn btn-default" style="margin:5px"><i class="fa fa-print"></i> Cetak</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=0;
                  include ("../config/koneksi.php"); 
                  $query  = mysqli_query($konek,"SELECT * FROM pelanggan ORDER BY id_pelanggan");
                  while($data = mysqli_fetch_assoc($query)){
                    $no++;
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pelanggan']; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['jeniskelamin']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['notelp']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                  </tr>
                    <?php 
                    }
                    ?>
                </tbody>
              </table>
            </div>
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