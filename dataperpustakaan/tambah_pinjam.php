<?php
	include 'koneksi.php';
	$kdPinjam = $_POST['kdPinjam'];
	$kdPetugas = $_POST['kdPetugas'];
	$kdBuku = $_POST['kdBuku'];
	$kdAnggota = $_POST['kdAnggota'];
	$tglPinjam = $_POST['tglPinjam'];

	
	mysql_query("INSERT INTO pinjam VALUES ('$kdPinjam','$kdPetugas','$kdBuku','$kdAnggota','$tglPinjam')");
	
	echo "<script>alert(' Sukses ');window.location.href='pinjam.php';</script>";
?>