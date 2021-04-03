<?php
include "../../function.php";

$kode = mysql_fetch_object(mysql_query("select * from peminjam where peminjam_kode='$_GET[id]'"));
unlink("../../foto/$kode->peminjam_foto");

$sql = mysql_query("delete from peminjam where peminjam_kode='$_GET[id]'");

echo "<script language='javascript'>alert('Data Berhasil Dihapus')</script>";
echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";         

?>