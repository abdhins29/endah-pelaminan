<?php

include ("../config/koneksi.php");
$id_detail= $_GET['idd'];
$id_paket=$_GET['id'];

mysqli_query($konek,"DELETE FROM paket WHERE id_paket = '$id_paket'");

mysqli_query($konek,"DELETE FROM detailpaket WHERE id_detail = '$id_detail'");

echo mysqli_error($konek);
echo '<script>alert("Data Paket Pelaminan Berhasil Dihapus!");</script>';
echo '<script>window.location.href="index.php?page=datapaket";</script>';

?>