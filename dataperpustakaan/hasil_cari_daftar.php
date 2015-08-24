<html>
<head>
	<title>Daftar Member</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<ul id="menu">
		<li><a href="index.php" >Buku</a></li>
		<li><a href="petugas.php">Petugas</a></li>
		<li><a href="anggota.php" >Anggota</a></li>
		<li><a href="daftar.php" class="active">Pendaftaran</a></li>
		<li><a href="pinjam.php">Pinjam</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	
	<div id="main">
		<div id="content">
			<h1>Hasil Pencarian Daftar</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'cari_daftar.php';
			?>
			<br/>
			<div class="panel">
                
                <a href="#Daftar_form" id="Daftar_pop">Tambah Data Pendaftaran</a>
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
	
	
	
	<!-- popup form Daftar -->
    <a href="#x" class="overlay" id="daftar_form"></a>
    <div class="popup">
        <h2>Form Pendaftaran</h2>
        <p>Masukkan data Pendaftaran disini</p>
		<table>
			<form action="tambah_daftar.php" method="post">
			<tr>
				<td>Kode Daftar</td>
				<td><input type="text" name="kdDaftar" /></td>
			</tr>
			
			<tr>
				<td>Kode Anggota</td>
				<td><input type="text" name="kdAnggota" /></td>
			</tr>
			<tr>
				<td>Kode Petugas</td>
				<td><input type="text" name="kdPetugas" /></td>
			</tr>
			<tr>
				<td>Tanggal Pendaftaran</td>
				<td><input type="text" name="tglDaftar" /></td>
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