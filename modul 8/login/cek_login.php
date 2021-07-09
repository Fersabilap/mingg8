<?php
include ("connectlogin.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from user where username='$username' and password='$password'";

$data = mysqli_query($koneksi, $query);

if ($data) {
	if (mysqli_num_rows($data)) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:indexlogin.php");
	} else {
		header("location:indexlogin.php?pesan=gagal");
	}
} else {
	header("location:indexlogin.php?pesan=gagal");
}


?>
