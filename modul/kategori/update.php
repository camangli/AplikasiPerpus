<?php
include "../../function.php";

$kodekategori = $_POST['kodekategori'];
$namakategori = $_POST['namakategori'];

$kode = mysqli_query("select * from kategori");
$KeyKode = mysqli_fetch_object($kode);

if(strlen($kodekategori) <1 || strlen($namakategori) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";     
}else{
	$input = mysqli_query("update kategori set kategori_kode='$kodekategori',kategori_nama='$namakategori' where kategori_kode='$kodekategori'");
	echo "<script language='javascript'>alert('Data Telah Berhasil Diubah')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";     
}

?>
