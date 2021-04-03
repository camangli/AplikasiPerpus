<?php
include "../../function.php";

$kodebuku = $_POST['kodebuku'];
$kategoribuku = $_POST['kategoribuku'];
$penerbitbuku = $_POST['penerbitbuku'];
$judulbuku = $_POST['judulbuku'];
$jumlahbuku = $_POST['jumlahbuku'];
$deskripsibuku = $_POST['deskripsibuku'];
$pengarangbuku = $_POST['pengarangbuku'];
$tahunterbit = $_POST['tahunterbit'];  

$foto_nama = $_FILES['foto']['name'];
$foto_alamat_asal = $_FILES['foto']['tmp_name'];
$ext = explode(".",$foto_nama);

$nama_akhir = time().".".$ext[1];
if(strlen($foto_nama) < 1){
  if(strlen($kodebuku) < 1 || strlen($kategoribuku) < 1 || strlen($penerbitbuku) < 1 || strlen($judulbuku) < 1 || strlen($jumlahbuku) < 1 || strlen($deskripsibuku) < 1 || strlen($pengarangbuku) < 1 || strlen($tahunterbit) < 1){
	  echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
  }else if($kodebuku == 1){
	  echo "<script language='javascript'>alert('Maaf Kode Peminjam Anda Sudah Tersedia')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
  }else{
	  $sql = mysqli_query("UPDATE buku SET buku_kode='$kodebuku',kategori_kode='$kategoribuku',penerbit_kode='$penerbitbuku',buku_judul='$judulbuku',buku_jumlah='$jumlahbuku',buku_deskripsi='$deskripsibuku',buku_pengarang='$pengarangbuku',buku_tahun_terbit='$tahunterbit' WHERE buku_kode='$kodebuku'");
	  echo "<script language='javascript'>alert('Data Telah Berhasil di Update')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";     
  }    
}else {
  if(strlen($kodebuku) < 1 || strlen($kategoribuku) < 1 || strlen($penerbitbuku) < 1 || strlen($judulbuku) < 1 || strlen($jumlahbuku) < 1 || strlen($deskripsibuku) < 1 || strlen($pengarangbuku) < 1 || strlen($tahunterbit) < 1){
	  echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
  }else if($kodebuku == 1){
	  echo "<script language='javascript'>alert('Maaf Kode Peminjam Anda Sudah Tersedia')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
  }else{
	  $nama_foto = mysqli_fetch_object(mysql_query("select * from buku where buku_kode='$kodebuku'"));        
	  unlink("../../Gbuku/".$nama_foto->buku_gambar);
	  
	  $sql = mysqli_query("UPDATE buku SET buku_kode='$kodebuku',kategori_kode='$kategoribuku',penerbit_kode='$penerbitbuku',buku_judul='$judulbuku',buku_jumlah='$jumlahbuku',buku_deskripsi='$deskripsibuku',buku_pengarang='$pengarangbuku',buku_tahun_terbit='$tahunterbit',buku_gambar='$nama_akhir' WHERE buku_kode='$kodebuku'");
	  
	  move_uploaded_file($foto_alamat_asal,"../../Gbuku/".$nama_akhir);
	  echo "<script language='javascript'>alert('Data Telah Berhasil di Update')</script>";
	  echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>"; 
  }    
}

?>

?>
