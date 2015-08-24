<?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
	
	$query = mysql_query("SELECT * FROM pinjam WHERE kdPinjam LIKE'%$cari%' OR kdPetugas LIKE'%$cari%' OR kdBuku LIKE'%$cari%' OR OR kdAnggota LIKE'%$cari%' OR tglPinjam LIKE'%$cari%'");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode pinjam</td>";
	echo "<th width='100'>Kode Petugas</td>";
	echo "<th width='100'>Kode Buku</td>";
	echo "<th width='100'>Kode Anggota</td>";
	echo "<th width='100'>Tanggal pinjam</td>";

	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['kdPinjam']."</td>";
		echo "<td>".$data['kdPetugas']."</td>";
		echo "<td>".$data['kdBuku']."</td>";
		echo "<td>".$data['kdAnggota']."</td>";
		echo "<td>".$data['tglPinjam']."</td>";

		echo "</tr>";
	}echo "</table>";
?>