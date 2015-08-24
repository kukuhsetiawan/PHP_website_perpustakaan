<?php
if($_GET['kirim']){
    $to        = "ku2h_oke@yahoo.co.id";    //Email tujuan pengiriman
    $nama    = $_GET['nama'];
    $from    = $_GET['email'];
    
    $pesan    = $_GET['pesan'];
    $header    = "Email Dari: ".$from;
 
    if($nama && $from && $pesan){
        mail($to,$pesan,$header); //fungsi mail() untuk mengirimkan email
		
        echo "<script language='JavaScript'>alert('Pesan Terkirim :) ');window.location.href='index.php';</script>"; // pesan jika email berhasil di kirim



    } else {
	
        echo "<script language='JavaScript'>alert('Semua Wajib Anda Isi :)');window.location.href='kontak.php';</script>";

    }




	
	
	
	
	
} 

else {
    header("Location:kontak.php");
}


?>

