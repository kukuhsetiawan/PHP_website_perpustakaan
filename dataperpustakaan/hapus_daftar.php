<?php
	include'koneksi.php';
	$kdDaftar=$_GET['kdDaftar'];
	
	mysql_query("delete from daftar where kdDaftar='".$kdDaftar."'");
	echo "<script>window.location.href='Daftar.php';</script>";
?>