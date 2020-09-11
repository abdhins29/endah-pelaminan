<?php
	include("../config/koneksi.php");
	
	$date = date("d-m-Y");
	$hari = date("D");
?>
<body onload="window.print();">
<center>
<p style="font-size:30px;padding:0px;margin-bottom:-15px;">ENDAH PELAMINAN</p>
<p style="font-size:18px;padding:0px;margin-bottom:-12px;">Jl. Adinegoro No. 15 Lubuk Buaya Padang</p>
<p style="font-size:18px;padding:0px;margin-bottom:0px;">Telp. 0812-6740-690</p>
<hr>
<h2>Laporan Pelanggan </h2>
			<div class="table-responsive">
              <table width="80%" border="1" cellpadding="5">
                <thead>
                  <tr style="background:dimgrey;font-weight:bold;color:white">
                    <td>No</td>
                    <td>Id Pelanggan <i class="fa fa-sort"></i></td>
                    <td>Nama Pelanggan <i class="fa fa-sort"></i></td>
                    <td>Jenis Kelamin <i class="fa fa-sort"></i></td>
                    <td>Alamat <i class="fa fa-sort"></i></td>
					<td>No. Telp <i class="fa fa-sort"></i></td>
					<td>E-mail <i class="fa fa-sort"></i></td>
                  </tr>
                </thead>
                <tbody>
<?php
	$no = 0;
	$sql = mysqli_query($konek,"SELECT * FROM pelanggan ORDER BY id_pelanggan");
	while($data = mysqli_fetch_assoc($sql))
	{
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