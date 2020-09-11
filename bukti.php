<?php 
include ("config/koneksi.php");
$id_pesan = $_GET['id'];
?>
<html>
	<head>
		<title>Endah Pelaminan &mdash; Bukti </title>
		
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
		
		<style>
			table{
				margin-bottom:5px;
			}
			table tr td{
				padding:5px 10px;
				background:white;
				color:black;
			}
		</style>
		
	</head>

<body style="color:black" onload="window.print();">
<center>
	<h1>Bukti Pemesanan Endah Pelaminan</h1>
<hr style="border-color:black;width:81%">
<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;">
</center>
<div class="container">	
	<div class="row">
		<div class="col-md-6">
			<?php
			$sql1=mysqli_query($konek,"SELECT * FROM pemesanan WHERE id_pesan='$id_pesan'");
			$data1=mysqli_fetch_assoc($sql1);
			$sql2=mysqli_query($konek,"SELECT * FROM pelanggan WHERE id_pelanggan='$data1[id_pelanggan]'");
			$data2=mysqli_fetch_assoc($sql2);
			?>
	        <table style="margin-left: 10%;">  
				<tr>
					<td><b>ID Pelanggan</td>
					<td><b>:</td>
					<td><b><?php echo $data2['id_pelanggan']; ?></td>
					<td><b>ID Pesan</td>
					<td><b>:</td>
					<td><b><?php echo $data1['id_pesan']; ?></td>
				</tr>
				<tr>
					<td><b>Nama Pelanggan</td>
					<td><b>:</td>
					<td><b><?php echo $data2['nama_pelanggan']; ?></td>
					<td><b>Tanggal Pesan</td>
					<td><b>:</td>
					<td><b><?php echo $data1['tanggal_pesan']; ?></td>
				</tr>
				<tr>
					<td><b>Alamat</td>
					<td><b>:</td>
					<td><b><?php echo $data2['alamat']; ?></td>
					<td><b>Tanggal Pesta</td>
					<td><b>:</td>
					<td><b><?php echo $data1['tanggal_pesta']; ?></td>
				</tr>
				<tr>
					<td><b>No. Telp</td>
					<td><b>:</td>
					<td><b><?php echo $data2['notelp']; ?></td>
					<td><b>Tanggal Pemasangan</td>
					<td><b>:</td>
					<td><b><?php echo $data1['tanggal_pemasangan']; ?></td>
				</tr>
			</table>
		</div>	
	</div>
</div>
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<table style="margin-left: 10%">
					<?php
			          $q= mysqli_query($konek,"SELECT paket.nama_paket as nama_paket, detailpaket.gonjong as gonjong, detailpaket.tenda as tenda, detailpaket.orgen as orgen, detailpaket.pentas as pentas, detailpaket.pelaminan as pelaminan, detailpaket.tabia as tabia,detailpaket.taman as taman, paket.harga as harga, pemesanan.khusus as khusus FROM paket, detailpaket, pemesanan WHERE paket.id_paket='$data1[id_paket]' AND paket.id_paket=detailpaket.id_paket AND pemesanan.id_pesan='$id_pesan'");
						$data4=mysqli_fetch_assoc($q);
						echo mysqli_error($konek);
					?>
					<tr>
						<td>Nama Paket</td>
						<td>:</td>
						<td><?php echo $data4['nama_paket']; ?></td>
					</tr>
					<tr>
						<td>Gonjong</td>
						<td>:</td>
						<td><?php echo $data4['gonjong']; ?></td>
					</tr>
					<tr>
						<td>Tenda</td>
						<td>:</td>	
						<td><?php echo $data4['tenda']; ?></td>
					</tr>
					<tr>
						<td>Orgen</td>
						<td>:</td>
						<td><?php echo $data4['orgen']; ?></td>
					</tr>
					<tr>
						<td>Pentas</td>
						<td>:</td>
						<td><?php echo $data4['pentas']; ?></td>
					</tr>
					<tr>
						<td>Pelaminan</td>
						<td>:</td>
						<td><?php echo $data4['pelaminan']; ?></td>
					</tr>
					<tr>
						<td>Tabia</td>
						<td>:</td>
						<td><?php echo $data4['tabia']; ?></td>
					</tr>
					<tr>
						<td>Taman</td>
						<td>:</td>
						<td><?php echo $data4['taman']; ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><?php echo $data4['harga']; ?></td>
					</tr>
					<tr>
						<td>Khusus</td>
						<td>:</td>
						<td><?php echo $data4['khusus']; ?></td>
					</tr>
					<tr>
						<td>Total Biaya</td>
						<td>:</td>
						<td><?php echo $data1['total_biaya']; ?></td>
					</tr>
					<tr>
						<td>DP 10%</td>
						<td>:</td>
						<td><?php echo $data1['dp']; ?></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
<div align="center">
	<div class="col-md-6">
      <div class="table-responsive">
      <table class="table table-bordered" style="background:ghostwhite;color:black;" border="1">
        <tr>
          <td align="center" style="background:white;color:black;"><i class="icon-info"></i> PENTING</td>
        </tr>
        <tr>
          <td>
            <ul>
              <li>Harap Ingat / Catat <u><b style="color:firebrick">Id Pesan</b></u> Anda.</li>
              <li>Lunasi Pembayaran Awal Pemesanan Ke Rekening Kami (<b>5470-01-003607-53-8</b>) Rek BANK BRI atas nama ROSZAR REFLITA.</li>
              <li>Minimal Pembayaran Awal 10% dari Total Biaya</li>
              <li>Pembayaran Awal Berlaku 3x24jam dari Tanggal Pesan</li>
              <li>Lakukan Pengiriman Bukti Biaya Pembayaran Pada Menu Pembayaran Dengan Memasukan <u><b style="color:firebrick">Id Pesan</b></u> Anda.</li>
              <li>Upload Foto Bukti Pembayaran.</li>
              <li>Pemasangan Pelaminan Sesuai Dengan Tanggal dan Waktu Yang Anda Entrykan.</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center" style="background:white;color:black;"><i class="fa fa-male"></i> Terima Kasih Telah Menggunakan Jasa Kami. <i class="icon-female"></i></td>
        </tr>
     </table>
    </div>
    </div>

</div>
	<div style="margin-right: 5%">
		<p align="right" style="color:black;">Padang, <?php echo date("d-m-Y") ?></p>
		<p align="right" style="color:black;padding-top: 40px; padding-right: 5px;">Endah Pelaminan</p>
	</div>
</body>	
</html>