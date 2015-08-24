
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM t_petugas;");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode</td>";
	echo "<th width='150'>Nama petugas</td>";
	echo "<th width='150'>Alamat</td>";
	echo "<th width='100'>No. Telp</td>";
	
	echo "<th width='100' colspan ='2'>&nbsp;</td>";
	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<form action='ubah_petugas.php' method='post'>";
		echo "<tr align='center'>";
		echo "<td><input type='text' name='kdPetugas' size='5' value='".$data['kdPetugas']."' readonly></td>";
		echo "<td><input type='text' name='namaPetugas' size='20' value='".$data['namaPetugas']."'></td>";
		echo "<td><input type='text' name='alamatPetugas' size='25' value='".$data['alamatPetugas']."'></td>";
		echo "<td><input type='text' name='teleponPetugas' size='13' value='".$data['teleponPetugas']."'></td>";
		
			
	

		echo "<td><div class='button_edit'><input type='submit' value=''></div></td>";
		echo "<td><a href='hapus_petugas.php?kdPetugas=".$data['kdPetugas']."'><img src='images/hapus.png'></a></td>";
		echo "</tr>";
		echo "</form>";
	}echo "</table>";
?>