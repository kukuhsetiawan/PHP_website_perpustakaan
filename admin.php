<html>
<head>
<link href="css/modal.css" rel="stylesheet" type="text/css" />


	
<title>Aplikasi Perpustakaan</title>
<meta name="keywords" content="Slider Web Template, Free Download, Design Layout, XHTML CSS" />
<meta name="description" content="Slider Web Template, Free Download, Web Design Layout from TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>
</head>
<body>
<!-- popup form Anggota -->
    <a href="#x" class="overlay" id="Anggota_form"></a>
    <div class="popup">
        <h2>Form Anggota</h2>
        <p>Masukkan data Anggota disini</p>
		<table>
			<form action="tambah_Anggota.php" method="post">
			<tr>
				<td>Kode Anggota</td>
				<td><input type="text" name="kdAnggota" value="K" /></td>
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





<div id="templatemo_container">

	<div id="templatemo_title">
    	<div id="title">Perpustakaan</div>
    </div> 
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php" >Beranda<br />
            <span>buku terdahsyat</span></a></li>
            <li><a href="menubuku.php" >Menu Buku<br />
            <span>cari buku kesukaanmu</span></a></li>
            <li><a href="#Anggota_form">Anggota<br />
            <span>mendaftar jadi Member</span></a></li>
            <li><a href="admin.php" class="current">Admin<br />
                <span>Mengelola Perpustakaan</span></a></li>            
            <li><a href="tentang.php">Tentang<br />
          <span>perpustakaan</span></a></li>
            <li><a href="kontak.php" class="last">Hubungi<br />
                <span>Kontak Person</span></a></li>
        </ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_banner">
    <center><br>
<br>
<br>
    
    <form name="form1" method="post" action="login.php">
    <table>
    <tr><td><font color="#FFFFFF"><b>Username </b></font></td><td>: <input type="text" name="username"></td></tr>
    <tr><td><font color="#FFFFFF"><b>Password </b></font></td><td>: <input type="text" name="password"></td></tr><br>
<tr><td></td><td><button id="Button1">Login</button></td></tr>
    </table>
    
    
    
    
    </td></tr></table>
    </form>
    </center>	
    </div><!-- end ob banner -->
    
    <div id="templatemo_content">
    	
        <div id="content_left">
        
        	<div class="title">Selamat Datang Admin, Silahkan Login. </div>
            <p>
            
   

          
          
          </p>
            
            
          
            
        </div> <!-- end of content left -->
        
        <div id="content_right">
        	
            
        
        </div> 
            <!-- end of content right -->
                                
    	<div id="bottom_bg"></div>
  </div> <!-- end of content -->
    
    <div id="templatemo_bottom_panel">
      <div class="cleaner">&nbsp;</div>

  </div> <!-- end of bottom panel -->
    
    <div id="templatemo_footer">
      Copyright © 2014<strong> Kukuh </strong> | Perpustakaan</div> 
    <!-- end of footer -->

</div> <!-- end of container -->
<div align=center></div>
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
$(function() {
	$( "#Button1" ).button(); 
});
</script>
</body>
</html>