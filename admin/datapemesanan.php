<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pemesanan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Pemesanan</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemesanan</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Pesan</th>
                    <th>Tanggal Pesan</th>
                    <th>ID Pelanggan</th>
                    <th>Tanggal Pesta</th>
                    <th>Tanggal Pemasangan</th>
                    <th>ID Paket</th>
                    <th>Khusus</th>
                    <th>Total Biaya</th>
                    <th>DP 10%</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no=0;
                include ("../config/koneksi.php"); 
                $query  = mysqli_query($konek,"SELECT pemesanan.id_pesan as id_pesan, pemesanan.tanggal_pesan as tanggal_pesan, pemesanan.id_pelanggan as id_pelanggan, pemesanan.tanggal_pesta as tanggal_pesta, pemesanan.tanggal_pemasangan as tanggal_pemasangan, pemesanan.id_paket as id_paket, pemesanan.khusus as khusus, pemesanan.total_biaya as total_biaya, pemesanan.dp as dp FROM pemesanan WHERE pemesanan.id_pesan=id_pesan");
                while($data = mysqli_fetch_assoc($query)){
                $no++;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesan']; ?></td>
                    <td><?php echo $data['id_pelanggan']; ?></td>
                    <td><?php echo $data['tanggal_pesta']; ?></td>
                    <td><?php echo $data['tanggal_pemasangan']; ?></td>
                    <td><?php echo $data['id_paket']; ?></td>
                    <td><?php echo "Rp ".number_format($data['khusus'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['total_biaya'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['dp'],0,',','.'); ?></td>
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