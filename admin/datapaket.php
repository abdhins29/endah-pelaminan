<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paket Pelaminan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Pelaminan</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Paket Pelaminan</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Gonjong</th>
                    <th>Tenda</th>
                    <th>Orgen</th>
                    <th>Pentas</th>
                    <th>Pelaminan</th>
                    <th>Tabia</th>
                    <th>Taman</th>
                    <th>Harga</th>
                    <th>Khusus</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    include ("../config/koneksi.php"); 
                    $query  = mysqli_query($konek,"SELECT paket.id_paket as id_paket, detailpaket.id_paket as id_paket, paket.nama_paket as nmp,paket.harga as hrg, paket.jumlah as jml, paket.status as sts, detailpaket.gonjong as gonjong, detailpaket.tenda as tenda, detailpaket.orgen as orgen, detailpaket.pentas as pentas, detailpaket.pelaminan as pelaminan, detailpaket.tabia as tabia, detailpaket.taman as taman, detailpaket.khusus as khusus FROM paket,detailpaket WHERE paket.id_paket=detailpaket.id_paket ORDER BY paket.id_paket ASC");
                    while($data = mysqli_fetch_assoc($query)){
                      $no++;
                    ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nmp']; ?></td>
                    <td><?php echo $data['gonjong']; ?></td>
                    <td><?php echo $data['tenda']; ?></td>
                    <td><?php echo $data['orgen']; ?></td>
                    <td><?php echo $data['pentas']; ?></td>
                    <td><?php echo $data['pelaminan']; ?></td>
                    <td><?php echo $data['tabia']; ?></td>
                    <td><?php echo $data['taman']; ?></td>
                    <td><?php echo "Rp ".number_format($data['hrg'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['khusus'],0,',','.'); ?></td>
                    <td><?php echo $data['jml']; ?></td>
                    <td><?php echo $data['sts']; ?></td>
                    <td><a href="editpelaminan.php?id=<?php echo $data['id_paket']; ?>" class="btn btn-md btn-info"><i class="fa fa-edit"></i></a> | 
                        <a href="hapuspelaminan.php?id=<?php echo $data['id_paket']; ?>" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></a></td>
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