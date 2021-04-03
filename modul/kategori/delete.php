<?php
include "../../function.php";

$del = mysqli_query("delete from kategori where kategori_kode='$_GET[id]'");
if($del){
	echo "<script language='javascript'>alert('Data Telah Berhasil Dihapus')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";    
}else{
	echo "<script language='javascript'>alert('Data Gagal Dihapus')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_kategori' </script>";    
}

?>
