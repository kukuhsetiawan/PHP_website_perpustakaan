<?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
	
	$query = mysql_query("SELECT * FROM t_buku WHERE kdBuku LIKE'%$cari%' OR namaBuku LIKE'%$cari%' OR pengarang LIKE'%$cari%' OR penerbit LIKE'%$cari%' OR jumlahBuku LIKE'%$cari%' ");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode Buku</td>";
	echo "<th width='200'>Nama Buku</td>";
	echo "<th width='100'>Pengarang</td>";
	echo "<th width='100'>Penerbit</td>";
	echo "<th width='50'>Jumlah Buku</td>";

	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['kdBuku']."</td>";
		echo "<td>".$data['namaBuku']."</td>";
		echo "<td>".$data['pengarang']."</td>";
		echo "<td>".$data['penerbit']."</td>";
		echo "<td>".$data['jumlahBuku']."</td>";

		echo "</tr>";
	}echo "</table>";
?>