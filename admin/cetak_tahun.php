<?php
	include("../config/koneksi.php");
	
	$tahun = $_GET['tahun'];
	$date = date("d-m-Y");
	$hari = date("D");
		
?>
<body onload="window.print();">
<center>
<p style="font-size:30px;padding:0px;margin-bottom:-15px;">ENDAH PELAMINAN</p>
<p style="font-size:18px;padding:0px;margin-bottom:-12px;">Jl. Adinegoro No. 15 Lubuk Buaya Padang</p>
<p style="font-size:18px;padding:0px;margin-bottom:0px;">Telp. 0812-6740-690</p>
<hr style="border-color:black;">
<h3>Rekapitulasi Penyewaan Pelaminan</h3>
<h3>Tahun: <?php echo $tahun; ?> </h3>
			<div class="table-responsive">
              <table width="80%" border="1" cellpadding="5">
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
              <table style="padding-top:10px" width="80%" cellpadding="5">
				<tr>
					<td align="right">Padang, <?php echo $date; ?></td>
				</tr>
				<tr>
					<td align="right" style="padding-right:10%;">Admin</td>
				</tr>
				<tr>
					<td align="right" style="padding-right:20px;padding-top:50px;">Endah Pelaminan</td>
				</tr>
			 </table>
			</div>
</center>			  
</body>			  