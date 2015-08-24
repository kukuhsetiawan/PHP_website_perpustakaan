<?php
	include 'koneksi.php';
	$kdDaftar=$_POST['kdDaftar'];
		$kdAnggota=$_POST['kdAnggota'];
		$kdPetugas=$_POST['kdPetugas'];
	$tglDaftar=$_POST['tglDaftar'];
		
	mysql_query("update daftar set kdAnggota='".$kdAnggota."', kdPetugas='".$kdPetugas."' , tglDaftar='".$tglDaftar."'  where kdDaftar='".$kdDaftar."'");

	echo "<script>window.location.href='daftar.php';</script>";
?>