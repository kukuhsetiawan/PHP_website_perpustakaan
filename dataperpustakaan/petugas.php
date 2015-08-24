<html>
<head>
	<title>petugas perpustakaan</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
	

	
	
</head>
<body>
	<ul id="menu">
		<li><a href="index.php" >Buku</a></li>
		<li><a href="petugas.php class="active"">Petugas</a></li>
		<li><a href="anggota.php" >Anggota</a></li>
		<li><a href="daftar.php">Pendaftaran</a></li>
		<li><a href="pinjam.php">Pinjam</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	
	<div id="main">
		<div id="content">
			<h1>Tabel petugas</h1>
			<hr/>
			<?php
			include'koneksi.php';
			include'tampil_petugas.php';
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
				<hr/><br>

				<form action="hasil_cari_petugas.php" method="post">
				<input type="text" name="cari">
				<input type="submit" value="Cari">
				</form>
<hr><br>
<a href="#petugas_form" id="petugas_pop"><img src="images/add.png"></a><br>
Tambah Data petugas
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
	
	<!-- popup form petugas -->
    <a href="#x" class="overlay" id="petugas_form"></a>
    <div class="popup">
        <h2>Form petugas</h2>
        <p>Masukkan data petugas disini</p>
		<table>
			<form action="tambah_petugas.php" method="post">
			<tr>
				<td>Kode petugas</td>
				<td><input type="text" name="kdpetugas" /></td>
			</tr>
			<tr>
				<td>Nama petugas</td>
				<td><input type="text" name="namapetugas" /></td>
			</tr>
			<tr>
			<td>Alamat</td>
				<td><input type="text" name="alamatPetugas" /></td>
			</tr>
			
			<tr>
			<td>No. Telp</td>
				<td><input type="text" name="teleponPetugas" /></td>
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