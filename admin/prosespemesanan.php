<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proses Pemesanan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Proses Pemesanan</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Proses Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID Pesan</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Pesan</th>
                    <th>Tanggal Pesta</th>
                    <th>Nama Paket</th>
                    <th>Khusus</th>
                    <th>Total Biaya</th>
                    <th>Bukti Pembayaran</th>
                    <th>DP 10%</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                include ("../config/koneksi.php");
                $no=1;
                $query  = mysqli_query($konek,"SELECT pemesanan.id_pesan as id_pesan, pelanggan.nama_pelanggan as nama_pelanggan, pemesanan.tanggal_pesan as tanggal_pesan, pemesanan.tanggal_pesta as tanggal_pesta, paket.nama_paket as nama_paket, pemesanan.khusus as khusus, pemesanan.total_biaya as total_biaya, konfirmasi.gambar as gambar, pemesanan.dp as dp FROM pemesanan,paket,pelanggan,konfirmasi WHERE pemesanan.id_pesan=konfirmasi.id_pesan AND pelanggan.id_pelanggan=pemesanan.id_pelanggan AND paket.id_paket=pemesanan.id_paket ORDER BY pemesanan.id_pesan ASC");
                mysqli_error($konek);
                while($data = mysqli_fetch_assoc($query)){
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_pesan']; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['tanggal_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesta']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo "Rp ".number_format($data['khusus'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['total_biaya'],0,',','.'); ?></td>
                    <td><?php echo $data['gambar']; ?></td>
                    <td><?php echo "Rp ".number_format($data['dp'],0,',','.'); ?></td>
                    <?php
                      $qq=mysqli_query($konek,"SELECT * FROM pelunasan WHERE id_pesan='$data[id_pesan]'");
                      $dd=mysqli_fetch_assoc($qq);
                    ?>
                    <td><?php echo $dd['keterangan']; ?></td>
                    <td>
                      <a href="editproses.php?id=<?php echo $data['id_pesan'];?>" class="btn btn-md btn-success"><i class="fa fa-edit"></i></a>
                      <a href="tolak.php?id=<?php echo $data['id_pesan']; ?>" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></a>
                      <a href="faktur.php?id=<?php echo $dd['id_pesan']; ?>" class="btn btn-md btn-primary"><i class="fa fa-print"></i></a>
                    </td>
                  </tr>
                <?php 
                }
                echo mysqli_error($konek);
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