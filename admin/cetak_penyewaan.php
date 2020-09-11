<?php
	include("../config/koneksi.php");
	
	$nama_paket=$_GET['id'];
	$date = date("d-m-Y");
	$hari = date("D");		
?>
<body onload="window.print();">
<center>
<p style="font-size:30px;padding:0px;margin-bottom:-15px;">ENDAH PELAMINAN</p>
<p style="font-size:18px;padding:0px;margin-bottom:-12px;">Jl. Adinegoro No. 15 Lubuk Buaya Padang</p>
<p style="font-size:18px;padding:0px;margin-bottom:-5px;">Telp. 0812-6740-690</p>
<hr style="border-color:black;">
<h2 style="margin-bottom: -5px">Laporan Data Penyewaan</h2>
<br>
</center>
	<?php 
	$sqlq = mysqli_query($konek,"SELECT * FROM paket a LEFT JOIN detailpaket b ON a.id_paket=b.id_paket WHERE a.id_paket='$nama_paket'");
	$dataq = mysqli_fetch_assoc($sqlq);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<td>
					<table>
						<tr>
						<th>
							<td>Nama Paket</td>
							<td>:</td>
							<td><?php echo $nama_paket; ?></td>
						</th>
						</tr>
						<tr>
						<th>
							<td>Harga</td>
							<td>:</td>
							<td><?php echo $dataq['harga']; ?></td>
						</th>
						</tr>
					</table>
				</td>
			</div>
		</div>
	</div>
<center>
			<div class="table-responsive">
              <table width="100%" border="1" cellpadding="5">
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
?>
                 <tbody>
<?php
    	while($data = mysqli_fetch_assoc($sql)){
        $no++;
        $total = $total+$data['total_biaya'];
?>
                  <tr style="font-size: 18px;">
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
			   <?php 
				}
			   ?>
				<tr style="font-size: 18px;">
                    <td colspan="8" align="center"> Total </td>
                    <td><?php echo "Rp ".number_format($total,0,',','.'); ?></td>
                </tr>
			   	</tbody>
				</table>
              <table style="padding-top:10px" width="80%" cellpadding="5">
				<tr>
					<td align="right">Padang, <?php echo $date; ?></td>
				</tr>
				<tr>
					<td align="right" style="padding-right:65px;">Admin</td>
				</tr>
				<tr>
					<td align="right" style="padding-right:20px;padding-top:50px;">Endah Pelaminan</td>
				</tr>
			 </table>
			</div>
</center>			  
</body>			  