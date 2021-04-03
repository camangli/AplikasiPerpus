<?php
include "../../function.php";

$kodepenerbit = $_POST['kodepenerbit'];
$namapenerbit= $_POST['namapenerbit'];
$alamatpenerbit = $_POST['alamatpenerbit'];
$tlppenerbit = $_POST['tlppenerbit'];

$kode = mysql_num_rows(mysql_query("select * from penerbit where penerbit_kode='$kodepenerbit'"));

if(strlen($kodepenerbit) <1 || strlen($namapenerbit) < 1 || strlen($alamatpenerbit) < 1 || strlen($tlppenerbit) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";     
}else if($kode > 0){
	echo "<script language='javascript'>alert('Maaf Kode Penerbit Sudah Ada')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";     
}else{
	$input = mysql_query("insert into penerbit(penerbit_kode,penerbit_nama,penerbit_alamat,penerbit_telp)values('$kodepenerbit','$namapenerbit','$alamatpenerbit','$tlppenerbit')");
	echo "<script language='javascript'>alert('Data Telah Berhasil Ditambahkan')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";     
}

?>