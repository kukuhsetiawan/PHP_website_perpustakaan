<?php
include'koneksi.php';
	$kdAnggota=$_GET['kdAnggota'];
	
	mysql_query("delete from t_anggota where kdAnggota='".$kdAnggota."'");
	echo "<script>window.location.href='Anggota.php';</script>";
?>