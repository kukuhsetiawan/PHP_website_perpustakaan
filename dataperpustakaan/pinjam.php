<html>
<head>
	<title>Peminjaman Buku</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
	
	<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
	
	
</head>
<body>
	<ul id="menu">
			<li><a href="index.php" >Buku</a></li>
		<li><a href="petugas.php">Petugas</a></li>
		<li><a href="anggota.php" >Anggota</a></li>
		<li><a href="pinjam.php" >Pendaftaran</a></li>
		<li><a href="pinjam.php" class="active">Pinjam</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div id="main">
		<div id="content">
			<h1>Tabel pinjam</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'tampil_pinjam.php';
			?>
			<br/>
			
			<hr/>
			<br/>
			<div class="panel">
                

            </div>
		</div>
		
		<div id="sidebar">
			<div class="content">
				<h1>Pencarian</h1>
				<hr/>
				<form action="hasil_cari_pinjam.php" method="post">
				<input type="text" name="cari">
				<input type="submit" value="Cari">
				</form><br>
<hr><br>
<a href="#pinjam_form" id="pinjam_pop"><img src="images/add.png"></a><br>
Tambah Data pinjam
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
	
	<!-- popup form pinjam -->
    <a href="#x" class="overlay" id="pinjam_form"></a>
    <div class="popup">
        <h2>Form pinjam</h2>
        <p>Masukkan data Pemeinjaman disini</p>
		<table>
			<form action="tambah_pinjam.php" method="post">
			<tr>
				<td>Kode Peminjaman</td>
				<td><input type="text" name="kdPinjam" /></td>
			</tr>
			
			<tr>
			<td>Kode Petugas</td>
				<td><input type="text" name="kdPetugas" /></td>
			</tr>
			
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="kdBuku" /></td>
			</tr>
			
			<tr>
				<td>Kode Anggota</td>
				<td><input type="text" name="kdAnggota" /></td>
			</tr>
			
			
			<tr>
			<td>tanggal pinjam</td>
				<td><input type="text" name="tglPinjam" id="Datepicker1"/>
				
<script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker({
		dateFormat:"yy-mm-dd"
	}); 
});
</script>
				
				
				</td>
			</tr>
				
			<tr>
			
				<td><input type="submit" value="Simpan" />
					<input type="reset" value="Reset" /></td>
					
			</tr>
			</form>
		</table>
        <a class="close" href="#close"></a>
    </div>
	

</body>
</html