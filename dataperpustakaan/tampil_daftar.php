
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM daftar;");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode Daftar</td>";
	echo "<th width='100'>Kode Anggota</td>";
	echo "<th width='100'>Kode Petugas</td>";
	echo "<th width='100'>Tanggal Daftar</td>";

	echo "<th width='100' colspan ='2'>&nbsp;</td>";
	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<form action='ubah_daftar.php' method='post'>";
		echo "<tr align='center'>";
		echo "<td><input type='text' name='kdDaftar' size='5' value='".$data['kdDaftar']."' readonly></td>";
		echo "<td><input type='text' name='kdAnggota' size='5' value='".$data['kdAnggota']."'></td>";
		echo "<td><input type='text' name='kdPetugas' size='5' value='".$data['kdPetugas']."'></td>";
		echo "<td><input type='text' name='tglDaftar' size='5' value='".$data['tglDaftar']."'></td>";
			
	

		echo "<td><div class='button_edit'><input type='submit' value=''></div></td>";
		echo "<td><a href='hapus_daftar.php?kdDaftar=".$data['kdDaftar']."'><img src='images/hapus.png'></a></td>";
		echo "</tr>";
		echo "</form>";
	}echo "</table>";
?>