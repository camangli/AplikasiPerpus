<?php
include "../../function.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$foto_nama = $_FILES['foto']['name'];
$foto_alamat_asal = $_FILES['foto']['tmp_name'];
$ext = explode(".",$foto_nama);
$nama_akhir = time().".".$ext[1];

$input = mysql_query ("insert into peminjam(peminjam_kode,peminjam_nama,peminjam_alamat,peminjam_telp,peminjam_foto)values('$kode','$nama','$alamat','$telp','$nama_akhir')");

$upload = move_uploaded_file($foto_alamat_asal,"../../foto/".$nama_akhir);

if($upload && $input){
	echo "<script language='javascript'>alert('Data berhasil diupload')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam'</script>";
}else{
	echo "<script language='javascript'>alert('Data Gagal Di Upload')</script>";
	echo "<script language='JavaScript'>window.location = '../../index.php?mode=det_peminjam'</script>";
}

?>