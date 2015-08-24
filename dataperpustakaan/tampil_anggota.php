
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM t_Anggota;");
	
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr align='center'>";
	echo "<th width='100'>Kode</td>";
	echo "<th width='150'>Nama Anggota</td>";
	echo "<th width='150'>Alamat</td>";
	echo "<th width='100'>No. Telp</td>";
	
	echo "<th width='100' colspan ='2'>&nbsp;</td>";
	echo "</tr>";
	
	while($data = mysql_fetch_array($query))
	{
		echo "<form action='ubah_Anggota.php' method='post'>";
		echo "<tr align='center'>";
		echo "<td><input type='text' name='kdAnggota' size='5' value='".$data['kdAnggota']."' readonly></td>";
		echo "<td><input type='text' name='namaAnggota' size='20' value='".$data['namaAnggota']."'></td>";
		echo "<td><input type='text' name='alamatAnggota' size='25' value='".$data['alamatAnggota']."'></td>";
		echo "<td><input type='text' name='teleponAnggota' size='13' value='".$data['teleponAnggota']."'></td>";
		
			
	

		echo "<td><div class='button_edit'><input type='submit' value=''></div></td>";
		echo "<td><a href='hapus_Anggota.php?kdAnggota=".$data['kdAnggota']."'><img src='images/hapus.png'></a></td>";
		echo "</tr>";
		echo "</form>";
	}echo "</table>";
?>