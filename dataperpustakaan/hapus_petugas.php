<?php
include'koneksi.php';
	$kdpetugas=$_GET['kdPetugas'];
	
	mysql_query("delete from t_petugas where kdPetugas='".$kdpetugas."'");
	echo "<script>window.location.href='petugas.php';</script>";
?>