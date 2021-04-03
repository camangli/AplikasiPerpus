<?php
include "../../function.php";

$kodepetugas = $_POST['kodepetugas'];
$namapetugas = $_POST['namapetugas'];
$password = $_POST['password'];
$pwd = md5($password);
$kode = mysql_num_rows(mysql_query("select * from petugas where petugas_kode='$kodepetugas'"));

if(strlen($kodepetugas) <1 || strlen($namapetugas) < 1 || strlen($password) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";     
}else if($kode > 0){
	echo "<script language='javascript'>alert('Maaf Kode Kategori Sudah Ada')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";     
}else{
	$input = mysql_query("insert into petugas(petugas_kode,petugas_nama,password)values('$kodepetugas','$namapetugas','$pwd')");
	if($input){
		echo "<script language='javascript'>alert('Data Telah Berhasil Ditambahkan')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";     
	}else{
		echo "<script language='javascript'>alert('Data Gagal Ditambahkan')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";        
	}
}  

?>