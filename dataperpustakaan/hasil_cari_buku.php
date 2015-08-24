<html>
<head>
	<title>buku Perpustakaan</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<ul id="menu">
		<li><a href="index.php" class="active">Buku</a></li>
		<li><a href="petugas.php">Petugas</a></li>
		<li><a href="anggota.php" >Anggota</a></li>
		<li><a href="daftar.php">Pendaftaran</a></li>
		<li><a href="Produksi.php">Pinjam</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div id="main">
		<div id="content">
			<h1>Hasil Pencarian buku</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'cari_buku.php';
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
<a href="#buku_form" id="buku_pop"><img src="images/add.png"></a><br>
Tambah Data buku
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
	
	<!-- popup form buku -->
    <a href="#x" class="overlay" id="buku_form"></a>
    <div class="popup">
        <h2>Form buku</h2>
        <p>Masukkan data buku disini</p>
		<table>
			<form action="tambah_buku.php" method="post">
			<tr>
				<td>Kode buku</td>
				<td><input type="text" name="kdBuku" /></td>
			</tr>
			
			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="namaBuku" /></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" /></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" /></td>
			</tr>
			
			<tr>
				<td>Jumlah Buku</td>
				<td><input type="text" name="jumlahBuku" /></td>
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