<?php

include'koneksi.php';

$username=$_POST['username']; 
$password=$_POST['password']; 

$sql="SELECT * FROM t_petugas WHERE namaPetugas='$username' and kdPetugas='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if ($username == "" or $password == "")
	{
		echo "<script>alert('Username atau Password Harus Diisi');window.location.href='admin.php';</script>";
	}
if($count==1){

header("location:dataperpustakaan/index.php");
}
else 
{
echo "<script>alert(' Username atau Password Salah ');window.location.href='admin.php';</script>";
}
?>