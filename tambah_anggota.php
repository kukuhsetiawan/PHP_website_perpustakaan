<?php
	include 'koneksi.php';
	$kdAnggota = $_POST['kdAnggota'];
	$namaAnggota = $_POST['namaAnggota'];
	$alamatAnggota = $_POST['alamatAnggota'];
	$teleponAnggota = $_POST['teleponAnggota'];
	
	mysql_query("INSERT INTO t_anggota
				 VALUES ('$kdAnggota','$namaAnggota','$alamatAnggota','$teleponAnggota')");
	
	echo "<script>alert(' Selamat anda sudah Terdaftar, Tunggu Konfirmasi dari Admin  ');window.location.href='index.php';</script>";
?>