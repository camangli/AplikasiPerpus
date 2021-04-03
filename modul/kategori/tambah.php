<?php
include "../../function.php";

$kodekategori = $_POST['kodekategori'];
$namakategori = $_POST['namakategori'];

$kode = mysqli_num_rows(mysql_query("select * from kategori where kategori_kode='$kodekategori'"))
;

if(strlen($kodekategori) <1 || strlen($namakategori) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";     
}else if($kode > 0){
	echo "<script language='javascript'>alert('Maaf Kode Kategori Sudah Ada')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";     
}else{
	$input = mysqli_query("insert into kategori(kategori_kode,kategori_nama)values('$kodekategori','$namakategori')");
	echo "<script language='javascript'>alert('Data Telah Berhasil Ditambahkan')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";     
}  

?>
