<?php
include "../../function.php";

$del = mysql_query("delete from penerbit where penerbit_kode='$_GET[id]'");
if($del){
   echo "<script language='javascript'>alert('Data Telah Berhasil Dihapus')</script>";
   echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";    
}else{
   echo "<script language='javascript'>alert('Data Gagal Dihapus')</script>";
   echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_penerbit' </script>";    
}

?>