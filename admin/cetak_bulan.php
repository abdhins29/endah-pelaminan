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
<body onload="window.print();">
<center>
<p style="font-size:30px;padding:0px;margin-bottom:-15px;">ENDAH PELAMINAN</p>
<p style="font-size:18px;padding:0px;margin-bottom:-12px;">Jl. Adinegoro No. 15 Lubuk Buaya Padang</p>
<p style="font-size:18px;padding:0px;margin-bottom:0px;">Telp. 0812-6740-690</p>
<hr style="border-color:black;">
<h2>Laporan Data Penyewaan</h2>
<h3>Bulan : <?php echo $bln; ?></h3>
			<div class="table-responsive">
              <table width="80%" border="1" cellpadding="5">
       	          <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Paket</th>
                      <th>Nama Paket</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Total Biaya</th>
                    </tr>
                  </thead>
               <?php
                    $no = 0;
                    $total = 0;
                    include ("../config/koneksi.php"); 
                    $query=mysqli_query($konek,"SELECT * FROM pemesanan a LEFT JOIN paket b ON a.id_paket=b.id_paket WHERE month(a.tanggal_pesta) = '$bulan' GROUP BY b.id_paket");
                    ?>
                 <tbody>
                  <?php
                    while($data=mysqli_fetch_assoc($query)){
                    $no++;

                    $cek = mysqli_query($konek,"SELECT id_paket, COUNT(*) AS total123 FROM pemesanan WHERE id_paket='$data[id_paket]'");
                    $tt = mysqli_fetch_array($cek);
                    $total=$total+$data['total_biaya'];      
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['id_paket']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo "Rp ".number_format($data['harga'],0,',','.'); ?></td>
                    <td><?php echo $tt['total123']; ?></td>
                    <?php 
                    $totalbiaya = $data['harga'] * $tt['total123'];
                    ?>
                    <td><?php echo "Rp ".number_format($totalbiaya,0,',','.'); ?></td>
                  </tr>
                  <?php 
                    }
                  ?>
                  <tr>
                    <td colspan="5" align="center"> Total </td>
                    <td><?php echo "Rp ".number_format($total,0,',','.'); ?></td>
                  </tr>
                </tbody>
              </table>
              <table style="padding-top:10px" width="80%" cellpadding="5">
				<tr>
					<td align="right">Padang, <?php echo $date; ?></td>
				</tr>
				<tr>
					<td align="right" style="padding-right:50px;">Admin</td>
				</tr>
				<tr>
					<td align="right" style="padding-right:20px;padding-top:50px;">Endah Pelaminan</td>
				</tr>
			 </table>
			</div>
</center>			  
</body>			  