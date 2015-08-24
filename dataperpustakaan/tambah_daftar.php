<?php
	include 'koneksi.php';
	$kdDaftar = $_POST['kdDaftar'];
	$kdAnggota = $_POST['kdAnggota'];
	$kdPetugas = $_POST['kdPetugas'];
	$tglDaftar = $_POST['tglDaftar'];

	
	mysql_query("INSERT INTO daftar
				 VALUES ('$kdDaftar','$kdAnggota','$kdPetugas','$tglDaftar')");
	
	echo "<script>alert(' Sukses ');window.location.href='daftar.php';</script>";
?>