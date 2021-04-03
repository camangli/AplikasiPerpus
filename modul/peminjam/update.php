<?php
include "../../function.php";

$kodepeminjam = $_POST['kodepeminjam'];
$namapeminjam = $_POST['namapeminjam'];
$alamatpeminjam = $_POST['alamatpeminjam'];
$tlppeminjam = $_POST['tlppeminjam'];

$nama_awal = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$folder_tujuan = "../../foto/";
$extensi = explode(".",$nama_awal);
$nama_akhir = time().".".$extensi[1];

if(strlen($nama_awal) < 1){
  if(strlen($kodepeminjam) < 1 || strlen($namapeminjam) < 1 || strlen($alamatpeminjam) < 1 || strlen($tlppeminjam) < 1){
	  echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";         
  }else if($kode_peminjam == 1){
	  echo "<script language='javascript'>alert('Maaf Kode Peminjam Anda Sudah Tersedia')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";         
  }else{
	  $sql = mysql_query("update peminjam set peminjam_kode='$kodepeminjam',peminjam_nama='$namapeminjam',peminjam_alamat='$alamatpeminjam',peminjam_telp='$tlppeminjam' where peminjam_kode='$kodepeminjam'");
	  echo "<script language='javascript'>alert('Data Telah Berhasil di Update')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";     
  }    
}else {
  if(strlen($kodepeminjam) < 1 || strlen($namapeminjam) < 1 || strlen($alamatpeminjam) < 1 || strlen($tlppeminjam) < 1){
	  echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";         
  }else if($kode_peminjam == 1){
	  echo "<script language='javascript'>alert('Maaf Kode Peminjam Anda Sudah Tersedia')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>";         
  }else{
	  $nama_foto = mysql_fetch_object(mysql_query("select * from peminjam where peminjam_kode='$kodepeminjam'"));        
	  unlink($folder_tujuan.$nama_foto->peminjam_foto);
	  
	  $sql = mysql_query("update peminjam set peminjam_kode='$kodepeminjam',peminjam_nama='$namapeminjam',peminjam_alamat='$alamatpeminjam',peminjam_telp='$tlppeminjam',peminjam_foto='$nama_akhir' where peminjam_kode='$kodepeminjam'");
	  
	  move_uploaded_file($asal_foto,$folder_tujuan.$nama_akhir);
	  echo "<script language='javascript'>alert('Data Telah Berhasil di Update')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam' </script>"; 
  }    
}

?>