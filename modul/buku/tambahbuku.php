<?php
include "../../function.php";;

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
$upload = move_uploaded_file($foto_alamat_asal,"../../Gbuku/".$nama_akhir);

$kode_buku = mysqli_num_rows(mysql_query("select * from buku where buku_kode='$kodebuku'"));

if(strlen($kodebuku) < 1 || strlen($kategoribuku) < 1 || strlen($penerbitbuku) < 1 || strlen($judulbuku) < 1 || strlen($jumlahbuku) < 1 || strlen($deskripsibuku) < 1 || strlen($pengarangbuku) < 1 || strlen($tahunterbit) < 1){
	echo "<script language='javascript'>alert('Maaf Data Belum Benar dan Lengkap')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
}else if($kode_buku == 1){
	echo "<script language='javascript'>alert('Maaf Kode Bukku Anda Sudah Tersedia')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";         
}else{
	$sql = mysqli_query($con,"insert into buku(buku_kode,kategori_kode,penerbit_kode,buku_judul,buku_jumlah,buku_deskripsi,buku_pengarang,buku_tahun_terbit,buku_gambar)values('$kodebuku','$kategoribuku','$penerbitbuku','$judulbuku','$jumlahbuku','$deskripsibuku','$pengarangbuku','$tahunterbit','$nama_akhir')");
	echo "<script language='javascript'>alert('Data Telah Berhasil di Upload')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_buku' </script>";
}

?>
