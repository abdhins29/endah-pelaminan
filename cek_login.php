<?php

include("config/koneksi.php");
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
		
	$sql = mysqli_query($konek,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$row = mysqli_num_rows($sql);
		
	if($row > 0)
	{
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = 'login';
		echo '<script>alert("Welcome Admin!");</script>';
		echo '<script>window.location.href="admin/index.php";</script>';
	}		
	else
	{
		echo '<script>alert("Username Atau Password Salah!");</script>';
		echo '<script>window.location.href="index.php";</script>';
	}
}
?>