<?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
	
	$query = mysql_query("SELECT * FROM t_petugas WHERE kdPetugas LIKE'%$cari%' OR namaPetugas LIKE'%$cari%' OR alamatPetugas LIKE'%$cari%' OR teleponPetugas LIKE'%$cari%'  ");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode petugas</td>";
	echo "<th width='150'>Nama </td>";
	echo "<th width='150'>Alamat </td>";
	echo "<th width='100'>No. Telp</td>";
	

	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['kdPetugas']."</td>";
		echo "<td>".$data['namaPetugas']."</td>";
		echo "<td>".$data['alamatPetugas']."</td>";
		echo "<td>".$data['teleponPetugas']."</td>";

		echo "</tr>";
	}echo "</table>";
?>