<?php
include "../../function.php";

$kodepeminjam = mysql_fetch_object(mysql_query("select * from peminjaman where peminjaman_kode='$_GET[id]'"));
$kodedenda = mysql_fetch_object(mysql_query("select * from detail_pinjam where peminjaman_kode='$_GET[id]'"));
$date1 = $kodepeminjam->peminjaman_tgl_kembali;
$date2 = date("Y-m-d");

$pecah1 = explode("-",$date1);
$tgl1 = $pecah1[2];
$bln1 = $pecah1[1];
$thn1 = $pecah1[0];

$pecah2 = explode("-",$date2);
$tgl2 = $pecah2[2];
$bln2 = $pecah2[1];
$thn2 = $pecah2[0];

$jd1 = GregorianToJD($bln1,$tgl1,$thn1);
$jd2 = GregorianToJD($bln2,$tgl2,$thn2);

$selisih = $jd2-$jd1;

if($selisih>0){
   $denda = 1000*$selisih;
   $updenda = mysql_query("UPDATE denda SET denda_per_hari='$denda' WHERE denda_id='$kodedenda->denda_id'");
   if($updenda){
	   echo "<script language='javascript'>alert('Anda Dikenakan Denda Sebesar Rp. $denda')</script>";            
   }
}

$proses = mysql_query("UPDATE detail_pinjam SET detail_tgl_kembali='$date2',status_kembali_detail='1' WHERE peminjaman_kode='$_GET[id]'");
if($proses){
   echo "<script language='javascript'>alert('Buku dengan Kode Peminjaman $_GET[id] SUDAH dikembalikan')</script>";
   echo "<script language='javascript'>window.location='../../index.php?mode=pinjam_brp&id=$kodepeminjam->peminjam_kode'</script>";
}else{
   echo "<script language='javascript'>alert('Buku dengan Kode Peminjaman $_GET[id] GAGAL dikembalikan')</script>";
   echo "<script language='javascript'>window.location='../../index.php?mode=pinjam_brp&id=$kodepeminjam->peminjam_kode'</script>";    
} 

?>