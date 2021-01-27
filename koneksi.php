<?php 
$koneksi=mysql_connect("localhost","","program sederhana");
if(mysqli_connect_errno()){
	echo "koneksi database gagal:".mysqli_connect_errno();
}
?>