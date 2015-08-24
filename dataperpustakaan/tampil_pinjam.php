
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM pinjam;");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode pinjam</td>";
	echo "<th width='100'>Kode Petugas</td>";
	echo "<th width='100'>Kode Buku</td>";
	echo "<th width='100'>Kode Anggota</td>";
	echo "<th width='100'>Tanggal pinjam</td>";

	echo "<th width='100' colspan ='2'>&nbsp;</td>";
	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<form action='ubah_pinjam.php' method='post'>";
		echo "<tr align='center'>";
		echo "<td><input type='text' name='kdPinjam' size='5' value='".$data['kdPinjam']."' readonly></td>";
		echo "<td><input type='text' name='kdPetugas' size='5' value='".$data['kdPetugas']."'></td>";
		echo "<td><input type='text' name='kdBuku' size='5' value='".$data['kdBuku']."'></td>";
		echo "<td><input type='text' name='kdAnggota' size='5' value='".$data['kdAnggota']."'></td>";
		echo "<td><input type='text' name='tglPinjam' size='5' value='".$data['tglPinjam']."'></td>";
			
	

		echo "<td><div class='button_edit'><input type='submit' value=''></div></td>";
		echo "<td><a href='hapus_pinjam.php?kdPinjam=".$data['kdPinjam']."'><img src='images/hapus.png'></a></td>";
		echo "</tr>";
		echo "</form>";
	}echo "</table>";
?>