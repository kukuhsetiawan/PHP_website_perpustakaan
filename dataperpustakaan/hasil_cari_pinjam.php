<html>
<head>
	<title>pinjam Buku</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
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
			<h1>Hasil Pencarian pinjam</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'cari_pinjam.php';
			?>
			<br/>
			<div class="panel">
                
                <a href="#pinjam_form" id="pinjam_pop">Tambah Data Penpinjaman</a>
            </div>
		</div>
		
		<div id="sidebar">
			<div class="content">
				<h1>Pencarian</h1>
				<hr/>
				<form action="#" method="post">
				<input type="text" name="cari">
				<input type="submit" value="Cari">
				</form>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
	
	<!-- popup form pinjam -->
    <a href="#x" class="overlay" id="pinjam_form"></a>
    <div class="popup">
        <h2>Form Peminjaman</h2>
        <p>Masukkan data Peminjaman disini</p>
		<table>
			<form action="tambah_pinjam.php" method="post">
			<tr>
				<td>Kode Pinjam</td>
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
				<td>Tanggal Penpinjaman</td>
				<td><input type="text" name="tglPinjam" /></td>
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