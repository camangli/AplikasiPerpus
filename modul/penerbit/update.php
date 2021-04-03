<?php
include "../../function.php";

$kodepenerbit = $_POST['kodepenerbit'];
$namapenerbit= $_POST['namapenerbit'];
$alamatpenerbit = $_POST['alamatpenerbit'];
$tlppenerbit = $_POST['tlppenerbit'];

$kode = mysql_query("SELECT * FROM penerbit");
$KeyKode = mysql_fetch_object($kode);

if(strlen($kodepenerbit) <1 || strlen($namapenerbit) < 1 || strlen($alamatpenerbit) < 1 || strlen($tlppenerbit) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";     
}else{
	$input = mysql_query("update penerbit SET penerbit_kode='$kodepenerbit',penerbit_nama='$namapenerbit',penerbit_alamat='$alamatpenerbit',penerbit_telp='$tlppenerbit' where penerbit_kode='$kodepenerbit'");
	echo "<script language='javascript'>alert('Data Telah Berhasil Diubah')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>"; 
	if($input){
		echo "<script language='javascript'>alert('Data Telah Berhasil Diubah')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";     
	}else{
		echo "<script language='javascript'>alert('Data Telah Gagal Diubah')</script>";
		echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";             
	}
}

?>