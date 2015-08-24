<?php
	include 'koneksi.php';
	$kdpetugas = $_POST['kdpetugas'];
	$namapetugas = $_POST['namapetugas'];
	$alamatPetugas = $_POST['alamatPetugas'];
	$teleponPetugas = $_POST['teleponPetugas'];
	
	mysql_query("INSERT INTO t_petugas
				 VALUES ('$kdpetugas','$namapetugas','$alamatPetugas','$teleponPetugas')");
	
	echo "<script>alert(' Sukses ');window.location.href='petugas.php';</script>";
?>