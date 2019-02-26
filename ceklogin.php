<?php 
//ceklogin.php
include 'koneksi.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']); //md5 buat encrypsi(biar password gabisa kebaca)

	$register = $koneksi->prepare("SELECT * FROM users WHERE username='".$username."'");

	$register->execute();
	$hasil = $register->fetch(PDO::FETCH_OBJ); //hasil sudah diiubah ke objek

	if(!empty($hasil)){
		if ($hasil->password==$password) {
			$_SESSION['logged_in'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $hasil->role;

			header("location:index.php");
		}else{
			$_SESSION['message'] = "Username atau password tidak sesuai";
			$_SESSION['logged_in'] = false;

			header("location:login.php");
		}
	}else{
		$_SESSION['message'] = "Username atau password tidak sesuai";
		$_SESSION['logged_in'] = false;

		header("location:login.php");
	}
}

?>