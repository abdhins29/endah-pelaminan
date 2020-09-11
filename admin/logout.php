<?php 
session_start();
session_destroy();
	echo '<script>alert("Anda Berhasil Logout Admin!");</script>';
	echo '<script>window.location.href="../index.php";</script>';
?>