<?php
include "../../function.php";
$foto_lama = mysqli_fetch_object(mysql_query("select * from buku where buku_kode='$_GET[id]'"));
$delete = mysqli_query("DELETE FROM buku WHERE buku_kode='$_GET[id]'");
if($delete){
   echo "<script language='javascript'>alert('Data Buku Sudah Dihapus')</script>";
   echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku'</script
>";    
}else{
   echo "<script language='javascript'>alert('Data Buku Gagal Dihapus')</script>";
   echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku'</script
>";    
}

?>
