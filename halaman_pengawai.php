<?php
session_start();
include'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$login=mysqli_query($koneksi,"select*from user where username='$username'and password='$password'");

$cek=mysli_num_rows($login);
if($cek>0){
	   $data=mysqli_fetch_assoc($login);
	   if($data['level']=="admin"){
	   	$_SESSION['username']=$username;
	   	$_SESSION['level']="admin";
	   	header("location:halaman_admin.php");
	}else if($data['level']=="pengawai"){
		$_SESSION['username']=$username;
		$_SESSION['level']="pengawai";
		header("location:halaman_pengawai.php");
	}else if($_SESSION['level'=="pengurus"]){
		$_SESSION['username']=$username;
		$_SESSION['level']="pengurus";
		header("location:halaman_pengurus.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}
?>