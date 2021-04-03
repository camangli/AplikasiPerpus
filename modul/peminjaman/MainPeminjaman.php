<h3>Peminjaman Buku</h3>
<table width="619" border="0" cellspacing="2" cellpadding="3">
  <tr bgcolor="#4AA5FF">
    <td width="36" align="center"><strong>Kode</strong></td>
    <td width="61" align="center"><strong>Petugas</strong></td>
    <td width="73" align="center"><strong>Peminjam</strong></td>
    <td width="77" align="center"><strong>Tgl Pinjam</strong></td>
    <td width="114" align="center"><strong>Harus Dikembalikan Tgl</strong></td>
    <td width="98" align="center"><strong>Sudah Dikembalikan Tgl</strong></td>
    <td width="102" align="center"><strong>Setting</strong></td>
  </tr>

<?php
if($_POST['bywhat']=="byKode"){
    $sql = mysql_query("select * from peminjaman where peminjaman_kode = '$_POST[byKode]' order by peminjaman_kode asc");    
}else{
    $sql = mysql_query("select * from peminjaman order by peminjaman_kode asc");
}
$no = 1;
while($data = mysql_fetch_object($sql)){
$petugas = mysql_fetch_object(mysql_query("select * from petugas where petugas_kode='$data->petugas_kode'"));
$peminjam = mysql_fetch_object(mysql_query("select * from peminjam where peminjam_kode='$data->peminjam_kode'"));
$detail = mysql_fetch_object(mysql_query("select * from detail_pinjam where peminjaman_kode='$data->peminjaman_kode'"));
if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
echo "
<tr bgcolor=$warna>
  <td>$data->peminjaman_kode</td>
  <td>$petugas->petugas_nama</td>
  <td>$peminjam->peminjam_nama</td>
  <td>".formatindo($data->peminjaman_tgl)."</td>
  <td>".formatindo($data->peminjaman_tgl_kembali)."</td>
  <td>".formatindo($detail->detail_tgl_kembali)."</td>
  <td align=center><a class='button' href='modul/peminjaman/delete.php?id=$data->peminjaman_kode' onclick=\"return confirm('Anda Yakin Akan Menghapus Ini ?')\">Hapus Log</a></td>
</tr>
";
$no++;
}

?>
</table>
