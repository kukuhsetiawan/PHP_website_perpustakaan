<?php
	include 'koneksi.php';
	$kdBuku=$_POST['kdBuku'];
	$namaBuku=$_POST['namaBuku'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
	$jumlahBuku=$_POST['jumlahBuku'];
		
	mysql_query("update t_buku set namaBuku='".$namaBuku."' ,pengarang='".$pengarang."',  penerbit='".$penerbit."', jumlahBuku='".$jumlahBuku."'  where kdBuku='".$kdBuku."'");

	echo "<script>window.location.href='index.php';</script>";
?>