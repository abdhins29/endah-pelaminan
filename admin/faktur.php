<?php 
include ("../config/koneksi.php");
$id_pesan = $_GET['id'];
?>
<html>
	<head>
		<title>Endah Pelaminan &mdash; Faktur </title>
		
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
	<h1>Faktur Penyewaan Endah Pelaminan</h1>
<hr style="border-color:black;width:81%">
<hr style="border-color:black;width:80%;margin:-18px 0px 20px 0px;">
</center>	
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php
			$sql = mysqli_query($konek,"SELECT * FROM pelunasan WHERE id_pesan='$id_pesan'");
			$data = mysqli_fetch_assoc($sql);
			$sql1=mysqli_query($konek,"SELECT * FROM pemesanan WHERE id_pesan='$data[id_pesan]'");
			$data1=mysqli_fetch_assoc($sql1);
			$sql2=mysqli_query($konek,"SELECT * FROM pelanggan WHERE id_pelanggan='$data1[id_pelanggan]'");
			$data2=mysqli_fetch_assoc($sql2);
			?>
        <table class="table table-bordered" style="margin-left: 40%">
			<tr>
				<td><b>No.Faktur</td>
				<td><b>:</td>
				<td><b><?php echo $data['nofaktur']; ?></td>
			</tr>
			<tr>
				<td><b>Tanggal Faktur</td>
				<td><b>:</td>
				<td><b><?php echo $data['tanggal_faktur']; ?></td>
			</tr>
			<tr>
				<td><b>Id Pesan</td>
				<td><b>:</td>
				<td><b><?php echo $data['id_pesan']; ?></td>
			</tr>
			<tr>
				<td><b>Nama Pelanggan</td>
				<td><b>:</td>
				<td><b><?php echo $data2['nama_pelanggan']; ?></td>
			</tr>
			<tr>
				<td><b>Alamat</td>
				<td><b>:</td>
				<td><b><?php echo $data2['alamat']; ?></td>
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
					$sql3=mysqli_query($konek,"SELECT paket.harga as hrg, detailpaket.khusus as khusus ,paket.nama_paket as nmp, detailpaket.gonjong as gonjong, detailpaket.tenda as tenda, detailpaket.orgen as orgen, detailpaket.pentas as pentas, detailpaket.pelaminan as pelaminan, detailpaket.tabia as tabia, detailpaket.taman as taman FROM paket,detailpaket WHERE paket.id_paket='$data1[id_paket]' AND paket.id_paket=detailpaket.id_paket");
					$data3=mysqli_fetch_assoc($sql3);
				?>
					<tr>
						<td>Nama Paket</td>
						<td>:</td>
						<td><?php echo $data3['nmp']; ?></td>
					</tr>
					<tr>
						<td>Gonjong</td>
						<td>:</td>
						<td><?php echo $data3['gonjong']; ?></td>
					</tr>
					<tr>
						<td>Tenda</td>
						<td>:</td>	
						<td><?php echo $data3['tenda']; ?></td>
					</tr>
					<tr>
						<td>Orgen</td>
						<td>:</td>
						<td><?php echo $data3['orgen']; ?></td>
					</tr>
					<tr>
						<td>Pentas</td>
						<td>:</td>
						<td><?php echo $data3['pentas']; ?></td>
					</tr>
					<tr>
						<td>Pelaminan</td>
						<td>:</td>
						<td><?php echo $data3['pelaminan']; ?></td>
					</tr>
					<tr>
						<td>Tabia</td>
						<td>:</td>
						<td><?php echo $data3['tabia']; ?></td>
					</tr>
					<tr>
						<td>Taman</td>
						<td>:</td>
						<td><?php echo $data3['taman']; ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><?php echo $data3['hrg']; ?></td>
					</tr>
					<tr>
						<td>Khusus</td>
						<td>:</td>
						<td><?php echo $data1['khusus']; ?></td>
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
					<tr>
						<td>Sisa Pembayaran</td>
						<td>:</td>
						<td><?php echo $data['sisa_bayar']; ?></td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td>:</td>
						<td>Lunas</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	<div style="margin-right: 12%">
		<p align="right" style="color:black;">Padang, <?php echo date("d-m-Y") ?></p>
		<p align="right" style="color:black;padding-top: 40px; padding-right: 5px;">Endah Pelaminan</p>
	</div>
</body>	
</html>