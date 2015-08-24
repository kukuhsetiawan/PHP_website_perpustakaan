<?php
	include 'koneksi.php';
	$kdPinjam=$_POST['kdPinjam'];
		$kdPetugas=$_POST['kdPetugas'];
		$kdBuku=$_POST['kdBuku'];
	$kdAnggota=$_POST['kdAnggota'];
		$tglPinjam=$_POST['tglPinjam'];
		
	mysql_query("update daftar set kdPetugas='".$kdPetugas."' , kdBuku='".$kdBuku."', kdAnggota='".$kdAnggota."' , tglPinjam='".$tglPinjam."'  where kdPinjam='".$kdPinjam."'");

	echo "<script>window.location.href='pinjam.php';</script>";
?>