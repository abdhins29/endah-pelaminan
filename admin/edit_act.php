<?php
include("../config/koneksi.php");

	if(isset($_POST['submit']))
	{
		$id_paket = $_POST['id_paket'];
		$nama_paket = $_POST['nama_paket'];
		$gonjong = $_POST['gonjong'];
		$tenda = $_POST['tenda'];
		$orgen = $_POST['orgen'];
		$pentas = $_POST['pentas'];
		$pelaminan = $_POST['pelaminan'];
		$tabia = $_POST['tabia'];
		$taman = $_POST['taman'];
		$harga = $_POST['harga'];
		$khusus = $_POST['khusus'];
		$jumlah = $_POST['jumlah'];
		$status = $_POST['status'];
		
		$edit = mysqli_query($konek,"UPDATE paket, detailpaket SET paket.id_paket = '$id_paket', paket.nama_paket = '$nama_paket', paket.harga = '$harga', paket.jumlah = '$jumlah', paket.status = '$status', detailpaket.id_paket = '$id_paket', detailpaket.gonjong = '$gonjong', detailpaket.tenda = '$tenda', detailpaket.orgen = '$orgen', detailpaket.pentas = '$pentas', detailpaket.pelaminan = '$pelaminan', detailpaket.tabia = '$tabia', detailpaket.taman = '$taman', detailpaket.khusus = '$khusus' WHERE paket.id_paket='$id_paket' AND detailpaket.id_paket='$id_paket'");
		echo mysqli_error($konek);

if ($edit) {
		echo '<script>alert("Edit Pelaminan Berhasil!");</script>';
		echo '<script>window.location.href="index.php?page=datapaket"</script>';
	}
		echo '<script>alert("Edit Pelaminan Gagal!");</script>';
		echo mysqli_error($konek);
	}
?>