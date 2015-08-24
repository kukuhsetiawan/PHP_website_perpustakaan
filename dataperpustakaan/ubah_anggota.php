<?php
	include 'koneksi.php';
	$kdAnggota=$_POST['kdAnggota'];
	$namaAnggota=$_POST['namaAnggota'];
	$alamatAnggota=$_POST['alamatAnggota'];
	$teleponAnggota=$_POST['teleponAnggota'];
	
		
	mysql_query("update t_anggota set namaAnggota='".$namaAnggota."' ,alamatAnggota='".$alamatAnggota."',  teleponAnggota='".$teleponAnggota."' where kdAnggota='".$kdAnggota."'");

	echo "<script>window.location.href='Anggota.php';</script>";
?>