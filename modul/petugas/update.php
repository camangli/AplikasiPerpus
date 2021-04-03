<?php
include "../../function.php";
$passlama = $_POST['passwordLama'];
$kodepetugas = $_POST['kodepetugas'];
$namapetugas = $_POST['namapetugas'];
$password = $_POST['password'];
$pwd = md5($password);
$format = md5($passlama);
$kode = mysql_query("SELECT * FROM petugas WHERE petugas_kode='$kodepetugas'");
$KeyKode = mysql_fetch_object($kode);

if(strlen($kodepetugas) <1 || strlen($namapetugas) < 1 || strlen($password) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";     
}else{
	if($format == $KeyKode->password){
		mysql_query("UPDATE petugas SET petugas_kode='$kodepetugas',petugas_nama='$namapetugas',password='$pwd' WHERE petugas_kode='$kodepetugas'");
		echo "<script language='javascript'>alert('Data Telah Berhasil Diubah')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";     
	}else{
		echo "<script language='javascript'>alert('Data Gagal Diubah')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_petugas' </script>";
	}
}

?>