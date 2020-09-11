<?php
	include("../config/koneksi.php");
	
	$bulan = $_GET['bulan'];
	$date = date("d-m-Y");
	$hari = date("D");
	
if($bulan == "01")
{
	$bln = "Januari";
}
else if($bulan == "02")
{
	$bln == "Februari";
}
else if($bulan == "03")
{
	$bln = "Maret";
}
else if($bulan == "04")
{
	$bln = "April";
}
else if($bulan == "05")
{
	$bln = "Mei";
}
else if($bulan == "06")
{
	$bln = "Juni";
}
else if($bulan == "07")
{
	$bln = "Juli";
}
else if($bulan == "08")
{
	$bln = "Agustus";
}
else if($bulan == "09")
{
	$bln = "September";
}
else if($bulan == "10")
{
	$bln = "Oktober";
}
else if($bulan == "11")
{
	$bln = "November";
}
else if($bulan == "12")
{
	$bln = "Desember";
}
		
?>
<body onload="window.print(); window.closeoff()">
<center>
<p style="font-size:32px;padding:0px;margin-bottom:-15px;margin-top: -10px;">ENDAH PELAMINAN</p>
<p style="font-size:18px;padding:0px;margin-bottom:-12px;">Jl. Adinegoro No. 15 Lubuk Buaya Padang</p>
<p style="font-size:18px;padding:0px;margin-bottom:0px;">Telp. 0812-6740-690</p>
<hr style="border-color:black;">
<h2 style="margin-bottom: -18px;">Laporan Data Penyewaan</h2>
<h3 style="margin-bottom: 2px;">Bulan : <?php echo $bln; ?></h3>
			<div class="table-responsive">
              <table width="100%" border="1" cellpadding="-1">
                  <thead>
                    <tr align="center">
                      <th rowspan="2">No</th>
                      <th rowspan="2">ID Pesan</th>
                      <th colspan="3">Tanggal</th>
                      <th rowspan="2">Nama Pelanggan</th>
                      <th rowspan="2">Alamat</th>
                      <th rowspan="2">No. Telp</th>
                      <th rowspan="2">Nama Paket</th>
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
    $sql = mysqli_query($konek,"SELECT * FROM pemesanan a LEFT JOIN pelanggan b ON a.id_pelanggan=b.id_pelanggan LEFT JOIN paket c ON a.id_paket=c.id_paket WHERE month(a.tanggal_pesta) = '$bulan'");
      while($data = mysqli_fetch_assoc($sql)){
        $no++;
        $total = $total+$data['total_biaya'];
?>
                 <tbody>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesan']; ?></td>
                    <td><?php echo $data['tanggal_pesta']; ?></td>
                    <td><?php echo $data['tanggal_pemasangan']; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['notelp']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo "Rp ".number_format($data['khusus'],0,',','.'); ?></td>
                    <td><?php echo "Rp ".number_format($data['total_biaya'],0,',','.'); ?></td>
                  </tr>
                  <?php 
                  } 
                  ?>
				          <tr>
                    <td colspan="10" align="center"> Total </td>
                    <td><?php echo "Rp ".number_format($total,0,',','.'); ?></td>
                  </tr>
			   	</tbody>
				</table>
              <table style="padding-top:10px" width="80%" cellpadding="5">
				<tr>
					<td align="right">Padang, <?php echo $date; ?>.</td>
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