<?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
	
	$query = mysql_query("SELECT * FROM daftar WHERE kdDaftar LIKE'%$cari%' OR kdAnggota LIKE'%$cari%' OR kdPetugas LIKE'%$cari%' OR tglDaftar LIKE'%$cari%'");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode Daftar</td>";
	echo "<th width='100'>Kode Anggota</td>";
	echo "<th width='100'>Kode Petugas</td>";
	echo "<th width='100'>Tanggal Daftar</td>";

	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['kdDaftar']."</td>";
		echo "<td>".$data['kdAnggota']."</td>";
		echo "<td>".$data['kdPetugas']."</td>";
		echo "<td>".$data['tglDaftar']."</td>";

		echo "</tr>";
	}echo "</table>";
?>