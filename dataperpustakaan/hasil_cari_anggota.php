<html>
<head>
	<title>Anggota Perpustakaan</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<ul id="menu">
		<li><a href="index.php" class="active">Buku</a></li>
		<li><a href="Anggota.php">Anggota</a></li>
		<li><a href="anggota.php" >Anggota</a></li>
		<li><a href="daftar.php">Pendaftaran</a></li>
		<li><a href="Produksi.php">Pinjam</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div id="main">
		<div id="content">
			<h1>Hasil Pencarian Anggota</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'cari_anggota.php';
			?>
			<br/>
			<div class="panel">
                
                
            </div>
		</div>
		
		<div id="sidebar">
			<div class="content">
				<h1>Pencarian</h1>
				<hr/>
				<form action="#" method="post">
				<input type="text" name="cari">
				<input type="submit" value="Cari">
				</form><br>
<hr><br>
<a href="#Anggota_form" id="Anggota_pop"><img src="images/add.png"></a><br>
Tambah Data Anggota
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
	
	<!-- popup form Anggota -->
    <a href="#x" class="overlay" id="Anggota_form"></a>
    <div class="popup">
        <h2>Form Anggota</h2>
        <p>Masukkan data Anggota disini</p>
		<table>
			<form action="tambah_Anggota.php" method="post">
			<tr>
				<td>Kode Anggota</td>
				<td><input type="text" name="kdAnggota" /></td>
			</tr>
			
			<tr>
				<td>Nama Anggota</td>
				<td><input type="text" name="namaAnggota" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamatAnggota" /></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td><input type="text" name="teleponAnggota" /></td>
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