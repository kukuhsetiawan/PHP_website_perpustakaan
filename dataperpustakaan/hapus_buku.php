<?php
include'koneksi.php';
	$kdBuku=$_GET['kdBuku'];
	
	mysql_query("delete from t_buku where kdBuku='".$kdBuku."'");
	echo "<script>window.location.href='index.php';</script>";
?>