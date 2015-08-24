<?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
	
	$query = mysql_query("SELECT * FROM t_anggota WHERE kdAnggota LIKE'%$cari%' OR namaAnggota LIKE'%$cari%' OR alamatAnggota LIKE'%$cari%' OR teleponAnggota LIKE'%$cari%'  ");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode Anggota</td>";
	echo "<th width='150'>Nama </td>";
	echo "<th width='150'>Alamat </td>";
	echo "<th width='100'>No. Telp</td>";
	

	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['kdAnggota']."</td>";
		echo "<td>".$data['namaAnggota']."</td>";
		echo "<td>".$data['alamatAnggota']."</td>";
		echo "<td>".$data['teleponAnggota']."</td>";

		echo "</tr>";
	}echo "</table>";
?>