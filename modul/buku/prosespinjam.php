<?php
include "../../function.php";

$kodepeminjaman = $_POST['kodepeminjaman'];
$kodepetugas = $_POST['kodepetugas'];
$kodepeminjam = $_POST['kodepeminjam'];
$tglpinjam = $_POST['thnp']."-".$_POST['blnp']."-".$_POST['tglp'];
$tglkembali = $_POST['thnk']."-".$_POST['blnk']."-".$_POST['tglk'];
$kodebuku = $_POST['kodebuku'];
$dendaid = (mysqli_num_rows(mysqli_query($con,"select * from denda"))+1);


$instopeminjaman = mysqli_query($con,"insert into peminjaman(peminjaman_kode,petugas_kode,peminjam_kode,peminjaman_tgl,peminjaman_tgl_kembali)values('$kodepeminjaman','$kodepetugas','$kodepeminjam','$tglpinjam','$tglkembali')");
$instodetpinjam = mysqli_query($con,"insert into detail_pinjam(peminjaman_kode,denda_id,buku_kode,status_kembali_detail)values('$kodepeminjaman','$dendaid','$kodebuku','0')");
$instodenda = mysqli_query($con,"INSERT INTO denda(denda_id,denda_per_hari)values('$dendaid','0')");

if($instopeminjaman && $instodetpinjam){
	echo "<script language='javascript'>alert('Data Berhasil Ditambahkan')</script>";
	echo "<script language='javascript'>window.location='../../?mode=det_peminjaman'</script>";
}else{
	echo "<script language='javascript'>alert('Data Gagal Ditambahkan')</script>";
	echo "<script language='javascript'>window.location='../../?mode=det_peminjaman'</script>";
}

?>
