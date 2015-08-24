<?php
	include 'koneksi.php';
	$kdAnggota = $_POST['kdAnggota'];
	$namaAnggota = $_POST['namaAnggota'];
	$alamatAnggota = $_POST['alamatAnggota'];
	$teleponAnggota = $_POST['teleponAnggota'];
	
	mysql_query("INSERT INTO t_anggota
				 VALUES ('$kdAnggota','$namaAnggota','$alamatAnggota','$teleponAnggota')");
	
	echo "<script>alert(' Sukses ');window.location.href='Anggota.php';</script>";
?>