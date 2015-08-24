<?php
	include 'koneksi.php';
	$kdPetugas=$_POST['kdPetugas'];
	$namaPetugas=$_POST['namaPetugas'];
	$alamatPetugas=$_POST['alamatPetugas'];
	$teleponPetugas=$_POST['teleponPetugas'];
	
		
	mysql_query("update t_petugas set namaPetugas='".$namaPetugas."' ,alamatPetugas='".$alamatPetugas."',  teleponPetugas='".$teleponPetugas."' where kdPetugas='".$kdPetugas."'");

	echo "<script>window.location.href='petugas.php';</script>";
?>