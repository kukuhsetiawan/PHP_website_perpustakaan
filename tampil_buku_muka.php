
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM t_buku;");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode buku</td>";
	echo "<th width='200'>Nama Buku</td>";
	echo "<th width='100'>Pengarang</td>";
	echo "<th width='100'>Penerbit</td>";
	echo "<th width='50'>Jumlah Buku</td>";

	
	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<form action='ubah_buku.php' method='post'>";
		echo "<tr align='center'>";
		echo "<td><input type='text' name='kdBuku' size='5' value='".$data['kdBuku']."' readonly></td>";
		echo "<td><input type='text' name='namaBuku' size='25' value='".$data['namaBuku']."'></td>";
		echo "<td><input type='text' name='pengarang' size='5' value='".$data['pengarang']."'></td>";
		echo "<td><input type='text' name='penerbit' size='8' value='".$data['penerbit']."'></td>";
		echo "<td><input type='text' name='jumlahBuku' size='2' value='".$data['jumlahBuku']."'></td>";
			
	

		
		echo "</tr>";
		echo "</form>";
	}echo "</table>";
?>