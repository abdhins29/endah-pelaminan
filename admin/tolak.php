<?php

include ("../config/koneksi.php");
$id_pesan= $_GET['id'];

$qpl=mysqli_query($konek,"SELECT * FROM pemesanan WHERE id_pesan='$id_pesan'");
$dpl=mysqli_fetch_assoc($qpl);
$qhapus4=mysqli_query($konek,"DELETE FROM pelanggan WHERE id_pelanggan='$dpl[id_pelanggan]'");
$qkfrm=mysqli_query($konek,"SELECT * FROM konfirmasi WHERE id_pesan='$id_pesan'");
$dkfrm=mysqli_fetch_assoc($qkfrm);
unlink("../images/bukti_pembayaran/$dkfrm[gambar]");	

$qhapus1=mysqli_query($konek,"DELETE FROM pelunasan WHERE id_pesan='$id_pesan'");
$qhapus2=mysqli_query($konek,"DELETE FROM konfirmasi WHERE id_pesan='$id_pesan'");
$qhapus3=mysqli_query($konek,"DELETE FROM pemesanan WHERE id_pesan='$id_pesan'");
echo '<script>alert("Berhasil Menghapus!");</script>';
echo '<script>window.location.href="index.php?page=prosespemesanan"</script>';
?>