<?php
include "../../function.php";

$kodedenda = mysql_fetch_object(mysql_query("select * from detail_pinjam where peminjaman_kode='$_GET[id]'"));
$deldenda = mysql_query("DELETE FROM denda where denda_id='$kodedenda->denda_id'");
$delpeminjaman = mysql_query("DELETE FROM peminjaman where peminjaman_kode='$_GET[id]'");
$deldetail = mysql_query("DELETE FROM detail_pinjam where peminjaman_kode='$_GET[id]'");

if($delpeminjaman && $deldetail && $deldenda){
	echo "<script language='javascript'>alert('Peminjaman Berhasil Dihapus')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjaman' </script>";
}else{
	echo "<script language='javascript'>alert('Peminjaman Gagal Dihapus')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjaman' </script>";
}

?>