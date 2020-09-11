<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Content Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Pertahun</a></li>
        <li class="active">Lihat Laporan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekapitulasi Penyewaan Pelaminan</h3>
            </div>
            <div class="container">
            <form role="form" action="" method="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                  <div class="input-group input-group-md">
                    <select name="tahun" class="form-control select2" required="">    
                      <option value="0" selected="">-- Silahkan Pilih Tahun --</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                    </select>
                      <span class="input-group-btn"><button class="btn btn-md btn-success" type="submit" name="check">Check</button></span>
                  </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
<?php
    if(isset($_POST['check']))
    {
        $tahun = $_POST['tahun'];
?>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
            <a href="cetak_tahun.php?tahun=<?php echo $tahun; ?>" target="_blank();" class="btn btn-default pull-right" style="margin:5px"><i class="fa fa-print"></i> Cetak</a>
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th rowspan="2">No</th>
                      <th rowspan="2">ID Paket</th>
                      <th rowspan="2">Nama Paket</th>
                      <th colspan="12">Bulan</th>
                      <th rowspan="2">Jumlah</th>
                  </tr>
                  <tr>
                      <th>Jan</th>
                      <th>Feb</th>
                      <th>Mar</th>
                      <th>Apr</th>
                      <th>Mei</th>
                      <th>Jun</th>
                      <th>Jul</th>
                      <th>Agu</th>
                      <th>Sep</th>
                      <th>Okt</th>
                      <th>Nov</th>
                      <th>Des</th>
                  </tr>
                  </thead>
                <?php
                    $no = 0;
                    $total = 0;
                    include ("../config/koneksi.php"); 
                    $query1=mysqli_query($konek,"SELECT * FROM pemesanan a LEFT JOIN paket b ON a.id_paket=b.id_paket WHERE year(a.tanggal_pesta) = '$tahun' GROUP BY b.id_paket");
                  ?>
                 <tbody>
                  <?php
                    while($data=mysqli_fetch_assoc($query1)){
                    $no++;      
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_paket']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    
                    <?php
                    $cek1 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total1 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='01'");
                    $tt1 = mysqli_fetch_array($cek1);
                    ?>
                    <td><?php echo $tt1['total1']; ?></td>
                    
                    <?php
                    $cek2 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total2 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='02'");
                    $tt2 = mysqli_fetch_array($cek2);
                    ?>
                    <td><?php echo $tt2['total2']; ?></td>
                    
                    <?php
                    $cek3 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total3 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='03'");
                    $tt3 = mysqli_fetch_array($cek3);
                    ?>
                    <td><?php echo $tt3['total3']; ?></td>

                    <?php
                    $cek4 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total4 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='04'");
                    $tt4 = mysqli_fetch_array($cek4);
                    ?>
                    <td><?php echo $tt4['total4']; ?></td>
                    
                    <?php
                    $cek5 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total5 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='05'");
                    $tt5 = mysqli_fetch_array($cek5);
                    ?>
                    <td><?php echo $tt5['total5']; ?></td>
                    
                    <?php
                    $cek6 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total6 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='06'");
                    $tt6 = mysqli_fetch_array($cek6);
                    ?>
                    <td><?php echo $tt6['total6']; ?></td>

                    <?php
                    $cek = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total123 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='07'");
                    $tt = mysqli_fetch_array($cek);
                    ?>
                    <td><?php echo $tt['total123']; ?></td>

                    <?php
                    $cek7 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total8 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='08'");
                    $tt7 = mysqli_fetch_array($cek7);
                    ?>
                    <td><?php echo $tt7['total8']; ?></td>

                    <?php
                    $cek8 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total9 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='09'");
                    $tt8 = mysqli_fetch_array($cek8);
                    ?>
                    <td><?php echo $tt8['total9']; ?></td>

                    <?php
                    $cek9 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total10 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='10'");
                    $tt9 = mysqli_fetch_array($cek9);
                    ?>
                    <td><?php echo $tt9['total10']; ?></td>

                    <?php
                    $cek10 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total11 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='11'");
                    $tt10 = mysqli_fetch_array($cek10);
                    ?>
                    <td><?php echo $tt10['total11']; ?></td>

                    <?php
                    $cek11 = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total12 FROM pemesanan WHERE id_paket='$data[id_paket]' AND MONTH(tanggal_pesta)='12'");
                    $tt11 = mysqli_fetch_array($cek11);
                    ?>
                    <td><?php echo $tt11['total12']; ?></td>
                    <?php
                    $jumlah=$tt1['total1']+$tt2['total2']+$tt3['total3']+$tt4['total4']+$tt5['total5']+$tt6['total6']+$tt['total123']+$tt7['total8']+$tt8['total9']+$tt9['total10']+$tt10['total11']+$tt11['total12'];
                    ?>
                    <td><?php echo $jumlah; ?></td>
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