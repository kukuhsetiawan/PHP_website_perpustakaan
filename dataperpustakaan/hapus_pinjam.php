<?php
	include'koneksi.php';
	$kdPinjam=$_GET['kdPinjam'];
	
	mysql_query("delete from pinjam where kdPinjam='".$kdPinjam."'");
	echo "<script>window.location.href='pinjam.php';</script>";
?>