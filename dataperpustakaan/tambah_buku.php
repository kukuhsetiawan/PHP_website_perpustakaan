<?php
	include 'koneksi.php';
	$kdBuku = $_POST['kdBuku'];
	$namaBuku = $_POST['namaBuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$jumlahBuku = $_POST['jumlahBuku'];

	
	mysql_query("INSERT INTO t_buku
				 VALUES ('$kdBuku','$namaBuku','$pengarang','$penerbit','$jumlahBuku')");
	
	echo "<script>alert(' Sukses ');window.location.href='index.php';</script>";
?>